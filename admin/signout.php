<?php
    session_start();
    // Xoá session
    unset($_SESSION['name']);
    // Trở về trang chủ
    header('Location: ../index.php');
?>