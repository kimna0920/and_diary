<?php
    include "dbconn.php";
    session_start();

    $sql = "SELECT * FROM owner";
    $query = mysqli_query($conn, $sql);
    $trData = "";
    while($data = mysqli_fetch_array($query)){
        $getId = $data['ow_id'];
        $getName = $data['ow_name'];
        $getPhone = $data['ow_phone'];
        $getEmail = $data['ow_email'];
        $getPetname = $data['ow_petname'];
        $getType = $data['ow_type'];
        $getDate = $data['ow_date'];
        $trData = $trData."
                <tr>
                    <td>$getId</td>
                    <td>$getName</td>
                    <td>$getPhone</td>
                    <td>$getEmail</td>
                    <td>$getPetname</td>
                    <td>$getType</td>
                    <td>$getDate</td>
                    <td>
                        <a href=\"process_owner_delete.php?id={$getId}\">삭제</a>
                        
                    </td>
                </tr>
        ";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원정보</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/list.css">
</head>
<body>
    <div class="wrap">
        <div class="header">
            <h1>회원관리</h1>
        </div>
        <div class="list">
            <table border>
                <tr>
                    <td>아이디</td>
                    <td>이름</td>
                    <td>전화번호</td>
                    <td>이메일</td>
                    <td>반려동물이름</td>
                    <td>반려동물종</td>
                    <td>가입날짜</td>
                    <td>기능</td>
                </tr>
                <?php echo $trData; ?>
            </table>
            <div class="btn_box">
               <a href="index.php">홈으로</a>
           </div>
        </div>
    </div>
</body>
</html>