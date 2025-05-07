<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="header/file0.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <title>book store</title>
</head>
<body>
<script src="homePage/home.js"></script>
<script src="header/main1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <header class="header">
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
            <li id="cart_li" class="nav__item">
                <a class="nav__link" href="payment.php">Cart</a>
                <div class="cart_a">
                  3
                </div>
            </li>
            <li class="search-container">
                <input class="search_text" type="text" placeholder="Search..." />
                <button class="sub"type="submit">
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
    <div id="slider">
        <figure>
        <img src="https://s3-us-west-2.amazonaws.com/artifactuprising/magento/blog/articles/2016-04-18-10-book-covers-youll-love/2016-04-18-10-book-titles-01.jpg">
            <img src="https://i0.wp.com/calmatters.org/wp-content/uploads/2023/11/091223-Fresno-Library-LV_CM-07.jpg?fit=1200%2C800&ssl=1">
            <img src="https://ca-times.brightspotcdn.com/dims4/default/8d75bfd/2147483647/strip/true/crop/4200x2800+0+0/resize/1200x800!/quality/75/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2F50%2Fde%2F95f2d9f34ea892116fde0fb606e1%2Fla-photos-1staff-647820-la-et-jc-burbank-unified-district-removes-books-2-ajs.jpg">
            <img src="https://tint.creativemarket.com/es3IqJPY1fPyamwh2c3lDbdCE35BJ490Q29oK8640mY/width:1200/height:800/gravity:nowe/rt:fill-down/el:1/czM6Ly9maWxlcy5jcmVhdGl2ZW1hcmtldC5jb20vaW1hZ2VzL3NjcmVlbnNob3RzL3Byb2R1Y3RzLzI3NzAvMjc3MDIvMjc3MDIxMzQvY3JlYXRpdmUtbWFya2V0X21pbmltYWxpc3QtYm9vay10ZW1wbGF0ZV90aHVtYm5haWwtby5qcGc?1687198189">
        </figure>
        <div class="arrow prev" onclick="moveSlide(-1)">&#10094;</div>
        <div class="arrow next" onclick="moveSlide(1)">&#10095;</div>
    </div>
    <!-- Books sliding -->
    <section class="picked-for-you">
        <div class="category-header">
            <h1 class="category-title">Picked for you</h1>
            <hr class="divider">
            <div class="subcategory"></div>
        </div>
        
        <div class="products-grid">
            <!-- Product cards will be generated here -->
            <!-- This example shows 6 products, but you can add as many as you need -->
            <div class="product-card">
                <img src="books_images/book-11.jpg" alt="Book Title 1" class="product-image">
                <div class="product-name">Marvel Action: Avengers 3</div>
                <div class="product-price">$25.00</div>
            </div>
            <div class="product-card">
                <img src="books_images/book-14.jpg" alt="Book Title 1" class="product-image">
                <div class="product-name">Awareness To Action</div>
                <div class="product-price">$30.00</div>
            </div>
            <div class="product-card">
                <img src="books_images/book-16.jpg" alt="Book Title 1" class="product-image">
                <div class="product-name">Fragonard</div>
                <div class="product-price">$10.00</div>
            </div>
            <div class="product-card">
                <img src="books_images/book-19.jpg" alt="Book Title 1" class="product-image">

                <div class="product-name">The Gilded Ones</div>
                <div class="product-price">$30.00</div>
            </div>
            <div class="product-card">
                <img src="books_images/book-21.jpg" alt="Book Title 1" class="product-image">
                <div class="product-name">Battles That Changed History</div>
                <div class="product-price">$20.00</div>
            </div>
            <div class="product-card">
                <img src="books_images/book-22.jpg" alt="Book Title 1" class="product-image">
                <div class="product-name">A Short History Of The Train</div>
                <div class="product-price">$16.00</div>
            </div>
        </div>
        <section class="Best-Sellers">
            <div class="category-header">
                <h1 class="category-title">Best Sellers</h1>
                <hr class="divider">
                <div class="subcategory"></div>
            </div>
            
            <div class="products-grid">
                <!-- Product cards will be generated here -->
                <!-- This example shows 6 products, but you can add as many as you need -->
                <div class="product-card">
                    <img src="books_images/book-25.jpg" alt="Book Title 1" class="product-image">
                    <div class="product-name">No drama discipline</div>
                    <div class="product-price">$10.00</div>
                </div>
                <div class="product-card">
                    <img src="books_images/book-18.jpg" alt="Book Title 1" class="product-image">
                    <div class="product-name">Beast made of night</div>
                    <div class="product-price">$50.00</div>
                </div>
                <div class="product-card">
                    <img src="books_images/book-10.jpg" alt="Book Title 1" class="product-image">
                    <div class="product-name">Bridgerton</div>
                    <div class="product-price">$60.00</div>
                </div>
                <div class="product-card">
                    <img src="books_images/book-1.jpg" alt="Book Title 1" class="product-image">
    
                    <div class="product-name">Romantic Comedy</div>
                    <div class="product-price">$30.00</div>
                </div>
                <div class="product-card">
                    <img src="books_images/book-24.jpg" alt="Book Title 1" class="product-image">
                    <div class="product-name">What is history now?</div>
                    <div class="product-price">$30.00</div>
                </div>
                <div class="product-card">
                    <img src="books_images/book-15.jpg" alt="Book Title 1" class="product-image">
                    <div class="product-name">The light of all that falls</div>
                    <div class="product-price">$50.00</div>
                </div>
            </div> 
            <section class="Last-Relases">
                <div class="category-header">
                    <h1 class="category-title">Last Released</h1>
                    <hr class="divider">
                    <div class="subcategory"></div>
                </div>
                
                <div class="products-grid">
                    <!-- Product cards will be generated here -->
                    <!-- This example shows 6 products, but you can add as many as you need -->
                    <div class="product-card">
                        <img src="books_images/book-23.jpg" alt="Book Title 1" class="product-image">
                        <div class="product-name">Making History</div>
                        <div class="product-price">$20.00</div>
                    </div>
                    <div class="product-card">
                        <img src= "books_images/book-13.jpg" alt="Book Title 1" class="product-image">
                        <div class="product-name"> Marvel Action: Avengers 3</div>
                        <div class="product-price">$25.00</div>
                    </div>
                    <div class="product-card">
                        <img src="books_images/book-26.jpg" alt="Book Title 1" class="product-image">
                        <div class="product-name">Drama Free</div>
                        <div class="product-price">$18.00</div>
                    </div>
                    <div class="product-card">
                        <img src="books_images/book-6.jpg" alt="Book Title 1" class="product-image">
        
                        <div class="product-name">The Bromance Book Club</div>
                        <div class="product-price">$35.00</div>
                    </div>
                    <div class="product-card">
                        <img src="books_images/book-17.jpg"alt="Book Title 1" class="product-image">
                        <div class="product-name">The black prism</div>
                        <div class="product-price">$80.00</div>
                    </div>
                    <div class="product-card">
                        <img src= "books_images/book-2.jpg"alt="Book Title 1" class="product-image">
                        <div class="product-name">The Divine Comedy</div>
                        <div class="product-price">$10.00</div>
                    </div>
                </div>

                <h1 class="video-header">Videos</h1>
    
                <div class="video-container">
                    <!-- Video 1 - Embedded YouTube/Vimeo -->

                      <!--         WHY US PARAGRAPH      -->
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
                        <span class="social-username">@.instagram</span>
                    </a>
                </div>





            </div> 
            </body>
            </html>
                
      
  </header>

</body>
</html>