<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style media="screen">

    @font-face {
        font-family: 'Wemakeprice-Bold';
        src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_20-10-21@1.0/Wemakeprice-Bold.woff') format('woff');
        font-weight: normal;
        font-style: normal;
    }

          body{

            background-color: #87A59B;
            background-image: url('https://images.unsplash.com/photo-1569982175971-d92b01cf8694?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Wemakeprice-Bold';
          }

        .maintitle{

          color:#F1987A;
          text-shadow: 2px 2px gray;
          text-align: center;
        }
        .maintitle:hover{
          color: #D2D9C7;

        }


        .상하의{
          transition: all 1s;
          background-color: #024959;
          color:#F2C879;//상아
        }
        .상하의:hover{
          color:#F1987A;

        }
        .상하의section{
          color:#E98890 ;
        }

        .상하의목록텍스트:hover{
          transition: all 1s;
          color:#F2C879;
        }


        .ItemColorClick:active{
          color:#024873;
          background-color: #F29966;
        }
          #footer{
            color:#F2C879;
            position:  inherit

          }
          #logo{
            transition: all 1s;
            position:sticky;
          bottom: 10px; left:1000px;
          }
          #logo:hover{
            filter:invert(50%);
          }

        </style>
    </head>
    <body>
        <form action="http://localhost/color.php">
    <header>
        <h1 class="maintitle">골라바</h1>
    </header>

        <form action="http://localhost/order.php">


            <h1 class="상하의">상의</h1>

            <article class="상하의section">
                <label for="맨투맨" class="상하의목록텍스트">
              <img src="./clothes/맨투맨.jfif" title="맨투맨" alt="맨투맨"><span class="ItemColorClick">맨투맨</span>
              <select name="맨투맨색상">
                <option value="gray">gray</option>
                <option value="black">black</option>
                <option value="navy">navy</option>
              </select>




                <input id="맨투맨" type="radio" name="상의" value="맨투맨" >
              </label>


              <label for="셔츠" class="상하의목록텍스트">
                <img src="./clothes/셔츠.jfif" title="셔츠" alt="셔츠" ><span class="ItemColorClick" >셔츠</span><input id="셔츠" type="radio" name="상의">
              </label>


              <label for="니트" class="상하의목록텍스트">
                <img src="./clothes/니트.jfif" title="니트" alt="니트"><span class="ItemColorClick">니트 </span><input id="니트" type="radio" name="상의" value="니트">
              </label>
            </article>


        <section>
            <h1 class="상하의">하의</h1>
            <article class="상하의section">
               <label for="청바지" class="상하의목록텍스트">
                 <img src="./clothes/청바지.jfif" title="청바지" alt="청바지" value="청바지"> 청바지 <input id="청바지" type="radio" name="하의" value="청바지" >
               </label>

                <label for="슬랙스" class="상하의목록텍스트">
                <img src="./clothes/슬랙스.jfif" title="슬랙스" alt="슬랙스">슬랙스 : <input id="슬랙스" type="radio" name="하의" value="슬랙스" >
                  </label>
                <label for="조거팬츠" class="상하의목록텍스트">
                <img src="./clothes/조거팬츠.jfif" title="이외" alt="이외">이외 : <input id="조거팬츠" type="radio" name="하의" value="이외" >
                </label>
            </article>
        </section>
      </section>

        <section>
          <input type="submit" value="코디하기">
        </section>
        <input type="text" name="느낌" value="이렇게 입고나가니까">
        <input type="submit" value="전송">
        <input type="button" value="버튼" onclick="alert('hello world')">
        <input type="reset">
        <input type="date" name="입은날짜">
        <input type="number" name="만족도" min="1" max="10" value="10">
        <input type="color" name="color" value="">
        </form>
        <input type="button" name="지우기" value="delete" onclick="func_confirm()">
        <input type="button" name="" value="할인쿠폰 퀴즈" onclick="func_prompt()">



   <a  id="logo" href="login.php" title="홈으로 연결"><img src=".\image\logo.png"
   width=10%; alt="ootd 로고"></a>

   <footer id="footer">
     <li>Reserved by Robin93</li>
     <li>company address</li>
   </footer>
   <script type="text/javascript">
     function func_confirm(){
       if(confirm('삭제하시겠습니까?')){
         alert('삭제합니다')
       }else{
         alert('취소합니다')
       }

     };
     function func_prompt(){
       if(prompt('ootd 창립자 이름은?')==='robin'){
         alert('정답입니다! 할인쿠폰 5% 발급해드립니다')
       }else{
         alert('틀렸습니다! 다음 기회를 이용해 주세요')
       }
     };
   </script>
    </body>
</html>
