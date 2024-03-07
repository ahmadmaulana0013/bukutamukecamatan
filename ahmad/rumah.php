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
 include "boot.php";?>
<body>
    <!-- bagian form  -->
    <div class="container mt-2">
        <div class="row">
            <div class="col ">
          
  <form action="input.php" method="post">
    <h3>ISI DATA</h3>
    <form id="myForm" onsubmit="return validateForm()">
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
        <input readonly type="date" class="form-control" id="exampleInputPassword1" name="tanggal" value="<?php echo date('Y-m-d'); ?>" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="nama" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="alamat" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
        <select class="form-select" aria-label="Default select example" name="jk" required>
            <option value="" disabled selected>Pilih Jenis Kelamin</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Umur</label>
        <input type="number" class="form-control" id="exampleInputPassword1" name="umur" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Keperluan</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="keperluan" required>
    </div>

    <button type="submit" class="btn bg-info">Simpan</button>
</form>

<script>
    function validateForm() {
        var form = document.getElementById("myForm");
        if (form.checkValidity() === false) {
            // Jika formulir tidak valid, mencegah pengiriman
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add("was-validated");
        return form.checkValidity();
    }
</script>

</form>
</div>
</div>
<!-- tutup form  -->
<!-- ini bagian tampil  -->
<br>
<!-- tutup tampil -->
  </body>
 

