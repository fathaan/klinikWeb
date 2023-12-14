<?php
require_once("cekCookie.php");
require_once("header.php");
require_once("assets/db/database.php");
$hasilData = $koneksinya->query("SELECT*FROM stokobat");
?>
<!-- ==== ISI KONTEN ==== -->

<h1>
    <center>STOK OBAT</center>
</h1> <br>
<center>
    <div class="row card" style="width: 80%;">
        <div class="col-xl-11">
            <table class="table">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Obat</th>
                    <th scope="col">Jumlah Stok Obat</th>
                </tr>
                <?php $i = 1;
                foreach ($hasilData as $data) : ?>
                    <tr>
                        <th scope="row"> <?= $i++ ?>. </th>
                        <td><?= $data['nama_obat'] ?></td>
                        <td><?= $data['jml_obat'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</center>
<div class="row mt-4">
    <div class="col-lg-12 text-center">
        <a href="stokObatTambah.php" class="btn btn-primary">Tambah Stok Obat</a>
    </div>
</div>
<!-- ==== END KONTEN ==== -->


<?php require_once("footer.php"); ?>