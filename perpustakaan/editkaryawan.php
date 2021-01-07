<?php 
include 'koneksi.php';
$id=$_GET['id'];
$sql= mysqli_query($con,"select * from admin where id='$id'");
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
                <td>Id Karyawan</td>
                <td>:</td>
                <td> <input type="text" name="id" id="" value="<?php echo $data['id']?>"> </td>
            </tr>
			<tr style="color: black;">
                <td>Nama</td>
                <td>:</td>
		 <td> <input type="text" name="nama" id="" value="<?php echo $data['nama']?>"> </td>
            </tr>
			<tr style="color: black;">
                <td>Username</td>
                <td>:</td>
 		<td> <input type="text" name="username" id="" value="<?php echo $data['username']?>"> </td>
            </tr>
			<tr style="color: black;">
                <td>Password</td>
                <td>:</td>
                <td> <input type="text" name="password" id="" value="<?php echo $data['password']?>"> </td>
            </tr>
                <td></td>
                <td></td>
                <td> 
				<input type="submit" name="submit" id="" value="Simpan" class="btn btn-success">
                <input type="reset" name="reset" id=""   value="Hapus" class="btn btn-danger"> 
				
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

        $q = mysqli_query($con, "UPDATE admin set id='$_POST[id]',nama='$_POST[nama]',
		username='$_POST[username]',password='$_POST[password]' where id='$_POST[id]'");
	
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