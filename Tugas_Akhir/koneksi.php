<?php
$koneksi = mysqli_connect("localhost", "root", "mysql", "tugasakhir"); 


// cek koneksi
if(mysqli_connect_error()){
    echo "Koneksi Database Gagal : ".mysqli_connect_error();
}

?>