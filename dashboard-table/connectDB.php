<?php

$conn = mysqli_connect('localhost', 'root', '', 'sensordht');
$sql = "SELECT * FROM tb_sensor ORDER BY id DESC";
$res = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($res);

?>