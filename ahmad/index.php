<?php

include "boot.php";

?>
  <div class="container text-white">
    <div class="text-center">
      <br><br><br><br><br><br>

    <h3>SELAMAT DATANG DI</h3>
    <h2><b>buku tamu kecamatan</b></h2>
    </div>
</div>
   <body style="background-image: url(ii.Jpg);
   background-size: cover; overflow-x: hidden;">

<div class="container col-2 mt-3">
  <div class="mt-5">
<form action="" method="post">
  <div class="mb-4">
  
    <label for="exampleInputEmail1" class="form-label text-white">username</label>
    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
    <div id="username" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-white">Password</label>
    <input type="password" name="password"class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" name="log" class="btn btn-primary">login</button>
  <!-- <input type="submit" name="log" value="login"> -->
</form>

</div>



<?php
session_start();
include "koneksi.php";
if (isset($_POST['log'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
echo $username;
$kueri   = "select * from login where username='$username' and password='$password'";
$masuk   = $koneksi -> query($kueri);
$cek     = $masuk -> num_rows;

if ($cek > 0) {

$_SESSION['username'] = $username;
?>

<script type="text/javascript">

	document.location.href= 'navbar.php';
</script>

<?php
	





}else{
  echo "<div class='text-light'>LOGIN ANDA GAGAL</div>" ;
  
}

}

?>

  </div>
</div>
</div>
</div>
