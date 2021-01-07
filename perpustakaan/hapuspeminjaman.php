<?php
  include "koneksi.php";
  $sqlb = mysqli_query($con, "delete from peminjaman where no_peminjaman='$_GET[no_peminjaman]'");
  
  if($sqlb){
  	echo "<script> alert('Data Berhasil Dihapus'); 
	window.location.href='admin.php?module=peminjaman';</script>";
  }else{
  	echo "<script> alert('Gagal Menghapus');
	window.location.href='admin.php?module=peminjaman';</script>";
  }
?>