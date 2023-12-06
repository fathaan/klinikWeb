<?php require_once("hf/header.php"); ?>
<?php
require_once("assets/db/database.php");
$hasilData = $koneksinya->query("SELECT*FROM pasien");
?>
<!-- ==== ISI KONTEN ==== -->

<h1>
    <center>DATA PASIEN</center>
</h1> <br>
<center>
<div class="row card" style="width: 80%;">
    <div class="col-xl-11">
        <table class="table">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NPM</th>
                <th scope="col">Prodi</th>
                <th scope="col">Nama Obat</th>
                <th scope="col">Jumlah Obat</th>
                <th scope="col">di Tangani Oleh.</th>
            </tr>
            <?php $i = 1;
            foreach ($hasilData as $data) : ?>
                <tr>
                    <th scope="row"> <?= $i++ ?>. </th>
                    <td><?= $data['nama_pasien'] ?></td>
                    <td><?= $data['npm'] ?></td>
                    <td><?= $data['prodi'] ?></td>
                    <td><?= $data['nama_obat'] ?></td>
                    <td><?= $data['jml_ambil_obat'] ?></td>
                    <td><?= $data['nama_petugas'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
</center>
<!-- ==== END KONTEN ==== -->


<?php require_once("hf/footer.php"); ?>