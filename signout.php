<?php
session_start();
// Xoá session
unset($_SESSION['emailAddress']);
// Trở về trang chủ
header('Location: index.php');
?>