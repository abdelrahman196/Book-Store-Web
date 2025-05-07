<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){

  session_start();
  require_once "db_link.php";
  $query = "INSERT INTO users (USER_NAME,PASSWORD,PHONE,EMAIL) VALUES (:username,:pwd,:phone,:email);";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(":username",$_POST["user"]);
  $stmt->bindParam(":pwd",$_POST["pwd"]);
  $stmt->bindParam(":phone",$_POST["phone"]);
  $stmt->bindParam(":email",$_POST["email"]);
  $stmt->execute();




  $query = "SELECT ID FROM users WHERE USER_NAME = :username;";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(":username",$_POST["user"]);
  $stmt->execute();
  $results  =  $stmt->fetchALL(PDO::FETCH_ASSOC);
  $_SESSION["ID"]= $results[0]["ID"];
  $_SESSION["CART_A"]= 0;
  header("location: ../file.php");
}
else{
  print $_SERVER["REQUEST_METHOD"];
  header("location: ../signup.php");
}
