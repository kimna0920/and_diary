<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>업로드</title>
</head>
<body>
    <header>
        <h1>일기쓰기</h1>
    </header>
    <div class="wrap">
        <form action="process_diary_update.php" method="post">
            <div class="input_form">
                <i class="fa-light fa-user"></i>
                <input type="file" name="img" id="img" placeholder="사진을 업로드 해주세요.">
            </div>
            <div class="input_form">
                <textarea name="text" id="text" cols="50" rows="20" placeholder="일기를 작성해주세요."></textarea>
            </div>
            <div class="login_btn">
                <input type="submit" value="업로드">
            </div>
        </form>
    </div>
</body>
</html>