<!DOCTYPE html>
<html>
  <head>
    <title>feedback</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="footer/AboutUs1.css" rel="stylesheet" >
    <link href="https://cdn.prod.website-files.com/65e8fb628c240d731351cd61/css/storyline-312089.webflow.7e60f716a.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link rel="stylesheet" href="footer/feedback.css">
        <link rel="stylesheet" href="header/header1.css"/>
  </head>
  <body>
    <div class="header">
        <a href="file.php" class="logo">
          <img class="logo__img" src="books_images/Logo.png" alt="logo">
        </a>
    </div>
    <form action="/action_page.php" target="_blank" method="POST" autocomplete="on" novalidate="">
      <div class="feedback_box">
        <div class="feedback_question">how much do u like the design?</div>
        <div class="feedback_answer">
          <button class="feedback_answer_btn">rate</button>
          <div class="feedback_answer_lst">
            <div class="feedback">
              <input class="abdo" type="radio" id="badd" name="liked" value="badd" >
              <label class="feedback_e" for="badd" >bad</label>
            </div>
            <div class="feedback">
              <input class="abdo" type="radio" id="not badd" name="liked" value="not badd">
              <label class="feedback_e" for="not badd">not bad</label>
            </div>
            <div class="feedback">
              <input class="abdo" type="radio" id="goodd" name="liked" value="goodd">
              <label class="feedback_e" for="goodd">good</label>
            </div>
            <div class="feedback"> 
              <input class="abdo" type="radio" id="very goodd" name="liked" value="very goodd">
              <label class="feedback_e" for="very goodd">very good</label>
            </div>
            <div class="feedback">
              <input class="abdo" type="radio" id="excellentd" name="liked" value="excellentd">
              <label class="feedback_e" for="excellentd">excellent</label>
            </div>
          </div>
        </div>
      </div>
      <div class="feedback_box">
        <div class="feedback_question">how much do u like the prices?</div>
                  <div class="feedback_answer_btn">rate</div>
        <div class="feedback_answer">

          <div class="feedback_answer_lst">
            <div class="feedback">
              <input class="abdo" type="radio" id="badp" name="likep" value="badp">
              <label class="feedback_e" for="badp">bad</label>
            </div>
            <div class="feedback">
              <input class="abdo" type="radio" id="not badp" name="likep" value="not badp">
              <label class="feedback_e" for="not badp">not bad</label>
            </div>
            <div class="feedback">
              <input class="abdo" type="radio" id="goodp" name="likep" value="goodp">
              <label class="feedback_e" for="goodp">good</label>
            </div>
            <div class="feedback"> 
              <input class="abdo" type="radio" id="very goodp" name="likep" value="very goodp">
              <label class="feedback_e" for="very goodp">very good</label>
            </div>
            <div class="feedback">
              <input class="abdo" type="radio" id="excellentp" name="likep" value="excellentp">
              <label class="feedback_e" for="excellentp">excellent</label>
            </div>
          </div>
        </div>
      </div>
      <div class="feedback_box">
        <div class="feedback_question">how much do u like the content?</div>
        <div class="feedback_answer">
          <button class="feedback_answer_btn">rate</button>
          <div class="feedback_answer_lst">
            <div class="feedback">
              <input class="abdo" type="radio" id="badc" name="likec" value="badc">
              <label class="feedback_e" for="badc">bad</label>
            </div>
            <div class="feedback">
              <input class="abdo" type="radio" id="not badc" name="likec" value="not badc">
              <label class="feedback_e" for="not badc">not bad</label>
            </div>
            <div class="feedback" >
              <input class="abdo" type="radio" id="goodc" name="likec" value="good" class="goodc">
              <label class="feedback_e" for="goodc">good</label>
            </div>
            <div class="feedback"> 
              <input class="abdo" type="radio" id="very goodc" name="likec" value="very goodc">
              <label class="feedback_e" for="very goodc">very good</label>
            </div>
            <div class="feedback">
              <input class="abdo" type="radio" id="excellentc" name="likec" value="excellentc">
              <label class="feedback_e" for="excellentc">excellent</label>
            </div>
          </div>
        </div>
      <!-- <input type="reset" class="submit_buttom" value="submit"> -->
      <button class="submit_buttom" id="reset" onclick="openpopupmenu('popup_pg4')" >submit</button>
      </div>
    </form>
    <div class="feedback_box">
      <div class="feedback_question">Leave your opinion</div>
      <div class="button_e_div">
      <button class="button_e" onclick="openpopupmenu('popup_pg1')">recommend book</button>
      <button class="button_e" onclick="openpopupmenu('popup_pg2')">report issue</button>
      <button class="button_e" onclick="openpopupmenu('popup_pg3')">suggestion</button>
      <div id="popup_pg1">
        <div id="popup_main_div1">
          <button class="closepopupmenu" onclick="closepopupmenu('popup_pg1')">x</button>
          <div class="recommend_book_feedback">recommend book</div>
          <div class="font_feedback">Author
            <textarea class="input_feedback" placeholder="Enter The Book's Author " type="text" title="hello"></textarea>
          </div>
          <div class="font_feedback">Title
            <textarea class="input_feedback" placeholder="Enter The Book's Name"type="text" title="hello"></textarea>
          </div>
          <input type="reset" class="submit2_buttom" onclick="closepopupmenu('popup_pg1')" value="submit">
        </div>
        </div>
        <div id="popup_pg2">
          <div id="popup_main_div2">
            <button class="closepopupmenu" onclick="closepopupmenu('popup_pg2')">x</button>
            <div class="report_issue_feedback">report issue</div>
            <textarea class="comment_feedback"placeholder="Your Issue" type="text" title="hello"></textarea>
            <input type="reset" class="submit1_buttom" onclick="closepopupmenu('popup_pg2')"value="submit">
          </div>
          </div>
          <div id="popup_pg3">
            <div id="popup_main_div3">
              <button class="closepopupmenu" onclick="closepopupmenu('popup_pg3')">x</button>
              <div class="suggestion_feedback">suggestion</div>
              <textarea class="comment_feedback" placeholder="Enter Your Suggestion" type="text" title="hello"></textarea>
              <input type="reset" class="submit1_buttom" onclick="closepopupmenu('popup_pg3')" value="submit">
            </div>
          </div>

          <div id="popup_pg4">
            <div id="popup_main_div4">
              <button class="closepopupmenu" onclick="closepopupmenu('popup_pg4')">x</button>
              <div class="submit_thanks">We appreciate your opinion</div>
              <input type="reset" class="ok_buttom" onclick="closepopupmenu('popup_pg4')" value="ok ">
            </div>
          </div>

      <script type="text/javascript">
        // var choosen=ActiveXObject(id);
        
        function choosen(id){
          document.getElementById(id).style.backgroundColor="blue"
        }
        
        function openpopupmenu(id){
          document.getElementById(id).style.display="block"
        }
        function closepopupmenu(id){
          document.getElementById(id).style.display="none"
        }

        const resetb = document.getElementById("reset");
        const radioButton = document.querySelectorAll(".abdo");
        resetb.addEventListener("click",function(){
          for(let i=0;i<(radioButton.length);i++){
            radioButton[i].checked = false;
          }
        });


      </script>
  </body>
</html>