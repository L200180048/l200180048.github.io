<?php
  include "koneksi.php";
  $sqlb = mysqli_query($con, "delete from anggota where id_anggota='$_GET[id_anggota]'");
  
  if($sqlb){
  	echo "<script> alert('Data Berhasil Dihapus'); 
	window.location.href='admin.php?module=anggota';</script>";
  }else{
  	echo "<script> alert('Gagal Menghapus');
	window.location.href='admin.php?module=anggota';</script>";
  }
?>