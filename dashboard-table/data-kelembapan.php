<?php

    require 'connectDB.php';






    $kelembapan=$data['kelembapan'];

    //uji apabila nilai kelembapan belum ada maka anggap kelembapan = 0
    if($kelembapan == "") $kelembapan=0;


    //cetak nilai kelembapan
    echo $kelembapan;


?>