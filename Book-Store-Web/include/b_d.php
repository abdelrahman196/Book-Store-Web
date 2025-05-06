<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){

  session_start();
  $_SESSION["B_ID"]=$_POST["b_id"];
}
else{
  print $_SERVER["REQUEST_METHOD"];
  header("location: ../login.php");
}
