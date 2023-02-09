<?php
    header('Content-type: text/html; charset=utf-8');

    include "dbconn.php";
    include "createSalt.php";

    date_default_timezone_set('Asia/Seoul');
    $salt = createSalt();

    $getId = $_POST['id'];
    $getPw = $_POST['pw'];
    $getName = $_POST['name'];
    $getFnum = $_POST['first_num'];
    $getSnum = $_POST['second_num'];
    $getTnum = $_POST['third_num'];
    $getFadd = $_POST['first_addr'];
    $getSadd = $_POST['second_addr'];
    $getPname = $_POST['petname'];
    $getPtype = $_POST['pet'];
    $getAgree = $_POST['agree'];
    
    $hash = hash('sha256', $getPw);
    $password = hash('sha256', $salt.$hash);

    $phone = $getFnum."-".$getSnum."-".$getTnum."<br>";
    $email = $getFadd."@".$getSadd."<br>";

//    echo $getId."<br>";
//    echo $getPw." ".$password."<br>";
//    echo $getName."<br>";
//    echo $phone."<br>";
//    echo $email."<br>";
//    echo $getPname."<br>";
//    echo $getPtype."<br>";

    $date = date('Y-m-d H:i:s', time());

    $sql = "SELECT * FROM owner WHERE ow_id='$getId'";
    $query = mysqli_query($conn, $sql);
//    echo $getAgree."<br>";
//    echo $date."<br>";
//    echo $salt."<br>";


    if(mysqli_num_rows($query) > 0){
        echo "<script>alert('해당 아이디가 존재합니다'); history.back();</script>";
    }
    else{
        $sql = "INSERT INTO owner(ow_id, ow_pw, ow_name, ow_phone, ow_email, ow_petname, ow_type, ow_agree, ow_date, ow_salt) VALUES('$getId','$password','$getName','$phone', '$email','$getPname','$getPtype','$getAgree', '$date', '$salt')";
        $query = mysqli_query($conn, $sql);
        echo "<script>alert('회원가입이 완료되었습니다'); loction.href='index.php';</script>";
    }   
?>