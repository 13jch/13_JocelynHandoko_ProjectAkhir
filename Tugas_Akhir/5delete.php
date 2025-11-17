<?php
// koneksi database
include 'koneksi.php';

// Menangkap data id yang di kirim dari url
$id_datas = $_GET['id'];

// Menghapus data dari database
mysqli_query($koneksi,"delete from datas where id_datas='$id_datas'");

// Mengalihkan halaman kembali ke index.php
header("location:0datashow.php");

?>