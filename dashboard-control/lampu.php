<?php
//koneksi database 
include('../koneksi.php');
//tangkap parameter stat

$stat=$_GET['stat'];
// $stat2=$_GET['stat2'];

if($stat =="ON"){
    //ubah field relay menjadi satu 
    $sql="UPDATE tbl_kontrol SET lampu =1 ";
    mysqli_query($conn,$sql);
    // beri respons ke response text
    echo "ON";
} else{
     //ubah field relay menjadi satu 
     $sql="UPDATE tbl_kontrol SET lampu =0 ";
     mysqli_query($conn,$sql);
     // beri respons ke response text
     echo "OFF";
}




?>