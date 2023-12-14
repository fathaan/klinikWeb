<?php
require_once("cekCookie.php");
require_once("header.php");
require_once("assets/db/database.php"); ?>
<!-- ==== ISI KONTEN ==== -->
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama_obat   = $_POST['nama_obat'];
    $jml_obat       = $_POST['jml_obat'];

    $hasilnya = $koneksinya->query("INSERT INTO stokobat(nama_obat, jml_obat) 
        VALUES( '$nama_obat', '$jml_obat')");

    if ($hasilnya === TRUE) {
        echo "<script>window.location.href='stokObat.php'</script>";
        exit;
    } else {
        echo "TERJADI KESALAHAN";
    }
}
?>
<h1>
    <center>TAMBAH STOK OBAT</center>
</h1>
<div class="row mb-4 text-left" style="width: 90%; margin:auto">
    <div class="col-lg-12">
        <a href="stokObat.php" class="btn btn-danger">Kembali</a>
    </div>
</div>

<div class="row">
    <div class="col-lg-15" style="width: 90%; margin:auto">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row mb-4">
                <div class="col-10 mt-3">
                    <label class=" ml-2" for="nama_obat">Nama Obat</label>
                    <input type="text" class="form-control" name="nama_obat" placeholder="Masukan Nama">
                </div>
                <div class="col-10 mt-3">
                    <label class=" ml-2" for="jml_obat">Username</label>
                    <input type="number" class="form-control" name="jml_obat" placeholder="Masukan Jumlah Obat">
                </div>

                <div class="col-6 mt-5 ml-1">
                    <button class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </form>
    </div>
</div>

<!-- ==== END KONTEN ==== -->


<?php require_once("footer.php"); ?>