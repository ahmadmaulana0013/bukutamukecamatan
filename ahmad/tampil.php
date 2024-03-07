<?php
session_start();
$user = $_SESSION['username'];
if ($user == "") {
    ?>
    <script>
        document.location = 'index.php';
    </script>
<?php
} else {
}
include "boot.php";

?>

<br>
<h2 class="text-center">DAFTAR TAMU</h2>
<table class="table table-bordered">
    <thead class="table-secondary ">
        <tr class="text-nowrap">
            <th>no</th>
            <th>tanggal</th>
            <th>nama</th>
            <th>alamat</th>
            <th>jenis kelamin</th>
            <th>umur</th>
            <th>keperluan</th>
            <th>waktu</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "koneksi.php";
        $tampil = $koneksi->query("SELECT * FROM bukutamu_ahmad");
        $data = array_reverse($tampil->fetch_all(MYSQLI_ASSOC));

        foreach ($data as $t) {
            @$no++;
        ?>

            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $t['tanggal'] ?></td>
                <td><?php echo $t['nama'] ?></td>
                <td><?php echo $t['alamat'] ?></td>
                <td><?php echo $t['jk'] ?></td>
                <td><?php echo $t['umur'] ?></td>
                <td><?php echo $t['keperluan'] ?></td>
                <td><?php echo $t['waktu'] ?></td>
                <td class="text-nowrap">
                    <a href="hapus.php?id=<?php echo $t['no'] ?>" onclick="return confirm('YAKIN INGIN MENGHAPUS?')"><button class="btn bg-danger text-light"><i class="bi bi-trash-fill"></i></button></a>
                    <a href="update.php?id=<?php echo $t['no'] ?>" onclick="return confirm('YAKIN INGIN MENGEDIT?')"><button class="btn bg-info text-light"><i class="bi bi-pencil"></i></button></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
