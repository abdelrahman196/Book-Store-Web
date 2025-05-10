<!DOCTYPE html>
<html>
  <head>
    <title>payment</title>
    <link rel="stylesheet" href="payment/order21.css" />
    <link rel="stylesheet" href="payment/gneral.css" />
    <link rel="stylesheet" href="payment/check2.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="header/file_theme2.css" />
  </head>
  <body>
  <script src="payment/payment_script 2.js"></script>
  <script src="header/main 21.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?php
      session_start();
      print '<p class="php cart_ad">' . $_SESSION["CART_A"] . '</P>';
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
          <img class="logo__img" src="Logo_2.png" alt="logo">
        
        </a>
    
        <nav class="nav">
          <ul class="nav__list">
           
          <ul class="nav__list">
           
            <li class="nav__item">
              <a class="nav__link" href="file 2.php">Home</a>
            </li>
            <li class="nav__item">
              <a class="nav__link" href="booksPage 2.php">Books</a>
            </li>
            </li>
            <li class="nav__item">
              <a class="nav__link" href="events 2.php">Events</a>
            </li>
            <li id="cart_li" class="nav__item">
                <a class="nav__link" href="payment 2.php">Cart</a>
                <div class="cart_a">
                  3
                </div>
            </li>
            <li class="search-container">
                <input class="search_text" type="text" placeholder="Search..." />
                <button class="sub" type="submit">
                   <i class="fas fa-search"></i>
                </button>
                <li class="btn">
                    <span class="btn__indicator">
                      <span class="btn__icon-container">
                        <i class="btn__icon fa-solid"></i>
                      </span>
                  </span>
                </li>    
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
    
    <div class="review_your_order">Your Cart</div>
    <div class="top" >
      <div style="margin-left: 120px;" class="tag_name">book</div>
      <div class="tag_author1">author</div>
      <div class="price_details1">price</div>
      <div class="x"> </div>
    </div>
    <?php
      for($i=0;$i<$amount;$i+=1){
        print '<div class="order_details">
      <img class="book_image" src="books_images/book-1.jpg" />
      <div class="tag_name">
        
        <p class="book_name">Romantic Comedy</p>
      </div>
      <div class="tag_author">sofa lotfy</div>
      <div class="price_details1">
        <pre class="price_details">300$</pre>
      </div>
      <div class="x"><button class="delete_button">X<p class="id php">  </p></button></div>
    </div>';
      }
      
    ?>

    


    
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
  </body>
</html>
