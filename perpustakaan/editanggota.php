<?php 
include 'koneksi.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$id=$_GET['id_anggota'];
$sql= mysqli_query($con,"select * from anggota where id_anggota='$id'");
$data=mysqli_fetch_array($sql);
?>
<html>
<head>
    <title>Edit</title>                        
</head>
<body>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
            <tr style="color: black;">
                <td>Id Anggota</td>
                <td>:</td>
                <td> <input type="text" name="id_anggota" id="" value="<?php echo $data['id_anggota']?>"> </td>
            </tr>
			 <tr style="color: black;">
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id="" value="<?php echo $data['nama']?>"></td>
				</tr>
            <tr style="color: black;">
                <td>Alamat</td>
                <td>:</td>
                <td> <input type="text" name="alamat" id="" value="<?php echo $data['alamat']?>"> </td>
            </tr>
			<tr style="color: black;">
                <td>No Telpon</td>
                <td>:</td>
                <td> <input type="text" name="telp" id="" value="<?php echo $data['telp']?>"> </td>
            </tr>
			<tr style="color: black;">
<td></td>
<td></td>
                <td> 
				<input type="submit" name="submit" id="" class="btn btn-success" value="Simpan">
                <input type="reset" name="reset" id="" class="btn btn-danger" value="Hapus"> 
	</td>
            </tr>
        </form>
    </table>

    <?php
    include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $id_anggota = $_POST['id_anggota'];
        $nama = $_POST['nama'];
        $alamat= $_POST['alamat'];
        $telp= $_POST['telp'];

        $q = mysqli_query($con, "UPDATE anggota set id_anggota='$_POST[id_anggota]',nama='$_POST[nama]',
		alamat='$_POST[alamat]',telp='$_POST[telp]' where id_anggota='$_POST[id_anggota]'");
		
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='admin.php?module=anggota';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='admin.php?module=anggota';</script>";
        }
    }
    ?>
</body>
</html>