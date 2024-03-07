<?php 
session_start();
$user=$_SESSION['username'];
if ($user==""){
  ?>
  <script>
  document.location='index.php';
  </script>
  <?php
}else{
}
include "boot.php"
?>
<body style="background-image: url(oo.jpg);
  background-size: cover; overflow-x: hidden;"widht="100px">

<div class="container">
<nav class="navbar navbar-expand-lg bg-info-subtle">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page"h="#"><h5>BUKU TAMU KECAMATAN</h2 >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a> 
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"></a>
        </li>
      </ul>
      <form action="cari.php" method="post" class="d-flex" role="search" target="konten">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- <div class="container"> 
<div class="row">-->
  <!-- ini bagian side  -->
  <div class="row">
<div class="col bg-light col-3 mt-2"style="margin-left: 10px";>
<ul class="list-group mt-2" >
<li class="list-group-item list-group-item-action bg-white">
  
  <label ><i class="bi bi-person-plus-fill col-2" ></i></label>
  <a href="rumah.php" target="konten">  
  <label ><font style="color:black;"> <b> FORMULIR </b></font></label></a>
  </li>
  <li class="list-group-item list-group-item-action bg-white">
  <label class=""><i class="bi bi-person-lines-fill"></i></label>
  <a href="tampil.php" target="konten">  
  <label ><font style="color:black;"> <b>TAMPILAN FORMULIR</b></font></label></a>
  </li>
  <li class="list-group-item bg-white">
  <label class=""><i class="bi bi-list-ul"></i></label>
  <a href="rekap.php" target="konten">  
  <label ><font style="color:black;"> <b>REKAP DATA</b></font></label></a>
  </li>
  <li class="list-group-item bg-white">
  <label ><i class="bi bi-box-arrow-in-left"></i></i></label>
  <a href="logout.php" target="">
      <label  onclick="return confirm('YAKIN INGIN KELUAR?')"><font style="color:black;"> <b>KELUAR</b></font></label></a> 
  </li>
</ul>
</div>
  <!-- tutup side  -->
  <!-- ini bagian content  -->
    <div class="col col- mt-2">
      <iframe src="rumah.php" frameborder="0" name="konten" width="100%" height="600"></iframe>

    </div>
    <!-- tutup content  -->
    </div>
</div>




