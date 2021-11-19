<?php
include('../koneksi.php');

$sql = "SELECT * FROM tbl_kontrol";
$res = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($res);

$pompa = $data['lampu'];
// respon balik ke pompa 

echo $lampu;


?>