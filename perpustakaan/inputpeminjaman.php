<html>
<head>
    <title>Input Peminjaman</title>                        
</head>
<body>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
            <tr style="color: black;">
                <td>No peminjaman</td>
                <td>:</td>
                <td> <input type="text" name="no_peminjaman" id=""> </td>
            </tr>
			 <tr style="color: black;">
                <td>Nama Anggota</td>
                <td>:</td>
                <td><input type="text" name="nama_anggota" id=""></td>
				</tr>
				<tr style="color: black;">
                <td>Judul Buku</td>
                <td>:</td>
                <td><input type="text" name="judul" id=""></td>
				</tr>
			<tr style="color: black;">
                <td>Tanggal Pinjam</td>
                <td>:</td>
                <td><input type="date" name="tgl_pinjam" id=""></td>
				</tr>
			<tr style="color: black;">
                <td>Tanggal Kembali</td>
                <td>:</td>
                <td><input type="date" name="tgl_kembali" id=""></td>
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

        $q = mysqli_query($con, "INSERT INTO peminjaman (no_peminjaman,nama_anggota,judul,tgl_pinjam,tgl_kembali) VALUES('$no_peminjaman','$nama_anggota','$judul','$tgl_pinjam','$tgl_kembali')");
		
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