<?php

    require 'connectDB.php';






    $tanah=$data['tanah'];

    //uji apabila nilai tanah belum ada maka anggap tanah = 0
    // if($tanah == "") $tanah=0;
    if($tanah == "0") {
       echo"Wet";
    } else if($tanah == "1"){
        echo"Dry";
    }



    //cetak nilai tanah
    // echo $tanah;


?>