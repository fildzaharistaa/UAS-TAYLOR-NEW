<?php
$servername = "localhost"; // atau nama server database Anda
$username = "root"; // atau username database Anda
$password = ""; // atau password database Anda
$dbname = "nama_database_anda"; // ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
