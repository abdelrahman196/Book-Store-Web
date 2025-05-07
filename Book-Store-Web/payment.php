<!DOCTYPE html>
<html>
  <head>
    <title>payment</title>
    <link rel="stylesheet" href="payment/order.css" />
    <link rel="stylesheet" href="payment/gneral.css" />
    <link rel="stylesheet" href="payment/check1.css" />
    <link rel="stylesheet" href="header/header.css" />

  </head>
  <body>
  <script src="payment/payment_script.js"></script>
  <script src="header/main1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?php
      session_start();
      require_once "include/db_link.php";
      $query ="SELECT * FROM books;";
      $stmt = $pdo->prepare($query);
      $stmt->execute();
      $results  =  $stmt->fetchALL(PDO::FETCH_ASSOC);
      $amount =0;
      foreach($results as $row){
        if($row["CART"]){
          $amount++;
          print '<p class="php data">' . $row["title"] . '</p>';
          print '<p class="php data">' . $row["AUTHOR"] . '</p>';
          print '<p class="php data">' . $row["PRICE"] . '</p>';
          print '<p class="php data">' . $row["INTRO"] . '</p>';
          print '<p class="php data">' . $row["RATING"] . '</p>';
          print '<p class="php data">' . $row["CATEGORY1"] . '</p>';
          print '<p class="php data">' . $row["CATEGORY2"] . '</p>';
          print '<p class="php data">' . $row["CATEGORY3"] . '</p>';
          print '<p class="php data">' . $row["ID"] . '</p>';
        }
      }
        
    ?>
       <div class="top-bar">
      <div class="top-bar__content">
        <section class="phone">
          <i class="fa-solid fa-phone icon"></i>
          <span>111-222-3333</span>
        </section>
        <section class="email">
          <i class="fa-solid fa-envelope icon"></i>
          <span>info@bookstore.com</span>
        </section>
      </div>
    </div>

    <div class="bottom-bar">
      <div class="bottom-bar__content">
        <a href="#" class="logo">
          <img class="logo__img" src="books_images/Logo.png" alt="logo">
        
        </a>
    
        <nav class="nav">
          <ul class="nav__list">
           
            <li class="nav__item">
              <a class="nav__link" href="file.php">Home</a>
            </li>
            <li class="nav__item">
              <a class="nav__link" href="booksPage.php">Books</a>
            </li>
            </li>
            <li class="nav__item">
              <a class="nav__link" href="events.php">Events</a>
            </li>
            <li class="nav__item">
                <a class="nav__link" href="payment.php">Cart</a>
            </li>
            <li class="search-container">
                <input class="search_text" type="text" placeholder="Search..." />
                <button class="sub" type="submit">
                   <i class="fas fa-search"></i>
                </button>
            </li>
            <div class="profile-pic">
                <img id="profile-img" src="icon.jpg" alt="Profile">
            </div>
          </ul>
        
        </nav>
  
        <div class="hamburger">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
      </div>
    </div>

    <div class="check">
      <div class="details">
        <div class="check_header">
          <p class="check_header_text">order summary</p>
        </div>
        <div class="items">
          <div class="stuff">items(x)</div>
          <div class="value">value</div>
        </div>
        <div class="values">
          <div class="stuff">price before taxes</div>
          <div class="value">value</div>
        </div>
        <div class="values">
          <div class="stuff">taxes</div>
          <div class="value">value</div>
        </div>
      </div>
      <div class="summary">
        <div class="line"></div>
        <div class="total">
          <div class="order_total">order_total</div>
          <div class="total_value">total_value</div>
        </div>
        <div class="con">
          <button class="con_button">Confirm</button>
        </div>
      </div>
    </div>

    <div class="review_your_order">Review your order</div>
    <?php
      for($i=0;$i<$amount;$i+=1){
        print '<div class="order_details">
        <div class="book">
          <img class="book_image" src="books_images/book-1.jpg" />
        </div>
        <div>
          <p class="book_name">Romantic Comedy</p>
        </div>
        <div class="rating">
          <span style="color: gold">&#9733;</span>
          <span style="color: gold">&#9733;</span>
          <span style="color: gold">&#9733;</span>
          <span style="color: gold">&#9733;</span>
          <span style="color: black">&#9733;</span>
        </div>
        <div class="price_details">
          <pre class="price"> Price: 300$</pre>
        </div>
        <button class="delete_button">Delete item <p class="id php">  </p></button>
      </div>';
      }
      
    ?>
  </body>
</html>
