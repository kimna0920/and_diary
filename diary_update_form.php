<?php
    include "dbconn.php";
    header('Content-type: text/html; charset=utf-8');

    session_start();

    date_default_timezone_set('Asia/Seoul');

    $diaryImage = scandir('dimg');
    $i = 0;
    $diaryImgData = '';
    while($i < count($diaryImage)){
        if($diaryImage[$i] != '.' && $diaryImage[$i] != '..'){
            $diaryImgData = $diaryImgData.
                "<p>
                    <img src=\"dimg/{$diaryImage[$i]}\" alt=\"dimg{$i}\">
                    <a href=\"process_dimg_delete.php?name={$diaryImage[$i]}&dir=dimg\">X</a>
                </p>";
        }
        $i++;
    }
?>

<!DOCTYPE html>
<html lang="en" translate="no">
<body>
   <figure style="background: url(aimg/<?php echo $imgSelect; ?>)">
       <h1 class="manage_title">일기 쓰기</h1>
        <div class="manage">
           <div class="diary_form">
               <div class="diaryimg">
                    <form action="process_diary_create.php" method="post" enctype="multipart/form-data">
                       <input class="cupload_name" type="upload-name" placeholder="일기 사진">
                        <label for="cfile">파일찾기</label>
                        <input type="file" id="cfile" name="dupload" accept="image/jpeg,.png" multiple>
                        <input type="hidden" name="dir" value="dimg">
                        <input type="submit" value="등록">
                        
                    <div class="diarytxt">
                        <textarea id="txt" name="txt" rows="10px" cols="50px" placeholder="오늘 이야기를 써주세요."></textarea>
                    </div>
                        
                    <div class="imgContents">
                        <?php
                            echo $diaryImgData;
                        ?>
                    </div>
                
                    </form>
                </div>
<!--
                <div class="admin_background">
                    <form action="process_background_create.php" method="post" enctype="multipart/form-data">
                        <input class="aupload_name" type="upload-name" placeholder="관리자 배경이미지">
                        <label for="afile">파일찾기</label>
                        <input type="file" id="afile" name="bgupload" accept="image/jpeg,.png" multiple>
                        <input type="hidden" name="dir" value="aimg">
                        <input type="submit" value="등록">
                    </form>
                    <div class="imgContents">

                    </div>
                </div>
-->
           </div> 
        </div>
    </figure>
    <script>
        $("#afile").on('change',function(){
          var fileName = $("#afile").val();
          $(".aupload_name").val(fileName);
        });
        $("#cfile").on('change',function(){
          var fileName = $("#cfile").val();
          $(".cupload_name").val(fileName);
        });
    </script>
</body>
</html>