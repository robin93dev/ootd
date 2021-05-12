<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta content="fasion cordination web application">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOTD_오늘 뭐입지?</title>
    <style media="screen">
    #footer{
      color:#F2C879;
      position: absolute;
       bottom: 10px; right:10px;
        font-family: '국립박물관문화재단클래식M';
    }
    body{
      background-color: #87A59B;
      background-image: url('https://images.unsplash.com/photo-1569982175971-d92b01cf8694?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80');
      background-repeat: no-repeat;
      background-size: cover;
      font-family: 'Wemakeprice-Bold';
    }
    #header{
      color:#F2CC85;

      text-align:center;

      font-size: 4rem;
      text-shadow: 2px 2px #0477BF;
      }
      #logo:hover{
        transition: all 0.5s;
        filter:sepia(70%);
        transform: translateX(10px) rotate(10deg) translateY(5px);

      }
      #logo_title{
        display: inline-block;
        transition: all 0.5s;
      }
      #logo_title:hover{
        transition: all 0.5s;
        transform:translate(0,-25px);
        color:#E7C1D4;
      }
    .login_page{
      text-align:center;
    }
    @font-face {
    font-family: 'RixYeoljeongdo_Regular';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2102-01@1.0/RixYeoljeongdo_Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Wemakeprice-Bold';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_20-10-21@1.0/Wemakeprice-Bold.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: '국립박물관문화재단클래식M';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_twelve@1.0/국립박물관문화재단클래식M.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

    </style>
  </head>
  <body>
    <header id="header">
    <a href="login.php"><img src=".\image\logo.png"
    width=200px; alt="ootd 로고" id="logo"></a>
    <br>
      <div id="logo_title">OOTD_오늘 뭐입지?</div>
    </header>
    <article class="login_page">
      <form action="1.php" method="get">
          <label for="id">
           <input id= "id" type ="text" name="id"   placeholder="아이디" autofocus required>
            </label>


          <br><label for="pwd">
          <input id="pwd" type ="password" name="pwd"  placeholder="비밀번호" required>
          </label>
          <br>
          <input type = "submit" value="로그인">
          <input type = "hidden" name= "hidden" value="secure information">
          </form>
    </article>
    <br>
    <br>
    <article class="file_upload">
      <form class="" action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="profile" value="구입한 옷 올리기">
        <input type="submit" name="" value="구입한 옷 올리기">
      </form>
    </article>

        <video src="video/small.mp4" width="200px" controls autoplay loop>

        </video>
<iframe  src="https://www.youtube.com/embed/VCnvftMAk9A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<footer id="footer">
<li>Reserved by Robin93</li>
<li>company address</li>
</footer>
  </body>
</html>
