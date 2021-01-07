<h2>Tabel Peminjaman</h2>
<div class="alert alert-info">TABEL DATA PEMINJAMAN</div>
<A href="admin.php?module=inputpeminjaman" class="btn btn-primary">Tambah Data</a>
<table width="100%" border="1" class="table table-bordered table-striped">
<tr>
<form method="POST" action="">
<td>Pilih Tanggal</td><td><input type="date" name="hari_ini"></td>
<td><button type="submit" name="cari" style="background-color: blue;">Cari</td>
</tr>
</form>

<tr> 
<th>No</th>
<th>No Peminjaman</th>
<th>Nama Anggota</th>
<th>Judul Buku</th>
<th>Tanggal Pemnjaman</th>
<th>Tanggal Kembali</th>
<th>Aksi</th>
</tr>
<?php  
include "koneksi.php";
 if (isset($_POST['cari'])){
  $hari_ini=$_POST['hari_ini'];
  $sql= mysqli_query($con, "select * from peminjaman where peminjaman.tgl_pinjam='$hari_ini'");
  }else{
$sql = mysqli_query($con,"select * from peminjaman");
}
$no=1;
$total=0;
while($row=mysqli_fetch_array($sql)){
?>
<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['no_peminjaman'] ?> </td>
<td align="center"><?php echo $row['nama_anggota'] ?> </td>
<td align="center"><?php echo $row['judul'] ?> </td>
<td align="center"><?php echo $row['tgl_pinjam'] ?> </td>
<td align="center"><?php echo $row['tgl_kembali'] ?> </td>

<td align="center">
<a href="admin.php?module=editpeminjaman&no_peminjaman=<?php echo $row['no_peminjaman'];?>"class="btn btn-success">Edit</a>
<a href="admin.php?module=hapuspeminjaman&no_peminjaman=<?php echo $row['no_peminjaman'];?>"class="btn btn-danger">Hapus</a>
</td>
</tr>

<?php 
$no++;
}
?>
</table> 