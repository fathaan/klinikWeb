<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Polinela</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/45981806c8.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="wrapper">
        <div class="navigation">
            <ul>
                <li style="padding-left:27px; padding-top:2px;">
                    <a href="#">
                        <span class="title">
                            <strong style="font-size: 30px;">Klinik Kampus</strong>
                        </span>
                    </a>
                    <img src="assets/imgs/pasienTidur.png" width=100%>
                </li>



                <li style="right:30px;">
                    <a href="index.php" class="active">
                        <span class="icon" style="bottom: 5px;">
                            <i class="fa-solid fa-house"></i>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li style="right:30px;">
                    <a href="dataPasien.php">
                        <span class="icon" style="bottom: 5px;">
                            <i class="fa-solid fa-hospital-user"></i>
                        </span>
                        <span class="title">Data Pasien</span>
                    </a>
                </li>

                <li style="right:30px;">
                    <a href="dataPetugas.php">
                        <span class="icon" style="bottom: 5px;">
                            <i class="fa-solid fa-user-doctor"></i>
                        </span>
                        <span class="title">Data Petugas</span>
                    </a>
                </li>

                <li style="right:30px;">
                    <a href="stokObat.php">
                        <span class="icon" style="bottom: 5px;">
                            <i class="fa-solid fa-pills"></i>
                        </span>
                        <span class="title">Stok Obat</span>
                    </a>
                </li>

                <li style="right:30px;">
                    <a href="statistik.php">
                        <span class="icon" style="bottom: 5px;">
                            <i class="fa-solid fa-chart-line"></i>
                        </span>
                        <span class="title">Statistik Pasien</span>
                    </a>
                </li>

                <li style="right:30px;">
                    <a href="pasienBaru.php">
                        <span class="icon" style="bottom: 5px;">
                            <i class="fa-solid fa-notes-medical"></i>
                        </span>
                        <span class="title">Pendaftaran Pasien Baru</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="foto">
                    <?php date_default_timezone_set('Asia/Jakarta');
                    $dateNow = date('d F Y'); ?>
                    <span class="date"><strong><?php echo $dateNow; ?> &ensp;&ensp;</strong></span>
                    <span><strong>&ensp;&ensp;<?php echo isset($_SESSION["nama"]) ? $_SESSION["nama"] : "unknown"; ?></strong></span>
                    <span>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/imgs/user.png" alt="User" width=35></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gear"></i>&ensp;&ensp;Setting</a></li>
                            <li><a class="dropdown-item" href="logout.php" onclick="confirm('Yakin mau keluar ?')"><i class="fa-solid fa-right-from-bracket"></i>&ensp;&ensp;Sign Out</a></li>
                        </ul>
                    </span>
                </div>
            </div>
            <br>