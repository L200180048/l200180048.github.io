<h2>Tabel Anggota</h2>
<div class="alert alert-info">TABEL DATA ANGGOTA</div>
<A href="admin.php?module=inputanggota" class="btn btn-primary">Tambah Data</a>
<table width="100%" border="1" class="table table-bordered table-striped">
<tr> 
<th>No</th>
<th>Id Anggota</th>
<th>Nama</th>
<th>Alamat</th>
<th>No Telpon</th>
<th>Aksi</th>
</tr>
<?php  
include "koneksi.php";
$sql = mysqli_query($con,"select * from anggota");
$no=1;
while($row=mysqli_fetch_array($sql)){
?>
<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['id_anggota'] ?> </td>
<td align="center"><?php echo $row['nama'] ?> </td>
<td align="center"><?php echo $row['alamat'] ?> </td>
<td align="center"><?php echo $row['telp'] ?> </td>

<td align="center">
<a href="admin.php?module=editanggota&id_anggota=<?php echo $row['id_anggota'];?> "class="btn btn-success">Edit</a>
<a href="admin.php?module=hapusanggota&id_anggota=<?php echo $row['id_anggota'];?>"class="btn btn-danger">Hapus</a>
</td>
</tr>
<?php 
$no++;
}
?>
</table> 