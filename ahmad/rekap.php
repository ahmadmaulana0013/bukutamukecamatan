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
include "boot.php";

?>

<body class="bg-white-subtle"> 

<form action="" method="get">

<div class="row g-3 align-items-center mt-3">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label"></label>
  </div>
  <div class="col-auto">
    <input type="date" name="awal" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label"></label>
  </div>
  <div class="col-auto">
    <input type="date" name="akhir" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
  <button type="submit" name="cari" value="<?php ['id']; ?>" class="btn btn-dark"><i class="bi bi-search"></i></button>
  </div>
  <div class="col d-grid gap-2 md-flex justify-content-md-end me-2">
  <button class="btn btn-dark" onclick="printDiv('print')" type="submit"><i class="bi bi-printer-fill"></i></button>
    </div>
    </form>
</div>
</div>  
<fieldset id="print">
<table class="table class text-center bg-info-emphasis mt-3 table-bordered">
  <thead class="table-secondary">
    <tr>
    <h2 class="text-center">REKAP DATA</h2>
    <th scope="col">No</th>
    <th scope="col">tanggal</th>
    <th scope="col">nama</th>
    <th scope="col">alamat</th>
    <th scope="col">jenis kelamin</th>
    <th scope="col">umur</th>
    <th scope="col">keperluan</th>
    <th scope="col">waktu</th>
    
    </tr>
</thead>
    <?php include "koneksi.php";
    @$cari=$_GET['awal'];
    if($cari==""){


    $tampil=$koneksi->query("select * from bukutamu_ahmad");
    while ($a=$tampil->fetch_array()){
        @$no++;
        ?>
   <tbody class="table mt-3">
     <tr>
     <td><?php echo $no; ?></td>
        <td><?php echo $a['tanggal'] ?></td>
        <td><?php echo $a['nama'] ?></td>
        <td><?php echo $a['alamat'] ?></td>
        <td><?php echo $a['jk'] ?></td>
        <td><?php echo $a['umur'] ?></td>
        <td><?php echo $a['keperluan'] ?></td>
        <td><?php echo $a['waktu'] ?></td>
      <?php
    }
}else{
 

  $bukutamu_ahmad=$_GET['cari'];
 
    $tampil=$koneksi->query("select * from bukutamu_ahmad where tanggal between'$_GET[awal]' and '$_GET[akhir]'");
    while ($a=$tampil ->fetch_array()){
      @$no++;
      ?>
  <tbody class="table mt-3">
    <tr>   
        <td><?php echo $no; ?></td>
        <td><?php echo $a['tanggal'] ?></td>
        <td><?php echo $a['nama'] ?></td>
        <td><?php echo $a['alamat'] ?></td>
        <td><?php echo $a['jk'] ?></td>
        <td><?php echo $a['umur'] ?></td>
        <td><?php echo $a['keperluan'] ?></td>
        <td><?php echo $a['waktu'] ?></td>
    <?php
    }
}
    ?>
    </tr>
    </tbody>
    </table>
    </fieldset>
    <script type="text/javascript">
    function printDiv(el) {
        var a= document.body.innerHTML;
        var b= document.getElementById(el).innerHTML;

        document.body.innerHTML=b;
        window.print();
        document.body.innerHTML=a;
    }

</script>
