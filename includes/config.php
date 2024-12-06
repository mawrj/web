<?php
$host = 'localhost'; // atau 'localhost'
$user = 'root'; // username database
$password = ''; // password database
$database = 'glow'; // nama database

// Buat koneksi ke database
$conn = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
