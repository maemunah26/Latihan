<?php
    $gelardepan =$_POST['cmbgelardepan'];
    $nama=$_POST['txtnma'];
    $alamat=$_POST['txtalamat'];
    $gelarbelakang=$_POST['cmbgelarangbelakang'];
    
    echo "Selamat Datang <font color =blue><b>".$gelardepan." ".$nama
    .",".$gelarbelakang."</b></font>";
    echo "<br>Alamat Anda Di <b><u>" .$alamat."</b></u>";
?>