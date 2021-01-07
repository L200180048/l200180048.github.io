<html>
<head>
    <title>input Anggota</title>                        
</head>
<body>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
            <tr style="color: black;">
                <td>Id Anggota</td>
                <td>:</td>
                <td> <input type="text" name="id_anggota" id=""> </td>
            </tr>
			 <tr style="color: black;">
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id=""></td>
				</tr>
            <tr style="color: black;">
                <td>Alamat</td>
                <td>:</td>
                <td> <input type="text" name="alamat" id=""> </td>
            </tr>
			<tr style="color: black;">
                <td>No Telpon</td>
                <td>:</td>
                <td> <input type="text" name="telp" id=""> </td>
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
        $id_anggota= $_POST['id_anggota'];
        $nama = $_POST['nama'];
        $alamat= $_POST['alamat'];
        $telp= $_POST['telp'];

        $q = mysqli_query($con, "INSERT INTO anggota(id_anggota,nama,alamat,telp) VALUES('$id_anggota','$nama'
		,'$alamat','$telp')");
		
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