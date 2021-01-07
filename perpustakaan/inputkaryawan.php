<html>
<head>
    <title>Input Kamar</title>                        
</head>
<body>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
            <tr style="color: black;">
                <td>Id Karyawan</td>
                <td>:</td>
                <td> <input type="text" name="id" id=""> </td>
            </tr>
			<tr style="color: black;">
                <td>Nama</td>
                <td>:</td>
                 <td> <input type="text" name="nama" id=""> </td>
            </tr>
			<tr style="color: black;">
                <td>Username</td>
                <td>:</td>
                 <td> <input type="text" name="username" id=""> </td>
            </tr>
			<tr style="color: black;">
                <td>Password</td>
                <td>:</td>
                <td> <input type="text" name="password" id=""> </td>
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
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $username= $_POST['username'];
        $password= $_POST['password'];

        $q = mysqli_query($con, "INSERT INTO admin(id,nama,username,password) VALUES('$id','$nama','$username','$password')");
		
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='admin.php?module=petugas';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='admin.php?module=petugas';</script>";
        }
    }
    ?>
</body>
</html>