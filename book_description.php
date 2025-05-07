<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="book_description/book_description1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link rel="stylesheet" href="book_description/general.css">
        <link rel="stylesheet" href="header/header1.css" />
    </head>
    <body>
    <script src="book_description/book_description1.js"></script>
    <script src="header/main1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?php
        session_start();
        $id=$_SESSION["B_ID"];
        require_once "include/db_link.php";
        $query1 = "SELECT * FROM books WHERE ID = :id;";
        $stmt1 = $pdo->prepare($query1);
        $stmt1->bindParam(":id",$id);
        $stmt1->execute();
        $results1  =  $stmt1->fetchALL(PDO::FETCH_ASSOC);
        print '<p class="php data">' . $results1[0]["title"] . '</p>';
        print '<p class="php data">' . $results1[0]["AUTHOR"] . '</p>';
        print '<p class="php data">' . $results1[0]["PRICE"] . '</p>';
        print '<p class="php data">' . $results1[0]["INTRO"] . '</p>';
        print '<p class="php data">' . $results1[0]["RATING"] . '</p>';
        print '<p class="php data">' . $results1[0]["CATEGORY1"] . '</p>';
        print '<p class="php data">' . $results1[0]["CATEGORY2"] . '</p>';
        print '<p class="php data">' . $results1[0]["CATEGORY3"] . '</p>';
        print '<p class="php data">' . $id . '</p>';
        $query = "SELECT ID,title FROM books WHERE (CATEGORY1 = '" . $results1[0]["CATEGORY1"] . "' OR CATEGORY2 = '" . $results1[0]["CATEGORY1"] . "' OR CATEGORY3 = '" . $results1[0]["CATEGORY1"] . "') AND ID <> " .$id.";";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $results  =  $stmt->fetchALL(PDO::FETCH_ASSOC);
        for($i=0;$i<4;$i++){
          print '<p class="php data">' . $results[$i]["ID"] . '</p>';
          print '<p class="php data">' . $results[$i]["title"] . '</p>';

        }
        $query = "SELECT ID,title FROM books WHERE AUTHOR = '" . $results1[0]["AUTHOR"] . "' AND ID <> " .$id.";";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $results  =  $stmt->fetchALL(PDO::FETCH_ASSOC);
        for($i=0;$i<4;$i++){
          print '<p class="php data">' . $results[$i]["ID"] . '</p>';
          print '<p class="php data">' . $results[$i]["title"] . '</p>';
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
        <div class="page">
        <div class="sidebar">
                <div>
                    <img class="book_img" id="bi" src="" alt="book-img">
                </div>
                <div class="book_price">
                    <pre style="margin-top: 0 px;">     <span id="bp"></span>$</pre>
                </div>
                <div class="buy">
                    <button class="buy_button" id="buy">Add to cart</button>
                </div>
            </div>
            <div class="book_details">
                    <div class="book_name" ><span id="bn"></span></div>
                    <div class="auther" >Author: <span id="ba"></span></div>
                    <div class="rate">


                        <div class="rate_progress2">
                        <div id="rate" class="rate_progress1">

                        <div class="rate_star">
                            <img class="img_star" src="icons1/tstar.png" alt="star">
                            <img class="img_star" src="icons1/tstar.png" alt="star">
                            <img class="img_star" src="icons1/tstar.png" alt="star">
                            <img class="img_star" src="icons1/tstar.png" alt="star">
                            <img class="img_star" src="icons1/tstar.png" alt="star">
                        </div></div></div>


                    </div>
                    <div class="more_info">
                        <div class="categories" id="cat1"></div>
                        <div class="categories" id="cat2"></div>
                        <div class="categories" id="cat3"></div>
                        <div class="book_stat">
                            <div class="publisher">Publisher: IT team</div>
                            <div class="date">Date: 2025</div>
                        </div>
                    </div>
                    <div class="info"><span id="bd"></span></div>
                    </div>
            </div>
        </div>
        <div class="comment_box">
            <div class="comment">
                <div class="comment_head">
                    <div class="comment_pic"><img class="comment_pp" src="profile_images/pp1.jpeg" alt="pp1"></div>
                    <div class="comment_name">Hany </div>
                    <div class="comment_rate">
                        <span style="color: gold;font-size: xxx-large;">&#9733;</span>
                        <span style="color: gold;font-size: xxx-large;">&#9733;</span>
                        <span style="color: gold;font-size: xxx-large;">&#9733;</span>
                        <span style="color: gold;font-size: xxx-large;">&#9733;</span>
                        <span style="color: gold;font-size: xxx-large;">&#9733;</span>
                    </div>
                </div>
                <div class="comment_text">fantastic </div>
            </div>
            <div class="comment">
                <div class="comment_head">
                    <div class="comment_pic"><img class="comment_pp" src="profile_images/download.png" alt="pp1"></div>
                    <div class="comment_name">abdelrahman</div>
                    <div class="comment_rate">
                        <span style="color: gold;font-size: xxx-large;">&#9733;</span>
                        <span style="color: gold;font-size: xxx-large;">&#9733;</span>
                        <span style="color: gold;font-size: xxx-large;">&#9733;</span>
                        <span style="color: gold;font-size: xxx-large;">&#9733;</span>
                        <span style="color: gold;font-size: xxx-large;">&#9733;</span>
                    </div>
                </div>
                <div class="comment_text">I greatly recommend this book</div>
            </div>
            <div class="comment">
                <div class="comment_head">
                    <div class="comment_pic"><img class="comment_pp" src="profile_images/images.png" alt="pp1"></div>
                    <div class="comment_name">sama</div>
                    <div class="comment_rate">
                        <span style="color: gold;font-size: xxx-large;">&#9733;</span>
                        <span style="color: black;font-size: xxx-large;">&#9733;</span>
                        <span style="color: black;font-size: xxx-large;">&#9733;</span>
                        <span style="color: black;font-size: xxx-large;">&#9733;</span>
                        <span style="color: black;font-size: xxx-large;">&#9733;</span>
                    </div>
                </div>
                <div class="comment_text"> I regret buying this book </div>
            </div>
                <div class="author_books">author books</div>
                <div class="author_books_div">
                    <div class="book_author">
                        <div class="book_author_image"><img id="abi1" class="recommend_book" src="" alt="recommended-book"></div>
                        <div class="book_author_name" id="abn1"></div>
                    </div><div class="book_author">
                        <div class="book_author_image"><img id="abi2" class="recommend_book" src="" alt="recommended-book"></div>
                        <div class="book_author_name" id="abn2"></div>
                    </div><div class="book_author">
                        <div class="book_author_image"><img id="abi3" class="recommend_book" src="" alt="recommended-book"></div>
                        <div class="book_author_name" id="abn3"></div>
                    </div><div class="book_author">
                        <div class="book_author_image"><img id="abi4" class="recommend_book" src="" alt="recommended-book"></div>
                        <div class="book_author_name" id="abn4"></div>
                    </div>
                </div>
                <div class="author_books">categorie books</div>
                <div class="author_books_div">
                    <div class="book_author">
                        <div class="book_author_image"><img id="sbi1" class="recommend_book" src="" alt="recommended-book"></div>
                        <div class="book_author_name" id="sbn1"></div>
                    </div><div class="book_author">
                        <div class="book_author_image"><img id="sbi2" class="recommend_book" src="" alt="recommended-book"></div>
                        <div class="book_author_name" id="sbn2"></div>
                    </div><div class="book_author">
                        <div class="book_author_image"><img id="sbi3" class="recommend_book" src="" alt="recommended-book"></div>
                        <div class="book_author_name" id="sbn3"></div>
                    </div><div class="book_author">
                        <div class="book_author_image"><img id="sbi4" class="recommend_book" src="" alt="recommended-book"></div>
                        <div class="book_author_name" id="sbn4"></div>
                    </div>
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
  <a href="about.php" class="custom-button contact-btn">About US</a>
  <a href="feedback.php" class="custom-button feedback-btn">FEEDBACK</a>
  </div>
  <div class="social-media">
      <a href="#" class="social-item">
          <i class="social-icon fab fa-youtube"></i>
          <span class="social-username">@BookStore.com</span>
      </a>
      <a href="#" class="social-item">
          <i class="social-icon fab fa-twitter"></i>
          <span class="social-username">@BookStore.com</span>
      </a>
      <a href="#" class="social-item">
          <i class="social-icon fab fa-facebook"></i>
          <span class="social-username">@BookStore.com</span>
      </a>
      <a href="#" class="social-item">
          <i class="social-icon fab fa-instagram"></i>
          <span class="social-username">@BookStore.com</span>
      </a>
  </div>

    </body>
</html>