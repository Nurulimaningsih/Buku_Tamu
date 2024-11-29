<?php
// Konfigurasi koneksi database
$host = "localhost"; // Nama host
$username = "root";  // Username database
$password = "";      // Password database
$database = "buku_tamu_db"; // Nama database

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>