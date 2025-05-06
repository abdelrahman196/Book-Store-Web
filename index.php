<html>
  <head>
    <title>BookStore</title>
    <link rel="icon" href="images/icon.logo.2.jpg" />
    <link rel="stylesheet" href="login_signup/login.css" />
    <link rel="stylesheet" href="login_signup/style.css" />
    <link rel="stylesheet" href="login_signup/general.css" />
    <script src="login_signup/login.js"></script>
  </head>
  <body>
    <div class="wrapper fadeInDown">
      <div class="formContent">
        <div>
          <h2 align="center" style="color: rgb(56, 33, 16)">Login</h2>
          <center>
            <img class="imagesize" src="images/icon.logo.2.jpg " />
          </center>
        </div>
        <form method="POST" action="include/login-inc.php" onsubmit="return log()">
          <div id="myerror1" class="myerror"></div>
          <input
            type="text"
            id="username"
            class="fadeIn second"
            name="username"
            placeholder="Email"
            style="color: rgb(56, 33, 16)"
          />
          <div id="myerror2" class="myerror"></div>
          <input
            type="password"
            id="password"
            class="fadeIn third"
            name="password"
            placeholder="password"
            style="color: rgb(56, 33, 16)"
          />
          <input type="submit" class="fadeIn_fourth" value="Log In" />
          <h3>
            Don't have an account?<a href="signup.php" target="_self"
              >... Signup!</a
            >
          </h3>
        </form>
      </div>
    </div>
    <?php
    require_once "include/db_link.php";
    $query = "SELECT * FROM users";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
    foreach($result as $row){
      print '<p class="php user">' . $row["USER_NAME"] . '</p>';
      echo "<br>";
      print '<p class="php pwd">' . $row["PASSWORD"] . '</p>';
      echo "<br>";
    }

    ?>
  </body>
</html>
