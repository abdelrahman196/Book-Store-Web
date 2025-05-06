<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){

  session_start();
  require_once "db_link.php";
  $query = "SELECT ID FROM users WHERE USER_NAME = :username;";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(":username",$_POST["username"]);
  $stmt->execute();
  $results  =  $stmt->fetchALL(PDO::FETCH_ASSOC);
  $_SESSION["ID"]= $results[0]["ID"];
  header("location: ../file.php");
}
else{
  print $_SERVER["REQUEST_METHOD"];
  header("location: ../login.php");
}
