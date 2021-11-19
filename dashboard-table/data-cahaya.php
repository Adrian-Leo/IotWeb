<?php

    require 'connectDB.php';






    $cahaya=$data['cahaya'];

    //uji apabila nilai cahaya belum ada maka anggap cahaya = 0
    if($cahaya == "") $cahaya=0;


    //cetak nilai cahaya
    echo $cahaya;


?>