<?php
// koneksi database
include 'koneksi.php';

// Menangkap data yang di kirim dari form
$city = $_POST['city']; // Menangkap nama lengkap dari form
$country = $_POST['country'];
$continent = $_POST['continent'];
$season = $_POST['season'];
$transport = $_POST['transport'];
$desc1 = $_POST['desc1'];
// Update data ke database
mysqli_query($koneksi, "update datas set city='$city', country='$country', continent='$continent', season='$season', transport='$transport', desc1='$desc1' where desc1='$desc1'");

// mengalihkan halaman kembali ke index.php
header("location:0datashow.php");

?>