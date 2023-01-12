<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>로그인 페이지</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
    <div class="wrap">
        <h1>로그인</h1>
        <form action="process_login.php" method="post">
            <div class="input_form">
                <i class="fa-light fa-user"></i>
                <input type="text" name="id" id="id" placeholder="아이디">
            </div>
            <div class="input_form">
                <i class="fa-light fa-lock-keyhole"></i>
                <input type="password" name="pw" id="pw" placeholder="비밀번호">
            </div>
            <div class="login_btn">
                <input type="submit" value="로그인">
            </div>
        </form>
    </div>
</body>
</html>