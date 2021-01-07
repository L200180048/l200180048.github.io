<h2>Tabel Karyawan</h2>
<div class="alert alert-info">TABEL KARYAWAN</div>
<A href="admin.php?module=inputkaryawan" class="btn btn-primary">Tambah Data</a>
<table width="100%" border="1" class="table table-bordered table-striped">

<tr> 
<th>No</th>
<th>Id Karyawan</th>
<th>Nama</th>
<th>Username</th>
<th>Password</th>
<th>Aksi</th>
</tr>
<?php  
include "koneksi.php";
$sql = mysqli_query($con,"select * from admin");
$no=1;
while($row=mysqli_fetch_array($sql)){
?>
<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['id'] ?> </td>
<td align="center"><?php echo $row['nama'] ?> </td>
<td align="center"><?php echo $row['username'] ?> </td>
<td align="center"><?php echo $row['password'] ?> </td>
<td align="center">
<a href="admin.php?module=editkaryawan&id=<?php echo $row['id'];?>"class="btn btn-success">Edit</a>
<a href="admin.php?module=hapuskaryawan&id=<?php echo $row['id'];?>"class="btn btn-danger">Hapus</a>
</td>
</tr>
<?php 
$no++;
}
?>
</table> 