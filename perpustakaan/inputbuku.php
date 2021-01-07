<html>
<head>
    <title>Input Buku</title>                        
</head>
<body>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
            <tr style="color: black;">
                <td>Id Buku</td>
                <td>:</td>
                <td> <input type="text" name="id_buku" id=""> </td>
            </tr>
			 <tr style="color: black;">
                <td>judul Buku</td>
                <td>:</td>
                <td><input type="text" name="judul" id=""></td>
				</tr>
            <tr style="color: black;">
                <td>Pengarang</td>
                <td>:</td>
                <td> <input type="text" name="pengarang" id=""> </td>
            </tr>
			<tr style="color: black;">
                <td>Penerbit</td>
                <td>:</td>
                <td> <input type="text" name="penerbit" id=""> </td>
            </tr>
			<tr style="color: black;">
                <td>Tahun Terbit</td>
                <td>:</td>
                <td> <input type="text" name="tahun" id=""> </td>
            </tr>
			<tr style="color: black;">
                <td></td>
                <td></td>
                <td> 
		<input type="submit" name="submit" id="" class="btn btn-success" value="Simpan">
                <input type="reset" name="reset" id="" class="btn btn-danger" value="Reset"> 
				
		</td
        </form>
    </table>
    <?php
    include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $id_buku= $_POST['id_buku'];
        $judul = $_POST['judul'];
        $pengarang= $_POST['pengarang'];
        $penerbit= $_POST['penerbit'];
        $tahun= $_POST['tahun'];
        $q = mysqli_query($con, "INSERT INTO buku(id_buku,judul,pengarang,penerbit,tahun) VALUES('$id_buku','$judul'
		,'$pengarang','$penerbit','$tahun')");
		
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