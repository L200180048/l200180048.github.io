<?php 
session_start();
include 'koneksi.php';
if($_SESSION['username']==""){
header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Admin</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    

  </head>
  <body>
<div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <!--header saat mobile version-->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> PERPUSTAKAAN</a>
          </div><!--end header saat mobile version-->

          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="admin.php?module=home">HOME</a></li>
              <li><a href="admin.php?module=petugas">KARYAWAN</a></li>
              <li><a href="admin.php?module=anggota">ANGGOTA</a></li>
              <li><a href="admin.php?module=buku">BUKU</a></li>
               <li><a href="admin.php?module=peminjaman">PEMINJAMAN</a></li>
              <li><a href="admin.php?module=logout">LOGOUT</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
<?php
include "isi.php";
?>


    </div> <!-- /container -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>