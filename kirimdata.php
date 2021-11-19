<?php
    $conn = mysqli_connect('localhost','root','' ,'sensordht');
    //tangkap parameter yg dikirim node
    $suhu=$_GET['suhu'];
    $kelembapan=$_GET['kelembapan'];
    $cahaya=$_GET['cahaya'];
    $tanah=$_GET['tanah'];

    //simpan ke tabel 
    //atur id selalu dari 1 
    mysqli_query($conn,"ALTER TABLE tb_sensor AUTO_INCREMENT=1");
    //simpan nilai suhu dan kelempaban ke tabel
    $simpan=mysqli_query($conn,"INSERT INTO tb_sensor(suhu,kelembapan,cahaya,tanah)VALUES('$suhu','$kelembapan','$cahaya',$tanah)");


    // berikan respon ke node
    if($simpan){
        echo "berhasil simpan";
    } else{
        echo"gagal tersimpan";
    }
?>