<?php
    session_start();
    header('Content-Type: text/html; charset=utf-8;');
    $mysql_host = 'localhost';
    $mysql_user = 'deu20191160';
    $mysql_password = '20191160';
    $mysql_db = 'deu20191160';

    $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password);
    $db = mysqli_select_db($conn, $mysql_db);
    
    $bno = $_GET['W_num'];
    $content = $_POST['R_content'];
    $rating = $_POST['rating'];

    echo $bno, $content, $rating;

    if($bno && $content){
    $sql = "INSERT into WD_REVIEW(W_num ,rating,R_content) values('$bno','$rating','$content')";
    echo "<script>alert('댓글이 작성되었습니다.'); 
    location.href='/deu20191160/team/WD/WD_review.html?W_num=$bno';</script>";
    }else{
        echo "<script>alert('댓글 작성에 실패했습니다.'); 
        history.back();</script>";
    }
    mysqli_query($conn,$sql);

    
?>
