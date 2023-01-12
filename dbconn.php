<?php
$username = "root";
$password ="";
$dbname ="test";
$servername="localhost";

$conn = mysqli_connect($servername,$username,$password,$dbname);
    mysqli_query($conn,'set names utf8');
    if(!$conn){
        die('Connection faild:'.mysqli_connect_error());
    }
?>
