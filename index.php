<?php
     include "dbconn.php";
     session_start();
     $sql ="SELECT * FROM owner ";
     $query = mysqli_query($conn,$sql);
     $data = mysqli_fetch_array($query);

     $getName = $_SESSION['user_name'];
     $getId = $_SESSION['user_id'];
?>
 <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>home</title>
    <link href="style/reset.css" rel="stylesheet" type="text/css" />
    <link href="style/style.css" rel="stylesheet" type="text/css" />
   
    <link rel="icon" href="img/favicon.png">
    <link rel="instagram-icon" href="img/favicon.png">
  </head>
  <body>
    
    <nav>
      <div class="nav-container">
        <div class="nav-1">
            <?php    
                if(!isset($_SESSION['user_id'])){
             ?>   <span>로그인 해주세요</span>
             <?php
                }else if(isset($_SESSION['user_id'])){
             ?>
                 <span>
                  환영합니다 <?php echo $_SESSION['user_name'] ?>님
                </span>
             <?php    
                }
             ?>
        </div>
        <span>
            <a href="index.php" class="logo_instagram_txt">AND_diary</a> 
        </span>
<!--        <input id="searchInput" type="search" class="input-search" placeholder="검색">-->
        <div class="nav-2">
         <?php    
            if(!isset($_SESSION['user_id'])){
         ?>
              <a href="signup_from.php">
                  회원가입
              </a>
              <a href="login_form.php">
                  로그인
              </a>
          <?php
            }else if($_SESSION['user_id']=='admin'){
          ?>
              <a href="process_logout.php">
                로그아웃
              </a>
              <a href="user_table.php">
                회원관리
              </a>
          <?php
            }else if(isset($_SESSION['user_id'])){
          ?>
              <a href="process_logout.php">
                 로그아웃
              </a>
              <a href="diary_update_form.php">
                 일기쓰기
              </a>
              <a href="mypage.php">
                 마이페이지
              </a>
          <?php    
            }
          ?>
        </div>
      </div>
    </nav>
    
    <main>
      <div class="feeds">
        <article>
          <header>
            <div class="profile-of-article">
              <img class="img-profile pic" src="img/profile02.jpg" alt="dlwlrma님의 프로필 사진">
              <span class="userID main-id point-span">choon_jung</span>
            </div>
            <img class="icon-react icon-more" src="https://s3.ap-northeast-2.amazonaws.com/cdn.wecode.co.kr/bearu/more.png" alt="more">
          </header>
          <div class="main-image">
            <img src="img/main01.jpg" class="mainPic">
          </div>
          <div class="icons-react">
            <div class="icons-left">
             
              <a href="signup_from.php">
                  <img class="icon-react" src="https://s3.ap-northeast-2.amazonaws.com/cdn.wecode.co.kr/bearu/heart.png" alt="하트">
              </a>
              
              <img class="icon-react" src="https://s3.ap-northeast-2.amazonaws.com/cdn.wecode.co.kr/bearu/comment.png" alt="말풍선">
              <img class="icon-react" src="img/share.png" alt="DM">  
            </div>
            <img class="icon-react" src="https://s3.ap-northeast-2.amazonaws.com/cdn.wecode.co.kr/bearu/bookmark.png" alt="북마크">
          </div>
          
          <div class="reaction">
            <div class="liked-people">
              <img class="pic" src="img/profile03.jpg" alt="johnnyjsuh님의 프로필 사진">
              <p><span class="point-span">johnnyjsuh</span>님 <span class="point-span">외 2,412,751명</span>이 좋아합니다</p>
            </div>
            <div class="description">
              <p><span class="point-span userID">choon_jung</span><span class="at-tag">@갓생 @렛츠기릿~</span> </p>
            </div>
            <div class="comment-section">
              <ul class="comments">
                <li>
                  <span><span class="point-span userID">na_young_9012</span>다들 귀여운 우리 춘정이 보고 가요</span>
                  <img class="comment-heart" src="https://s3.ap-northeast-2.amazonaws.com/cdn.wecode.co.kr/bearu/heart.png" alt="하트">
                </li>
                
              </ul>
              <div class="time-log">
                <span>32분 전</span>
              </div>
            </div>
          </div>
          <div class="hl"></div>
          <div class="comment">
            <input id="input-comment" class="input-comment" type="text" placeholder="댓글 달기..." >
            <button type="submit" class="submit-comment" disabled>게시</button>
          </div>
        </article>
        <article>
          <header>
            <div class="profile-of-article">
              <img class="img-profile pic" src="img/profile05.jpg" alt="yumyum_0000님의 프로필 사진">
              <span class="userID main-id point-span">yumyum_0000</span>
            </div>
            <img class="icon-react icon-more" src="https://s3.ap-northeast-2.amazonaws.com/cdn.wecode.co.kr/bearu/more.png" alt="more">
          </header>
          <div class="main-image">
            <img src="img/main03.jpg" alt="yumyum_0000님의 피드 사진" class="mainPic">
          </div>
          <div class="icons-react">
            <div class="icons-left">
              <img class="icon-react" src="https://s3.ap-northeast-2.amazonaws.com/cdn.wecode.co.kr/bearu/heart.png" alt="하트">
              <img class="icon-react" src="https://s3.ap-northeast-2.amazonaws.com/cdn.wecode.co.kr/bearu/comment.png" alt="말풍선">
              <img class="icon-react" src="img/dm.png" alt="DM">  
            </div>
            <img class="icon-react" src="https://s3.ap-northeast-2.amazonaws.com/cdn.wecode.co.kr/bearu/bookmark.png" alt="북마크">
          </div>
          
          <div class="reaction">
            <div class="liked-people">
              <img class="pic" src="img/profile03.jpg" alt="_jeongjaehyun님의 프로필 사진">
              <p><span class="point-span">choon_jung</span>님 <span class="point-span">외 4,612,203명</span>이 좋아합니다</p>
            </div>
            <div class="description">
              <p><span class="point-span userID">choon_jung</span>우리아이 술안주 남편 영양간식</p>
            </div>
            <div class="comment-section">
              <ul class="comments">
                <li>
                  <span><span class="point-span userID">na_young_9012</span>음식이 친절하고 사장님이 맛있어요</span>
                  <img class="comment-heart" src="https://s3.ap-northeast-2.amazonaws.com/cdn.wecode.co.kr/bearu/heart.png" alt="하트">
                </li>
                
              </ul>
              <div class="time-log">
                <span>1시간 전</span>
              </div>
            </div>
          </div>
          <div class="hl"></div>
          <div class="comment">
            <input id="input-comment2" class="input-comment" type="text" placeholder="댓글 달기..." >
            <button type="submit" class="submit-comment" disabled>게시</button>
          </div>
        </article>

      </div>
      
      <div class="main-right">
      <?php
       if(isset($_SESSION['user_id'])){
      ?>
        <div class="myProfile">
          <img class="pic" src="img/profile11.jpg" alt="na_young_9012님의 프로필 사진">
          <div>
            <span class="userID point-span">
                <?php
                    echo $getId;
                ?>
            </span>
            <span class="sub-span">
                <?php
                    echo $getName;
                ?>
            </span>  
          </div>
        
       <?php
          }
       ?>
        
        
        <div class="section-story">
          <div class="menu-title">
            <span class="sub-title">내 친구</span>
            <span class="find-more"><a href="following_member.php">모두 보기</a></span>
          </div>
          <ul class="story-list">
            <li>
              <div class="gradient-wrap">
                <img class="img-profile story" src="img/profile05.jpg" alt="wecode_bootcamp님의 프로필 사진">
              </div>
              <div class="profile-text">
                <span class="userID point-span">
                    <a href="#">yumyum_0000</a>
                </span>

              </div>
            </li>
            <li>
              <div class="gradient-wrap">
                <img class="img-profile story" src="img/profile02.jpg" alt="choon_jung님의 프로필 사진">
              </div>
              <div class="profile-text">
                <span class="userID point-span">
                    <a href="#">choon_jung</a>
                </span>

              </div>
            </li>
            <li>
              <div class="gradient-wrap">
                <img class="img-profile story" src="img/profile06.jpg" alt="Hamjj_jjjjang님의 프로필 사진">
              </div>
              <div class="profile-text">
                <span class="userID point-span">
                    <a href="#">Hamjj_jjjjang</a>
                </span>
              </div>
            </li>
            <li>
              <div class="gradient-wrap">
                <img class="img-profile story" src="img/profile07.jpg" alt="hi_huchu님의 프로필 사진">
              </div>
              <div class="profile-text">
                <span class="userID point-span">
                    <a href="#">hi_huchu</a>
                </span>
              </div>
            </li>
          </ul>
        </div>

        <footer>
          <p class="insta-sccript">
            소개 ∙ 도움말 ∙ 홍보 센터 ∙ API
            <br><br>
            © 2020 INSTAGRAM FROM FACEBOOK
          </p>
        </footer>

      </div>
    </main>
    <script src="js/main.js"></script>
  </body>
</html>
