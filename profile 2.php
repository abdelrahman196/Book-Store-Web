<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>profile page</title>
    <link rel="stylesheet" href="css/styling1.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <script src="JS/main 2.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php 
  session_start();
  $id=$_SESSION["ID"];
  require_once "include/db_link.php";
  $query = "SELECT * FROM users WHERE ID = :id;";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(":id",$id);
  $stmt->execute();
  $results  =  $stmt->fetchALL(PDO::FETCH_ASSOC);
  print '<p class="data php">' . $results[0]["USER_NAME"] . '</p>';
  print '<p class="data php">' . $results[0]["PHONE"] . '</p>';
  print '<p class="data php">' . $results[0]["EMAIL"] . '</p>';
  print '<p class="data php">' . $id . '</p>';
  $count = 0;
  for($i=1;$i<=5;$i++){
    $query = "SELECT BOUGHT0" . $i . " FROM users WHERE ID = :id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    $results  =  $stmt->fetchALL(PDO::FETCH_ASSOC);
    if($results[0][("BOUGHT0" . $i)]==NULL){
      break;
    }
    else{
      $count++;
    }
  }
  print '<p class="data php">' . $count . '</p>';

?>

<aside class="sidebar" id="sidebar">
            <i class="fas fa-bars" id="show"></i>
    <i class="fas fa-bars" id="menu-toggle"></i>
    <img src="logo c.jpg" id="logo" alt="Book Store Logo">
    <ul>
    <li><i class="fas fa-wallet" ></i>fund wallet</li>
    <li><i class="fas fa-bell" ></i>notifications</li>
    <li><i class="fas fa-cog" ></i> Settings</li>
    <li class="home"><i class="fas fa-home"></i> Home</li>
    <li class="books1"><i class="fas fa-folder-open"></i> Categories</li>
    <li class="cart"><i class="fas fa-shopping-cart"></i> Cart</li>
    </ul>
</aside>

<!-- Header -->
<header class="top-header">

    <div class="greet">Welcome Back!</div>
    <div class="login">Last login : 3am,friday</div>
</header>
    
<!-- Background  -->
<div class="right-bg">
    <img src="blue bg.png" class="bg-img"></img>
</div>
    

<!-- Main Layout -->
<main class="main-container">

<div class="profile-container">
    <span class="pic-cont">
        <img src="profile img.png" alt="profile pic" id="profilepic"/>
    </span>
    <label for="file-input" id="edit-icon"><i class="fas fa-pencil-alt" id="bluepen"></i></label>
    <input type="file" id="file-input" accept="image" hidden>
</div>
<div class="myprofile">MY PROFILE</div>

<form >
    <div class="form-group">
    <label for="username">Username</label>
    <input  class="user"type="text" id="username" placeholder="jason mark" required disabled>
    </div>

    <div class="form-group">
    <label for="phone">Phone Number</label>
    <input class="phone" type="tel" id="phone" placeholder="(123)-456-3485" required disabled>
    </div>

    <div class="form-group">
    <label  for="email">Email</label>
    <input class="email" type="email" id="email" placeholder="jasonmark@gmail.com" required disabled>
    </div>

    <div class="button-group">
    <button type="button" class="signout-btn">Sign Out</button>
    <button type="button" class="delete-btn">Delete Account</button>
    </div>
</form>



<button class="history-btn">Show Purchase History</button>

<div class="history-table-container" style="display: none;">
<table>
    <thead>
    <tr>
        <th>Book Cover</th>
        <th>Name</th>
        <th>Price</th>
        <th>Date Ordered</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
      <?php
        for($i=1;$i<$count+1;$i++){
          $query = "SELECT BOUGHT0" . $i . " ,DATE" . $i . " FROM users WHERE ID = :id;";
          $stmt = $pdo->prepare($query);
          $stmt->bindParam(":id",$id);
          $stmt->execute();
          $results  =  $stmt->fetchALL(PDO::FETCH_ASSOC);
          $query1 = "SELECT * FROM books WHERE ID = :id;";
          $stmt1 = $pdo->prepare($query1);
          $stmt1->bindParam(":id", $results[0]["BOUGHT0" . $i]);
          $stmt1->execute();
          $results1  =  $stmt1->fetchALL(PDO::FETCH_ASSOC);
          print '    <tr>
          <td><img src="books_images/book-' . $results[0]["BOUGHT0" . $i] . '.jpg" alt="book 1" class="book-cover"></td>
          <td> ' . $results1[0]["title"] . '</td>
          <td>$ ' . $results1[0]["PRICE"] . '</td>
          <td>' . $results[0]["DATE" . $i] . '</td>
          <td class="delivered">Delivered</td>
          </tr>';
        }
      ?>
    </tbody>
</table>
</div> 


</body>
</html>