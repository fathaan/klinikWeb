<?php

// Mulai sesi
session_start();
// Periksa apakah pengguna sudah masuk, jika belum, alihkan ke login.php
if (empty($_SESSION["nama"])) {
    header("Location: login.php");
    exit(); // Pastikan untuk keluar dari skrip setelah mengalihkan
}
