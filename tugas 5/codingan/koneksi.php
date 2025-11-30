<?php
// Pengaturan koneksi database
$host = "localhost"; // Biasanya localhost
$user = "root";      // Ganti dengan username database Anda
$pass = "";          // Ganti dengan password database Anda
$db = "praktikum_5"; // Nama database yang telah dibuat

// Buat koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>