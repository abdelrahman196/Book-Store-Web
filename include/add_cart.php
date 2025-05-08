<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){

  session_start();
  require_once "db_link.php";
  $query = "UPDATE books SET CART = 1 WHERE ID = :id;";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(":id",$_POST["b_id"]);
  $stmt->execute();
  $_SESSION["CART_A"]++;
}
else{
  print $_SERVER["REQUEST_METHOD"];
  header("location: ../login.php");
}
