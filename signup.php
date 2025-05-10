<html>
  <head>
    <title>BookStore</title>
    <link rel="icon" href="images/icon.logo.2.jpg" />
    <link rel="stylesheet" href="login_signup/login.css" />
    <link rel="stylesheet" href="login_signup/style.css" />
    <link rel="stylesheet" href="login_signup/general.css" />
    <script src="login_signup/signup.js"></script>
  </head>
  <body style="overflow-x: hidden; overflow-y: hidden;">


    <div class="wrapper fadeInDown">
      <div class="formContent" style="background-color: rgb(213, 193, 170); margin-bottom: 50px; margin-right: 35px;">
        <div>
          <h2 align="center" style="color: rgb(56, 33, 16)">Signup</h2>
          <center>
            <img class="imagesize" src="Logo.png "/>
          </center>
        </div>

        <form method="POST" action="include/signup-inc.php" onsubmit="return log0()">
          <div id="myerror1" class="myerror"></div>
          <input
            type="text"
            id="username"
            class="fadeIn second"
            name="user"
            placeholder="username"
            style="color: rgb(56, 33, 16)"
          />
          <div id="myerror2" class="myerror"></div>
          <input
            type="password"
            id="password"
            class="fadeIn third"
            name="pwd"
            placeholder="password"
            style="color: rgb(56, 33, 16)"
          />
          <div id="myerror3" class="myerror"></div>
          <input
            type="text"
            id="email"
            class="fadeIn second"
            name="email"
            placeholder="Email"
            style="color: rgb(56, 33, 16)"
          />
          <div id="myerror4" class="myerror"></div>
          <input
            type="text"
            id="phonenum"
            class="fadeIn second"
            name="phone"
            placeholder="phone number"
            style="color: rgb(56, 33, 16)"
            onkeypress="allowOnlyNumbers(event)"
          />
          <input type="submit" class="fadeIn_fourth" value="Sign up" style=" box-shadow: 0 5px 15px 0 rgba(0,0,0,0.4);" />
          <button>
            <a href="index.php" target="_self">back to login -></a>
          </button>
        </form>
      </div>
    </div>
    <?php
    require_once "include/db_link.php";
    $query = "SELECT USER_NAME FROM users";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
    foreach($result as $row){
      print '<p class="php user">' . $row["USER_NAME"] . '</p>';
      echo "<br>";
    }

    ?>
  </body>
</html>
