<h2>Tabel Buku</h2>
<div class="alert alert-info">TABEL BUKU</div>
<A href="admin.php?module=inputbuku" class="btn btn-primary">Tambah Data</a>
<table width="100%" border="1" class="table table-bordered table-striped">
<tr> 

<tr> 
<th>No</th>
<th>Id_Buku</th>
<th>Judul Buku</th>
<th>Pengarang</th>
<th>Penerbit</th>
<th>Tahun Terbit</th>
<th>Aksi</th>
</tr>


<?php  
include "koneksi.php";
$sql = mysqli_query($con,"select * from buku ");
$no=1;
while($row=mysqli_fetch_array($sql)){
?>
<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['id_buku'] ?> </td>
<td align="center"><?php echo $row['judul'] ?> </td>
<td align="center"><?php echo $row['pengarang'] ?> </td>
<td align="center"><?php echo $row['penerbit'] ?> </td>
<td align="center"><?php echo $row['tahun'] ?> </td>

<td align="center">
<a href="admin.php?module=editbuku&id_buku=<?php echo $row['id_buku'];?>"class="btn btn-success">Edit</a>
<a href="admin.php?module=hapusbuku&id_buku=<?php echo $row['id_buku'];?>"class="btn btn-danger">Hapus</a>
</td>
</tr>

<?php 
$no++;
}
?>
</table> 
