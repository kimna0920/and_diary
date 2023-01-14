<?php
include "dbconn.php";

$getId = $_GET['id'];
echo $getId;

$sql = "DELETE FROM owner WHERE ow_id='{$getId}'";
$query = mysqli_query($conn, $sql);

if($query){
    echo"<script>alert('삭제되었습니다.'); location.href='user_table.php';</script>";
}else{
    echo"<script>alert('삭제되지 않았습니다.'); location.href='user_table.php';</script>";
    exit;
}
?>