<?php
    $gelardepan =$_POST['cmbgelardepan'];
    $nama =$_POST['txtnama'];
    $alamat =$_POST['txtalamat'];
    $gelarbelakang =$_POST['cmbgelarbelakang'];

    echo "Selamat Datang <font color "blue><b>".$gelardepan." ".$nama
          .",".$gelarbelakang."</b></font>;
    echo "<br>Alamat Anda Di <b><u>" .$alamat.</b>,</u>;
?>