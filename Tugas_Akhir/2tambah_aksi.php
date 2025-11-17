<?php
// Koneksi database
include 'koneksi.php'; // Pastikan koneksi.php ada di folder yang sama!

// Menangkap data yg di kirim dari form
$city = $_POST['city']; // Menangkap nama lengkap dari form
$country = $_POST['country'];
$continent = $_POST['continent'];
$season = $_POST['season'];
$transport = $_POST['transport'];
$desc1 = $_POST['desc1'];

// Menginput data ke database
mysqli_query($koneksi, "INSERT INTO datas (city, country, continent, season, transport, desc1) VALUES ('$city', '$country', '$continent', '$season', '$transport', '$desc1'");

// Mengalihkan halaman kembali ke index.php
header("location:data.php");

?>