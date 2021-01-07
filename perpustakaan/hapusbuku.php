<?php
  include "koneksi.php";
  $sqlb = mysqli_query($con, "delete from buku where id_buku='$_GET[id_buku]'");
  
 if($sqlb){
  	echo "<script> alert('Data Berhasil Dihapus'); 
	window.location.href='admin.php?module=petugas';</script>";
  }else{
  	echo "<script> alert('Gagal Menghapus');
	window.location.href='admin.php?module=petugas';</script>";
  }
?>