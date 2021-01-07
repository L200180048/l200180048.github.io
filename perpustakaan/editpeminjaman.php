<?php 
include 'koneksi.php';
$id=$_GET['no_peminjaman'];
$sql= mysqli_query($con,"select * from peminjaman where no_peminjaman='$id'");
$data=mysqli_fetch_array($sql);
?>
<html>

<head>
    <title>Edit Peminjaman</title>                        
</head>

<body>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
            <tr style="color: black;">
                <td>No Peminjaman</td>
                <td>:</td>
                <td> <input type="text" name="no_peminjaman" id="" value="<?php echo $data['no_peminjaman']?>"> </td>
            </tr>
			 <tr style="color: black;">
                <td>Nama Anggota</td>
                <td>:</td>
                <td><input type="text" name="nama_anggota" id="" value="<?php echo $data['nama_anggota']?>"></td>
				</tr>
				<tr style="color: black;">
                <td>Judul Buku</td>
                <td>:</td>
                <td><input type="text" name="judul" id="" value="<?php echo $data['judul']?>"></td>
				</tr>
			<tr style="color: black;">
                <td>Tanggal Pinjam</td>
                <td>:</td>
                <td><input type="date" name="tgl_pinjam" id="" value="<?php echo $data['tgl_pinjam']?>"></td>
				</tr>
			<tr style="color: black;">
                <td>Tanggal Kembali</td>
                <td>:</td>
                <td><input type="date" name="tgl_kembali" id="" value="<?php echo $data['tgl_pinjam']?>"></td>
				</tr>
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
        $no_peminjaman = $_POST['no_peminjaman'];
        $nama_anggota = $_POST['nama_anggota'];
        $judul = $_POST['judul'];
        $tgl_pinjam= $_POST['tgl_pinjam'];
        $tgl_kembali= $_POST['tgl_kembali'];


        $q = mysqli_query($con, "UPDATE peminjaman set no_peminjaman='$_POST[no_peminjaman]',nama_anggota='$_POST[nama_anggota]',judul='$_POST[judul]',
		tgl_pinjam='$_POST[tgl_pinjam]',tgl_kembali='$_POST[tgl_kembali]'where no_peminjaman='$_POST[no_peminjaman]'");
		
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='admin.php?module=peminjaman';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='admin.php?module=peminjaman';</script>";
        }
    }
    ?>
</body>
</html>