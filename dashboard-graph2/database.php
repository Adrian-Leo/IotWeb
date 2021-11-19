<?php 

    //koneksi database
    $conn = mysqli_connect('localhost', 'root', '','sensordht');

    //baca ID tertinggi
    $sql_Id = mysqli_query($conn, "SELECT MAX(id) FROM tb_sensor");

    $data_Id = mysqli_fetch_array($sql_Id);
    
    $Id_akhir = $data_Id['MAX(id)'];

    $Id_awal = $Id_akhir - 4;

    //baca tanggal semua data(menjadi sumbu x)
    $date = mysqli_query($conn, "SELECT tanggal FROM tb_sensor WHERE id >= '$Id_awal' AND id <= '$Id_akhir' ORDER BY id ASC");

    //baca tanah untuk semua data(menjadi sumbu y)
    $tanah = mysqli_query($conn, "SELECT tanah FROM tb_sensor WHERE id >= '$Id_awal' AND id <= '$Id_akhir' ORDER BY id ASC");

    //baca cahaya untuk semua data(menjadi sumbu y)
    $cahaya = mysqli_query($conn, "SELECT cahaya FROM tb_sensor WHERE id >= '$Id_awal' AND id <= '$Id_akhir' ORDER BY id ASC");


?>