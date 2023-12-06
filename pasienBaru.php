<?php require_once("hf/header.php"); ?>
<?php require_once("assets/db/database.php"); ?>
<!-- ==== ISI KONTEN ==== -->
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama       = $_POST['nama_pasien'];
    $npm        = $_POST['npm'];
    $prodi      = $_POST['prodi'];
    $nmObat     = $_POST['nama_obat'];
    $jmlObat    = $_POST['jml_ambil_obat'];
    $nmPtgs     = $_POST['nama_petugas'];

    $hasilnya = $koneksinya->query("INSERT INTO pasien(nama_pasien, npm, prodi, nama_obat, jml_ambil_obat, nama_petugas) VALUES('$nama','$npm','$prodi','$nmObat','$jmlObat','$nmPtgs')");

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
        <form action="" method="POST" enctype="multipart/form-data">
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
                    <label for="nama_obat">Nama Obat</label>
                    <select class="form-control" name="nama_obat" placeholder="Masukan Nama Obat">
                        <option disabled>Masukan Nama Obat</option>
                        <?php
                        // Fetch Obat names from the database
                        $queryObat = $koneksinya->query("SELECT id_obat, nama_obat FROM stokobat");

                        // Display Obat names as options
                        while ($rowObat = $queryObat->fetch_assoc()) {
                            $idObat = $rowObat['id_obat'];
                            $namaObat = $rowObat['nama_obat'];
                            echo "<option value='$idObat'>$namaObat</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-6 mt-3">
                    <label class=" ml-2" for="jml_ambil_obat">Jumlah Obat</label>
                    <input type="number" class="form-control" name="jml_ambil_obat" placeholder="Masukan Jumlah Obat yg di ambil">
                </div>
                <div class="col-6 mt-3">
                    <label for="nama_petugas">Ditangani Oleh</label>
                    <select class="form-control" name="nama_petugas" placeholder="Masukan Nama Petugas">
                        <option disabled>Masukan Nama Petugas</option>
                        <?php
                        // Fetch petugas names from the database
                        $queryPetugas = $koneksinya->query("SELECT id_petugas, nama_petugas FROM petugas");

                        // Display petugas names as options
                        while ($rowPetugas = $queryPetugas->fetch_assoc()) {
                            $idPetugas = $rowPetugas['id_petugas'];
                            $namaPetugas = $rowPetugas['nama_petugas'];
                            echo "<option value='$idPetugas'>$namaPetugas</option>";
                        }
                        ?>
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


<?php require_once("hf/footer.php"); ?>