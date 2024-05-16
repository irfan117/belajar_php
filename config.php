<?php
$host = "localhost"; // Host database
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi database
$database = "wedding"; // Nama database

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>
