<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){

  session_start();
  require_once "db_link.php";
  $query = "DELETE FROM users WHERE ID = :id;";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(":id",$_POST["u_id"]);
  $stmt->execute();
}
else{
  print $_SERVER["REQUEST_METHOD"];
  header("location: ../login.php");
}
