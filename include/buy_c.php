<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
  session_start();
  $user_id=$_SESSION["ID"];
  require_once "db_link.php";
  $count = 0;
  $len=$_POST["ar_len"];
  $len1=$len;
  if($len>5){
    $len=5;
  }
  $id_arr=$_POST["id_arr"];
  for($i=1;$i<=5;$i++){
    $query = "SELECT BOUGHT0" . $i . " FROM users WHERE ID = :id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id",$user_id);
    $stmt->execute();
    $results  =  $stmt->fetchALL(PDO::FETCH_ASSOC);
    if($results[0][("BOUGHT0" . $i)]==NULL){
      break;
    }
    else{
      $count++;
    }
  }
  if(5-$count<$len){
    for($i=1;$i<(5-$len)+1;$i++){;
      $query = "SELECT BOUGHT0" . $i . " ,DATE" . $i . " FROM users WHERE ID = :id;";
      $stmt = $pdo->prepare($query);
      $stmt->bindParam(":id",$user_id);
      $stmt->execute();
      $results  =  $stmt->fetchALL(PDO::FETCH_ASSOC);
      $query = "UPDATE users SET BOUGHT0" . ($i+$len) . " = :x1 , DATE" . ($i+$len) . " = :y1 WHERE ID = :id;";
      $stmt = $pdo->prepare($query);
      $stmt->bindParam(":x1", $results[0]["BOUGHT0" . $i]);
      $stmt->bindParam(":y1",$results[0]["DATE" . $i]);
      $stmt->bindParam(":id",$user_id);
      $stmt->execute();
    }
    for($i=1,$x=0;$i<$len+1;$i++,$x++){
      $query = "UPDATE users SET BOUGHT0" . $i . " = " . $id_arr[$x] . " , DATE" . $i . " = '". date("Y-m-d") . "' WHERE ID = :id;";
      $stmt = $pdo->prepare($query);
      $stmt->bindParam(":id",$user_id);
      $stmt->execute();
    }
  } 
  else{

    for($i=$count+1,$x=0;$i<6;$i++,$x++){
      $query = "UPDATE users SET BOUGHT0" . $i . " = " . $id_arr[$x] . " , DATE" . $i . " = '". date("Y-m-d") . "' WHERE ID = :id;";
      $stmt = $pdo->prepare($query);
      $stmt->bindParam(":id",$user_id);
      $stmt->execute();
    }
  }
  for($i=0;$i<$len;$i++){
    $query = "UPDATE books SET CART = 0 WHERE ID = :id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id",$id_arr[$i]);
    $stmt->execute();
  }
}
else{
  print $_SERVER["REQUEST_METHOD"];
  header("location: ../login.php");
}
