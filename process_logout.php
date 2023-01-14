<?php 
    header('Contect-type: text/html; charset-utf-8');
    session_start();
    
    include "dbconn.php";
    include "createSalt.php";
    
    unset($_SESSION['user_id']);
    unset($_SESSION['user_pw']);

    $logout = session_destroy();
    if($logout){
        echo"<script>alert('로그아웃 되었습니다.'); location.href='index.php';</script>";
    }
?>