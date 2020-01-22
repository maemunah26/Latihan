<?php
$connect = mysqli_connect ('localhost','root','','siti maemunah');
if ($connect)
    echo "Berhasil";
else
    echo "Koneksi Gagal";
?>