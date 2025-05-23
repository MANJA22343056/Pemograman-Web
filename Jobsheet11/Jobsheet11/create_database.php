<?php
$servername = "localhost";
$username = "root";
$password = "";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Membuat database
$sql = "CREATE DATABASE admin";
if (mysqli_query($conn, $sql)) {
    echo "Database admin berhasil dibuat";
} else {
    echo "Gagal membuat database: " . mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn);
?>
