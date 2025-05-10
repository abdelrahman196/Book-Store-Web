<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="booksPage/books1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link rel="stylesheet" href="header/file_theme2.css" />
        <title>books</title>
    </head>
    <body>
        <?php
      session_start();
      print '<p class="php cart_ad">' . $_SESSION["CART_A"] . '</P>';
      if(isset($_SESSION["S_T"])){
        $S_T = $_SESSION["S_T"];
      }
      else{
        $S_T = "";
      }
      print '<p class="php s_t">' . $S_T . '</p>';
      unset($_SESSION['S_T']);
    ?>
        <script src="booksPage/booksPage_script 2.js"></script>
    <script src="header/main 21.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    
    <div class="books_grid">
      <div class="pos">
        <div class="sort_filter">
        <div class="sortby">
            <button class="sortby_btn">Sort By</button>
            <div class="sortby_lst" >
                <div class="check">
                    <input type="radio" class="side_check none_check" name="sort" />
                    <p class="check_text none_check">None</p>
                </div>
                <div class="check">
                    <input type="radio" class="side_check" name="sort" />
                    <p class="check_text">Price</p>
                </div>
                <div class="check">
                    <input type="radio" class="side_check" name="sort" />
                    <p class="check_text">Rating</p>
                </div>
                <div class="check">
                    <input type="radio" class="side_check" name="sort" />
                    <p class="check_text">Alphabeticly</p>
                </div>
            </div>
        </div>
            <div class="filter">
                <button class="filter_btn">filter</button>
                <div class="filter_lst">
                    <div class="check">
                        <input type="checkbox" class="side_check myCheckbox" />
                        <p class="check_text">All</p>
                      </div>
                      <div class="check">
                        <input type="checkbox" class="side_check" />
                        <p class="check_text">Action</p>
                      </div>
                      <div class="check">
                        <input type="checkbox" class="side_check" />
                        <p class="check_text">Rommance</p>
                      </div>
                      <div class="check">
                        <input type="checkbox" class="side_check" />
                        <p class="check_text">Fantasy</p>
                      </div>
                      <div class="check">
                        <input type="checkbox" class="side_check" />
                        <p class="check_text">Science fiction</p>
                      </div>
                      <div class="check">
                        <input type="checkbox" class="side_check" />
                        <p class="check_text">History</p>
                      </div>
                      <div class="check">
                        <input type="checkbox" class="side_check" />
                        <p class="check_text">Drama</p>
                      </div>
                      <div class="check">
                        <input type="checkbox" class="side_check" />
                        <p class="check_text">Mystrey</p>
                      </div>
                      <div class="check">
                        <input type="checkbox" class="side_check" />
                        <p class="check_text">Comedy</p>
                    </div>
                </div>
            </div>
        </div>

      </div>
               <?php
        require_once "include/db_link.php";
        for($i=1;$i<41;$i++){
            $query = "SELECT * FROM books WHERE ID = :id;";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":id",$i);
            $stmt->execute();
            $results  =  $stmt->fetchALL(PDO::FETCH_ASSOC);
            print '<div class="book">
                    <div class="book_img">
                      <img src="books_images/book-' . $i . '.jpg" class="image" />
                    </div>
                    <div class="details">
                      <div class="book_title">
                        <p class="title_text">' . $results[0]["title"] . '</p>
                      </div>
                      <div class="book_author">
                        <p class="author_text">' . $results[0]["AUTHOR"] . '</p>
                      </div>
                      <div class="rate_value">
                        <div class="rate_icon">
                          <img src="icons1/star-icon-png-2.png" class="image" />
                        </div>
                        <p ><span class="rating">' . $results[0]["RATING"] . '</span></p>
                      </div>
                      <div class="book_price">
                        <p class="price_text">' . $results[0]["PRICE"] . '$</p>
                        <div class="categorys">
                          <p class="category">' . $results[0]["CATEGORY1"] . '</p>
                          <p class="category">' . $results[0]["CATEGORY2"] . '</p>
                          <p class="category">' . $results[0]["CATEGORY3"] . '</p>
                        </div>
                        <div intro_h> 
                          <p class="intro">' . $results[0]["INTRO"] . '</p>
                        </div>
                      </div>
                    </div>
                  </div>';
        }
    ?> 
    </div>
   
      <section class="why-us">
          <div class="container">
              <h2>WHY US?</h2>
              <div class="features">
                  <div class="feature">
                      <div class="feature-icon">
                          <i class="fas fa-tags"></i>
                      </div>
                      <h3>Best Deals</h3>
                      <p>Enjoy best deal on a variety of subjects like history and politics, science and technology, computer and medicine.</p>
                  </div>
                  
                  <div class="feature">
                      <div class="feature-icon">
                          <i class="fas fa-book-open"></i>
                      </div>
                      <h3>Wide Assortment</h3>
                      <p>Whether reading is your passion or you read occasionally you can take your pick from the wide range of books.</p>
                  </div>
                  
                  <div class="feature">
                      <div class="feature-icon">
                          <i class="fas fa-credit-card"></i>
                      </div>
                      <h3>Easy Payment</h3>
                      <p>We believe in making transactions accessible and convenient for everyone. That's why we have multiple payment channels available.</p>
                  </div>
                  
                  <div class="feature">
                      <div class="feature-icon">
                          <i class="fas fa-truck"></i>
                      </div>
                      <h3>On Time Delivery</h3>
                      <p>Get ready to receive and enjoy your bundle of books. Our delivery schedule is pretty predictable and reliable.</p>
                  </div>
              </div>
          </div>
      </section>
          <!-- button contact us and feedback   -->
      <div class="button-container">
        <a href="about 2.php" class="custom-button contact-btn">About US</a>
        <a href="feedback 2.php" class="custom-button feedback-btn">FEEDBACK</a>
      </div>
      <div class="social-media">
          <a href="#" class="social-item">
              <i class="social-icon fab fa-youtube"></i>
              <span class="social-username">@youtube.com</span>
          </a>
          <a href="#" class="social-item">
              <i class="social-icon fab fa-twitter"></i>
              <span class="social-username">@twitter.com</span>
          </a>
          <a href="#" class="social-item">
              <i class="social-icon fab fa-facebook"></i>
              <span class="social-username">@facebook.com</span>
          </a>
          <a href="#" class="social-item">
              <i class="social-icon fab fa-instagram"></i>
              <span class="social-username">@instagram.com</span>
          </a>
      </div>
    </body>
</html>