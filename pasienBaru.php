<?php 
require_once("cekCookie.php");
require_once("header.php");
require_once("assets/db/database.php");
?>
<!-- ==== ISI KONTEN ==== -->
<?php

// Fungsi untuk mendapatkan daftar nama obat dari tabel stokobat
function getNamaObatOptions($koneksinya)
{
    $query = "SELECT id_obat, nama_obat FROM stokobat";
    $result = $koneksinya->query($query);

    $options = "";
    while ($row = $result->fetch_assoc()) {
        $options .= "<option value='{$row['id_obat']}'>{$row['nama_obat']}</option>";
    }

    return $options;
}

// Fungsi untuk mendapatkan daftar nama petugas dari tabel petugas
function getNamaPetugasOptions($koneksinya)
{
    $query = "SELECT id_petugas, nama_petugas FROM petugas";
    $result = $koneksinya->query($query);

    $options = "";
    while ($row = $result->fetch_assoc()) {
        $options .= "<option value='{$row['id_petugas']}'>{$row['nama_petugas']}</option>";
    }

    return $options;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $nama_pasien = $_POST["nama_pasien"];
    $npm = $_POST["npm"];
    $prodi = $_POST["prodi"];
    $keluhan = $_POST["keluhan"];
    $id_obat = $_POST["id_obat"];
    $jml_obat_diambil = $_POST["jml_obat_diambil"];
    $id_petugas = $_POST["id_petugas"];

    // Lakukan query INSERT
    $insertQuery = "INSERT INTO pasien (nama_pasien, npm, prodi, keluhan, id_obat, jml_obat_diambil, id_petugas) VALUES ('$nama_pasien', '$npm', '$prodi','$keluhan', '$id_obat', '$jml_obat_diambil', '$id_petugas')";
    $koneksinya->query($insertQuery);

    // Kurangi stok obat di tabel stokobat
    $updateStokQuery = "UPDATE stokobat SET jml_obat = jml_obat - $jml_obat_diambil WHERE id_obat = $id_obat";
    $hasilnya = $koneksinya->query($updateStokQuery);

    if ($hasilnya === TRUE) {
        echo "<script>window.location.href='dataPasien.php'</script>";
        exit;
    } else {
        echo "ERROR !!";
    }
}

?>

<h1>
    <center>PASIEN BARU</center>
</h1>
<div class="row">
    <div class="col-lg-12" style="width: 90%; margin:auto;">
        <form action="pasienBaru.php" method="POST" enctype="multipart/form-data">
            <div class="row mb-4">
                <div class="col-6 mt-3">
                    <label class=" ml-2" for="nama_pasien">Nama Pasien</label>
                    <input type="text" class="form-control" name="nama_pasien" placeholder="Masukan Nama">
                </div>
                <div class="col-6 mt-3">
                    <label class=" ml-2" for="npm">NPM</label>
                    <input type="text" class="form-control" name="npm" placeholder="Masukan NPM">
                </div>
                <div class="col-6 mt-3">
                    <label class=" ml-2" for="prodi">Prodi</label>
                    <input type="text" class="form-control" name="prodi" placeholder="Masukan Prodi">
                </div>
                <div class="col-6 mt-3">
                    <label class=" ml-2" for="keluhan">Keluhan</label>
                    <input type="text" class="form-control" name="keluhan" placeholder="Masukan Keluhan">
                </div>
                <div class="col-6 mt-3">
                    <label for="id_obat">Nama Obat</label>
                    <select class="form-control" name="id_obat" placeholder="Masukan Nama Obat">
                        <option disabled selected>Masukan Nama Obat</option>
                        <?php echo getNamaObatOptions($koneksinya); ?>
                    </select>
                </div>
                <div class="col-6 mt-3">
                    <label class=" ml-2" for="jml_obat_diambil">Jumlah Obat</label>
                    <input type="number" class="form-control" name="jml_obat_diambil" placeholder="Masukan Jumlah Obat yg di ambil">
                </div>
                <div class="col-6 mt-3">
                    <label for="id_petugas">Ditangani Oleh</label>
                    <select class="form-control" name="id_petugas" placeholder="Masukan Nama Petugas">
                        <option disabled selected>Masukan Nama Petugas</option>
                        <?php echo getNamaPetugasOptions($koneksinya); ?>
                    </select>
                </div>
                <div class="col-6 mt-5 ml-1">
                    <button class="btn btn-success">Simpan</button>
                </div>

            </div>
        </form>
    </div>
</div>

<!-- ==== END KONTEN ==== -->


<?php require_once("footer.php"); ?>