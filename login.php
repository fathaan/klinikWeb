<?php
session_start();
require_once("assets/db/database.php");

// cek cookie
if (isset($_COOKIE["login"])) {
  if ($_COOKIE["login"] == "benar") {
    $_SESSION["nama"] = $row["nama_petugas"];
  }
}

$textError = "";

if (empty($_POST["username"]) || empty($_POST["password"])) {
  // ... (Tambahkan logika jika username atau password kosong)
} else {
  // Escape input untuk mencegah SQL injection
  $username = mysqli_real_escape_string($koneksinya, $_POST["username"]);
  $password = mysqli_real_escape_string($koneksinya, $_POST["password"]);

  // Query ke database
  $query = "SELECT * FROM petugas WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($koneksinya, $query);

  // Periksa apakah data ditemukan
  if ($result && mysqli_num_rows($result) > 0) {
    // Data ditemukan, set session dan arahkan ke index.php
    $row = mysqli_fetch_assoc($result);
    $_SESSION["id"] = $row["id_petugas"];
    $_SESSION["nama"] = $row["nama_petugas"];
    header("Location: index.php");

    // Set Cookie jika dicentang
    if (isset($_POST["simpan"])) {
      setcookie('login', 'benar', time() + 30);
    }
  } else {
    // Data tidak ditemukan, tampilkan pesan kesalahan
    $textError = "Username atau Password tidak ditemukan!<br> Silahkan Coba Lagi.";
  }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Polinela</title>
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
  <div class="container">

    <img src="assets/imgs/suntikKlinik.png" class="floating-image suntik">
    <img src="assets/imgs/koperKlinik.png" class="floating-image koper">
    <img src="assets/imgs/laptopKlinik.png" class="floating-image laptop">
    <img src="assets/imgs/hpKlinik.png" class="floating-image hp">
    <img src="assets/imgs/bangKlinik.png" class="floating-image bang">
    <img src="assets/imgs/mbakKlinik.png" class="floating-image mbak">
    <img src="assets/imgs/stetoskopKlinik.png" class="floating-image stetoskop">

    <div class="row content">
      <aside class="col-md-6 mb-3 text-center">
        <center><img src="assets/imgs/as.png" alt="Klinik Animation" width="40px"></center>
        <p style="font-size: 2rem;"><strong>Klinik Polinela</strong></p>
        <center><img src="assets/imgs/lgn-page.jpeg" alt="Klinik Animation" width="74%"></center>
      </aside>
      <div class="col-md-6 formnya">
        <h5 class="mt-2"><strong>Login as Admin</strong></h5>
        <br>
        <form action="" method="POST">
          <div class="mb-2 formulir">
            <label for="username">Username</label>
            <input type="text" name="username" class="inputForm" placeholder="Masukan Username">
          </div>
          <div class="mb-2 formulir">
            <label for="password">Password</label>
            <input type="password" name="password" class="inputForm" placeholder="Masukan Password">
          </div>
          <p style="color: red;"><?= $textError; ?></p>
          <div class="mb-2">
            <input type="checkbox" id="simpan" name="simpan">
            <label for="simpan" class="form-label">Simpan Login</label>
          </div>

          <center><button type="submit" value="login" class="login mb-4"> L O G I N </button></center>

          <div class="lupaPassword">
            <a href="#">Lupa Password ?</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>