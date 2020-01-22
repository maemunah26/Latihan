<?php
$connect = mysqli_connect ('localhost','root','','latihan');
if ($connect)
    echo "Berhasil";
else
    echo "Koneksi Gagal";
?>