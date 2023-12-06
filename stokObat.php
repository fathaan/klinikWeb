<?php require_once("hf/header.php"); ?>
<?php
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
                    <th scope="col">Nama Petugas</th>
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
<!-- ==== END KONTEN ==== -->


<?php require_once("hf/footer.php"); ?>