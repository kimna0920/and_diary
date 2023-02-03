<?php 
    include "dbconn.php";
    header('Content-type: text/html; charset=utf-8');

    session_start();

    $getDir = $_POST['dir'];
    $filename = date( 'ymdHis',time() );

    // 임시로 저장된 정보(tmp_name)
    $tempFile = $_FILES['dupload']['tmp_name'];
    // 파일타입 및 확장자 체크
    $fileTypeExt = explode("/", $_FILES['dupload']['type']);
    // 파일 타입 
    $fileType = $fileTypeExt[0];
    // 파일 확장자
    $fileExt = $fileTypeExt[1];
    // 확장자 검사
    $extStatus = false;

    switch($fileExt){
        case 'jpeg':
        case 'jpg':
        case 'png':
            $extStatus = true;
            break;

        default: 
            exit;
            break;
    }

     //이미지 파일이 맞는지 검사. 
    if($fileType == 'image'){
        // 허용할 확장자를 jpg, png로 정함, 그 외에는 업로드 불가
        if($extStatus){
            // 임시 파일 옮길 디렉토리 및 파일명
            echo $_FILES['dupload']['name'];
            $resFile = "./".$getDir."/".$filename.".".$fileExt;
            // 임시 저장된 파일을 우리가 저장할 디렉토리 및 파일명으로 옮김
            $imageUpload = move_uploaded_file($tempFile, $resFile);

            if($imageUpload == true){
                echo "<script>alert('배경 이미지가 업로드 되었습니다.'); location.href='diary_update_form.php';</script>";
            }else{
                echo "<script>alert('배경 이미지가 업로드에 실패했습니다.'); location.href='diary_update_form.php';</script>";
            }
        }
        else {
            echo "<script>alert('이미지 전용 확장자가 아닙니다.'); location.href='diary_update_form.php';</script>";
            exit;
        }	
    } 
    else {
        echo "<script>alert('이미지 파일이 아닙니다.'); location.href='diary_update_form.php';</script>";
        exit;
    }
?>