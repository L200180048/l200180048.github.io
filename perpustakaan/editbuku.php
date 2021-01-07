<?php 
include 'koneksi.php';
$id=$_GET['id_buku'];
$sql= mysqli_query($con,"select * from buku where id_buku='$id'");
$data=mysqli_fetch_array($sql);
?>
<html lang="en">

<head>
    <title>Perpustakaan</title>                        
</head>

<body>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
		<tr style="color: black;">
                <td>Id Buku</td>
                <td>:</td>
                <td><input type="text" name="id_buku" id="" value="<?php echo $data['id_buku']?>"></td>
				</tr>
			<tr style="color: black;">
                <td>Judul Buku</td>
                <td>:</td>
                <td><input type="text" name="judul" id="" value="<?php echo $data['judul']?>"></td>
				</tr>
			<tr style="color: black;">
                <td>Pengarang</td>
                <td>:</td>
                <td><input type="text" name="pengarang" id="" value="<?php echo $data['pengarang']?>"></td>
				</tr>
            <tr style="color: black;">
                <td>Penerbit</td>
                <td>:</td>
                <td><input type="text" name="penerbit" id="" value="<?php echo $data['penerbit']?>"></td>
                </tr>
            <tr>
                <tr style="color: black;">
                <td>Tahun Terbit</td>
                <td>:</td>
                <td><input type="text" name="tahun" id="" value="<?php echo $data['tahun']?>"></td>
                </tr>
                <td></td>
                <td></td>
                <td> 
		<input type="submit" name="submit" id="" class="btn btn-success" value="Simpan">
                <input type="reset" name="reset" id="" class="btn btn-danger" value="Reset"> 		
		</td>
            </tr>
        </form>
    </table>

    <?php
    include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $id_buku = $_POST['id_buku'];
        $judul = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $penerbit= $_POST['penerbit'];
        $tahun= $_POST['tahun'];

        $q = mysqli_query($con, "UPDATE buku set id_buku='$_POST[id_buku]',
            judul='$_POST[judul]', pengarang='$_POST[pengarang]', penerbit='$_POST[penerbit]', tahun='$_POST[tahun]'
            where id_buku='$_POST[id_buku]'");	
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='admin.php?module=buku';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='admin.php?module=buku';</script>";
        }
    }

    ?>

</body>
</html>