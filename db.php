<?php
    session_start();
    header('Content-Type: text/html; charset=utf-8;');
    $mysql_host = 'localhost';
    $mysql_user = 'deu20191160';
    $mysql_password = '20191160';
    $mysql_db = 'deu20191160';

    $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password);
    $db = mysqli_select_db($conn, $mysql_db);
    
?>
