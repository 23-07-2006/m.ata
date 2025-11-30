<?php
$host = "localhost";
$user = "root"; 
$password = ""; 
$database = "db_auth_baru"; // <--- SUDAH DIGANTI

// Buat koneksi
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (mysqli_connect_errno()){
    // Pesan error jika koneksi gagal (berguna untuk debugging)
    die("Koneksi database gagal : " . mysqli_connect_error());
}
?>