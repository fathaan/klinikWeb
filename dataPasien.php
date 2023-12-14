<?php
require_once("cekCookie.php");
require_once("header.php");
require_once("assets/db/database.php");
// $hasilData = $koneksinya->query("SELECT*FROM pasien");

$query = "SELECT pasien.id_pasien, pasien.nama_pasien, pasien.npm, pasien.prodi, pasien.keluhan, stokobat.nama_obat, pasien.jml_obat_diambil, petugas.nama_petugas
FROM pasien
JOIN stokobat ON pasien.id_obat = stokobat.id_obat
JOIN petugas ON pasien.id_petugas = petugas.id_petugas";
$hasilData = $koneksinya->query($query);

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
                    <th scope="col">Keluhan</th>
                    <th scope="col">Nama Obat</th>
                    <th scope="col">Jumlah Obat</th>
                    <th scope="col">Petugas</th>
                </tr>
                <?php $i = 1;
                foreach ($hasilData as $data) : ?>
                    <tr>
                        <th scope="row"> <?= $i++ ?>. </th>
                        <td><?= $data['nama_pasien'] ?></td>
                        <td><?= $data['npm'] ?></td>
                        <td><?= $data['prodi'] ?></td>
                        <td><?= $data['keluhan'] ?></td>
                        <td><?= $data['nama_obat'] ?></td>
                        <td><?= $data['jml_obat_diambil'] ?></td>
                        <td><?= $data['nama_petugas'] ?></td>
                        <td>
                            <a href="pasienHapus.php?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus !?')">
                                Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</center>
<!-- ==== END KONTEN ==== -->


<?php require_once("footer.php"); ?>