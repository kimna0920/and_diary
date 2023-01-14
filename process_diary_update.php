<?php
    session_start();
    header('Content-type: text/html; charset=utf-8');

    include "dbconn.php";
    include "createSalt.php";

    date_default_timezone_set('Asia/Seoul');
    $getId = $_SESSION['user_id'];
    $getImg = $_POST['img'];
    $getText = $_POST['text'];
    $date = date('Y-m-d H:i:s', time());

    $makeDir = mkdir($getId, '777');

    $file=$_FILES['img'];
    var_dump($file);

    echo $file['tmp_name'];
    // 실제 저장하고 싶은 위치 C:Apache24/htdocs/php/
    // 업로드된 파일을 내가 지정한 위치에 지정한 파일명으로 파일을 이동
    // move_uploaded_file(현재위치, 이동할위치)
    $result = move_uploaded_file($file['tmp_name'],'C:Apache24/htdocs/php/'.$file['name']);
    if($result) {
 ?>       
    <img src="../<?=$file['name']?>">
<?php        
    }
?>
