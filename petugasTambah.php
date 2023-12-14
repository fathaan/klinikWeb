<?php
require_once("cekCookie.php");
require_once("header.php");
require_once("assets/db/database.php"); ?>
<!-- ==== ISI KONTEN ==== -->
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama_petugas   = $_POST['nama_petugas'];
    $username       = $_POST['username'];
    $password       = $_POST['password'];

    $hasilnya = $koneksinya->query("INSERT INTO petugas(nama_petugas, username, password) 
        VALUES( '$nama_petugas', '$username', '$password')");

    if ($hasilnya === TRUE) {
        echo "<script>window.location.href='dataPetugas.php'</script>";
        exit;
    } else {
        echo "TERJADI KESALAHAN";
    }
}
?>
<h1>
    <center>TAMBAH PETUGAS KLINIK</center>
</h1>
<div class="row mb-4 text-left" style="width: 90%; margin:auto">
    <div class="col-lg-12">
        <a href="dataPetugas.php" class="btn btn-danger">Kembali</a>
    </div>
</div>

<div class="row">
    <div class="col-lg-15" style="width: 90%; margin:auto">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row mb-4">
                <div class="col-10 mt-3">
                    <label class=" ml-2" for="nama_petugas">Nama Petugas</label>
                    <input type="text" class="form-control" name="nama_petugas" placeholder="Masukan Nama">
                </div>
                <div class="col-10 mt-3">
                    <label class=" ml-2" for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukan username">
                </div>
                <div class="col-10 mt-3">
                    <label class=" ml-2" for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukan Password">
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