<?php
include "koneksi.php";
include "boot.php";
$id=$_GET['id'];
$tampil=$koneksi->query("select * from bukutamu_ahmad where no='$id'");

$b= $tampil->fetch_array();

?>
<div class="container mt-2">
        <div class="row">
            <div class="col col-">
          
  <form action="" method="post">
    <h3>FORM </h3>
    <form method="post" action="proses_edit.php"> <!-- Gantilah action dengan URL yang benar -->
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal" value="<?php echo $b['tanggal'] ?>" required>
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="nama" value="<?php echo $b['nama'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="alamat" value="<?php echo $b['alamat'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
        <select class="form-select" aria-label="Default select example" name="jk" required>
        <option value="Laki-Laki" <?php echo ($b['jk'] == 'Laki-Laki') ? 'selected' : ''; ?>>pilih jenis kelamin</option>
            <option value="Laki-Laki" <?php echo ($b['jk'] == 'Laki-Laki') ? 'selected' : ''; ?>>Laki-Laki</option>
            <option value="Perempuan" <?php echo ($b['jk'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Umur</label>
        <input type="number" class="form-control" id="exampleInputPassword1" name="umur" value="<?php echo $b['umur'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Keperluan</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="keperluan" value="<?php echo $b['keperluan'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Waktu</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="waktu" value="<?php echo $b['waktu'] ?>" required>
    </div>
    <button type="submit" class="btn btn-info" name="update">Edit</button>
</form>

</form>
</div>
</div>

<?php
if(isset($_POST['update'])){
  $tanggal = $_POST['tanggal'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $umur = $_POST['umur'];
  $keperluan = $_POST['keperluan'];
  $waktu = $_POST['waktu'];
  
  $update = $koneksi->query("UPDATE bukutamu_ahmad SET tanggal='$tanggal', nama='$nama', alamat='$alamat', umur='$umur', keperluan='$keperluan', waktu='$waktu' WHERE no='$id'");
  
  if($update){
      echo "Data berhasil diupdate";
  } else {
      echo "Data gagal diupdate";
  }



?>
<script>
    document.location.href='tampil.php';
</script>
<?php
}
?>
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
