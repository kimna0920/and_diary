<?php
    header('Contect-type: text/html; charset-utf-8');
    session_start();
    
    include "dbconn.php";
    include "createSalt.php";

    date_default_timezone_set('Asia/Seoul');
    
    $getId = $_POST['id'];
    $getPw = $_POST['pw'];

    $sql = "SELECT * FROM owner WHERE ow_id='$getId'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);

    $dbId = $data['ow_id'];
    $dbPw = $data['ow_pw'];
    $salt = $data['ow_salt']; 

    $hash = hash('sha256', $getPw);
    $password = hash('sha256', $salt.$hash);

    if($getId == $dbId and $password){
        $_SESSION['user_id'] = $getId;
        $_SESSION['user_name'] = $data['ow_name'];
        $_SESSION['user_phone'] = $data['ow_phone'];
        $_SESSION['user_email'] = $data['ow_email'];
        $_SESSION['user_petname'] = $data['ow_petname'];
        $_SESSION['user_type'] = $data['ow_type'];
        
        echo"<script>alert('환영합니다! {$_SESSION['user_name']} 님'); location.href='index.php';</script>";
    }else{
        echo"<script>alert('아이디와 비밀번호가 일치하지 않습니다.'); history.back();</script>"; 
        exit;
    }
?>