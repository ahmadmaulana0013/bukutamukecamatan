<?php
include "koneksi.php";
$id=$_GET['id'];
$delete=$koneksi->query("delete from bukutamu_ahmad where no='$id'")
?>
<script>
    document.location.href='tampil.php';
</script>
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