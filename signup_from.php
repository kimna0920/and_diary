<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <div class="wrap">
       <h1>회원가입</h1>
        <form class="owner_form" action="process_signup.php" method="post">
            <div class="input_form">
                <label for="id">아이디</label>
                    <input type="text" name="id" id="id" placeholder="아이디를 입력해주세요">
            </div>
             <div class="input_form">
                <label for="pw">비밀번호</label>
                    <input type="password" name="pw" id="pw" placeholder="비밀번호를 입력해주세요">
            </div>
             <div class="input_form">
                <label for="name">이름</label>
                    <input type="text" name="name" id="name" placeholder="이름를 입력해주세요">
            </div>
            <div class="input_form">
                    <label for="phone">전화번호</label>
                    <select name="first_num" id="phone">
                        <option value="010">010</option>
                        <option value="011">011</option>
                        <option value="016">016</option>
                        <option value="017">017</option>
                        <option value="018">018</option>
                        <option value="019">019</option>
                    </select> &#45;
                    <input type="text" id="phone" name="second_num" maxlength="4"> &#45;
                    <input type="text" id="phone" name="third_num" maxlength="4">
            </div>
            <div class="input_form">
                    <label for="email">E&#45;mail</label>
                    <input type="text" id="phone" name="first_addr"> &#64;
                    <select name="second_addr" id="email">
                        <option value="naver.com">naver.com</option>
                        <option value="gmail.com">gmail.com</option>
                        <option value="daum.com">daum.com</option>
                        <option value="hanmail.net">hanmail.net</option>
                    </select>
                </div>
            <div class="input_form">
                <label for="petName">동물이름</label>
                    <input type="text" name="petname" id="petName" placeholder="동물의 이름을 입력해주세요">
            </div>
             <div class="input_form">
                    <label for="pet">동물의 종류</label>
                    <input type="radio" id="pet" name="pet" value="dog"><span>강아지</span>
                    <input type="radio" id="pet" name="pet" value="cat"><span>고양이</span>
                    <input type="radio" id="pet" name="pet" value="parrot"><span>앵무새</span>
                    <input type="radio" id="pet" name="pet" value="snake"><span>뱀</span>
                    <input type="radio" id="pet" name="pet" value="lizard"><span>도마뱀</span>
                    <input type="radio" id="pet" name="pet" value="hamster"><span>햄스터</span>
                    <input type="radio" id="pet" name="pet" value="tropical fish"><span>열대어</span>
                    <input type="radio" id="pet" name="pet" value="Etc"><span>기타</span>
                </div>
                <div class="input_form">
                   <div class="input_ckb">
                       <input type="checkbox" id="agree" name="agree" value="1" required>
                       <span>약관에 동의 합니다.</span>
                   </div>
                </div>
               <div class="btn_box">
                   <input type="submit" value="확인">
                   <input type="reset" value="취소">
               </div>
        </form>
    </div>
</body>
</html>