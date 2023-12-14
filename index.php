<?php
require_once("cekCookie.php");
require_once("header.php");
require_once("assets/db/database.php");


// Query untuk menghitung jumlah pasien
$queryJumlahPasien = "SELECT COUNT(*) as totalPasien FROM pasien";
$resultJumlahPasien = $koneksinya->query($queryJumlahPasien);

// Ambil hasil query
$rowJumlahPasien = $resultJumlahPasien->fetch_assoc();
$jumlahPasien = $rowJumlahPasien['totalPasien'];

// Query untuk menghitung jumlah stok obat
$queryJumlahObat = "SELECT SUM(jml_obat) as totalObat FROM stokobat";
$resultJumlahObat = $koneksinya->query($queryJumlahObat);

// Ambil hasil query
$rowJumlahObat = $resultJumlahObat->fetch_assoc();
$jumlahObat = $rowJumlahObat['totalObat'];
?>


<!-- ==== ISI KONTEN ==== -->
<div class="mainDesc">
    <div class="desc">
        <div class="text">
            <span>Klinik Kampus Polinela merupakan tempat untuk memberikan pelayanan medik jangka pendek, bagi semua masyarakat sekitar kampus yang menderita sakit atau luka sesuai dengan sakit yang dideritanya. Klinik ini berfungsi untuk menyediakan pelayanan kesehatan perorangan yang menyediakan pelayanan medis dasar.</span>
            <a href="#">Read More</a>
        </div>
        <div class="image">
            <img src="assets/imgs/dashboard-gmbr.png" width=180>
        </div>
    </div>
    <aside>
        <div class="countPasien" data-tilt>
            <span><strong>Total Pasien</strong></span> <br>
            <span><?php echo $jumlahPasien; ?> Pasien</span>
        </div>
        <div class="countObat" data-tilt>
            <span><strong>Total Stok Obat</strong></span> <br>
            <span><?php echo $jumlahObat; ?> pcs Obat</span>
        </div>
    </aside>
</div>
<div class="nameKelompok">
    <table class="table caption-top table-hover">
        <h3><strong>By Kelompok</strong></h3>
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Nama</th>
                <th scope="col">NPM</th>
                <th scope="col">Prodi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td>Adellya Pusphita</td>
                <td>22753039</td>
                <td>Manajemen Informatika</td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>Iratih Anggini Rega Putri</td>
                <td>22753056</td>
                <td>Manajemen Informatika</td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>Muhammad Al Fathan</td>
                <td>22753062</td>
                <td>Manajemen Informatika</td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>Wiji Lestari</td>
                <td>22753073</td>
                <td>Manajemen Informatika</td>
            </tr>
        </tbody>
    </table>
</div>
<script src="assets/js/gyro.js"></script>
<!-- ==== END KONTEN ==== -->


<?php require_once("footer.php"); ?>