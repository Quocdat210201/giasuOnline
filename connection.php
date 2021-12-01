<?php
$server_username = "root";
$server_password = "hoangkha17";
$server_host = "127.0.0.1";
$database = 'giasuonline';

$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
mysqli_query($conn,"SET NAMES 'UTF8'");
?>

