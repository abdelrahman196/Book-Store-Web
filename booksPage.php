<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="booksPage/side_bar.css" />
    <link rel="stylesheet" href="booksPage/general.css" />
    <link rel="stylesheet" href="booksPage/books_grid.css" />
    <link rel="stylesheet" href="header/header1.css" />
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
    <script src="booksPage/bookPage_script1.js"></script>
    <script src="header/main.js"></script>
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
    <div class="side_bar">
      <div class="sort side_header">
        <p class="side_header_text">Sort by</p>
      </div>
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
      <div class="line"></div>
      <div class="filter side_header">
        <p class="side_header_text">Filter</p>
      </div>
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
    <div class="books_grid">
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">comedy</p>
            <p class="category">rommance</p>
            <p class="category">none</p>
          </div>
          <div>
            <p class="intro">
              NEW YORK TIMES BESTSELLER • REESE’S BOOK CLUB PICK • A comedy
              writer thinks she’s sworn off love, until a dreamy pop star flips
              the script on all her assumptions—a “smart, sophisticated, and
              fun” (Oprah Daily) novel from the author of Eligible, Rodham, and
              Prep. Sally Milz is a sketch writer for The Night Owls, a
              late-night live comedy show that airs every Saturday. With a
              couple of heartbreaks under her belt, she’s long abandoned the
              search for love, settling instead for the occasional hook-up,
              career success, and a close relationship with her stepfather to
              round out a satisfying life. But when Sally’s friend and fellow
              writer Danny Horst begins dating Annabel, a glamorous actress who
              guest-hosted the show, he joins the not-so-exclusive group of
              talented but average-looking and even dorky men at the show—and in
              society at large—who’ve gotten romantically involved with
              incredibly beautiful and accomplished women. Sally channels her
              annoyance into a sketch called the Danny Horst Rule, poking fun at
              this phenomenon while underscoring how unlikely it is that the
              reverse would ever happen for a woman. Enter Noah Brewster, a pop
              music sensation with a reputation for dating models, who signed on
              as both host and musical guest for this week’s show. Dazzled by
              his charms, Sally hits it off with Noah instantly, and as they
              collaborate on one sketch after another, she begins to wonder if
              there might actually be sparks flying. But this isn’t a romantic
              comedy—it’s real life. And in real life, someone like him would
              never date someone like her … right? With her keen observations
              and trademark ability to bring complex women to life on the page,
              Curtis Sittenfeld explores the neurosis-inducing and
              heart-fluttering wonder of love, while slyly dissecting the social
              rituals of romance and gender relations in the modern age.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-1.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.3</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Romantic Comedy</p>
          </div>
          <div class="book_author">
            <p class="author_text">sofa lotfy</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">300$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">comedy</p>
            <p class="category">mystrey</p>
            <p class="category">fantasy</p>
          </div>
          <div>
            <p class="intro">
              The Comedy tells of the journey of a character who is at one and
              the same time both Dante himself and Everyman through the three
              realms of the Christian afterlife: Hell, Purgatory and Heaven. He
              presents a vision of the afterlife which is strikingly original in
              its conception, with a complex architecture and a coherent
              structure. On this journey Dante’s protagonist – and his reader –
              meet characters who are variously noble, grotesque, beguiling,
              fearful, ridiculous, admirable, horrific and tender, and through
              them he is shown the consequences of sin, repentance and virtue,
              as he learns to avoid Hell and, through cleansing in Purgatory, to
              taste the joys of Heaven.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-2.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.0</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">The Divine Comedy</p>
          </div>
          <div class="book_author">
            <p class="author_text">Abdallah Ayman</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">100$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">comedy</p>
            <p class="category">rommance</p>
            <p class="category">drama</p>
          </div>
          <div>
            <p class="intro">
              A universal favorite, The Importance of Being Earnest displays
              Oscar Wilde’s theatrical genius at its brilliant best. Subtitled
              “A Trivial Comedy for Serious People”, this hilarious attack on
              Victorian manners and morals turns a pompous world on its head,
              lets duplicity lead to happiness, and makes riposte the highest
              form of art. Also included in this special collection are Wilde’s
              first comedy success, Lady Windermere’s Fan, and his richly
              sensual melodrama, Salome.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-3.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.2</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Importance of Being Earnest</p>
          </div>
          <div class="book_author">
            <p class="author_text">Abdo Mrieden</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">250$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">comedy</p>
            <p class="category">science fiction</p>
            <p class="category">history</p>
          </div>
          <div>
            <p class="intro">
              (2016) This is a novel about the hundreds of tiny connections
              between the public and private worlds and how they affect us all.
              It’s about the legacy of war and the end of innocence. It’s about
              how comedy and politics are battling it out and comedy might have
              won. It’s about how 140 characters can make fools of us all. It’s
              about living in a city where bankers need cinemas in their
              basements and others need food banks down the street. It is
              Jonathan Coe doing what he does best ­- showing us how we live
              now. ‘Coe is among the handful of novelists who can tell us
              something about the temper of our times’ Observer
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-4.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.6</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Number 11</p>
          </div>
          <div class="book_author">
            <p class="author_text">Hany Ashraf</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">450$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">none</p>
            <p class="category">comedy</p>
            <p class="category">fantasy</p>
          </div>
          <div>
            <p class="intro">
              Klima, a celebrated jazz trumpeter, receives a phone call
              announcing that a young nurse with whom he spent a brief night at
              a fertility spa is pregnant. She has decided he is the father. And
              so begins a comedy which, during five madcap days, unfolds with
              ever-increasing speed. Klima’s beautiful, jealous wife, the
              nurse’s equally jealous boyfriend, a fanatical gynaecologist, a
              rich American, at once Don Juan and saint, and an elderly
              political prisoner who, just before his emigration, is holding a
              farewell party at the spa are all drawn into this black comedy, as
              in A Midsummer Night’s Dream. As usual, Milan Kundera poses
              serious questions with a blasphemous lightness which makes us
              understand that the modern world has taken away our right to
              tragedy.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-5.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">3.7</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Farewell Waltz</p>
          </div>
          <div class="book_author">
            <p class="author_text">Abdelrahman Helmy</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">100$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">comedy</p>
            <p class="category">rommance</p>
            <p class="category">history</p>
          </div>
          <div>
            <p class="intro">
              (2020) Amazon Book Review’s No. 1 Best Romance of 2019 and one of
              Bustle’s ’21 New Rom-Coms Out In Fall 2019 To Give You Warm And
              Fuzzy Feelings All Season Long’! If you love Jasmine Guillory,
              Sally Thorne and Helen Hoang, you’ll LOVE Lyssa Kay Adams! Readers
              can’t stop raving about The Bromance Book Club! ‘Romantic comedy
              at its finest’ ‘Completely lived up to the hype’ ‘The perfect
              blend of funny, wacky moments and also sexy and angsty moments’ ‘I
              didn’t expect to read a new favourite but The Bromance Book Club
              has gone and done it!’ ‘I would recommend this to anyone who wants
              to escape into a book for a few hours and come out with a smile’
              ‘This book made me feel warm and fuzzy. It was like being hugged,
              but in a sexy way – what more could you want?’ ‘I loved the
              emotional range it took me through, from laugh-out-loud moments to
              real tear-jerking scenes’ The first rule of book club: You don’t
              talk about book club. Gavin Scott’s marriage is trouble. The
              Nashville Legends baseball star has recently discovered a
              humiliating secret: his wife Thea has always faked the Big O. His
              reaction to the revelation is the final straw for their already
              strained relationship. Thea asks for a divorce, and Gavin realizes
              he’s let his pride and fear get the better of him. Welcome to the
              Bromance Book Club. Distraught and desperate, Gavin finds help
              from an unlikely source: a secret romance book club made up of
              Nashville’s top alpha men. With the help of their current read, a
              steamy Regency called Courting the Countess, the guys coach Gavin
              on saving his marriage. But it’ll take a lot more than flowery
              words and grand gestures for this hapless Romeo to find his inner
              hero and win back the trust of his beloved wife. Praise for The
              Bromance Book Club: ‘A you’re-gonna-burn-dinner book because you
              will not want to put it down. Laugh out loud with tons of heart,
              this is an absolutely adorable must read’ Avery Flynn, USA Today
              bestselling author ‘A delight!…I raced to finish this book, but
              still never wanted it to end!’ Alexa Martin, author of Intercepted
              ‘A delightful, fast-paced read with the perfect mix of
              laugh-out-loud and swoony moments – every town should have a
              Bromance Book Club’ Evie Dunmore, author of Bringing Down the Duke
              ‘It is the reading aloud in this story that ultimately wins my
              heart, and shows that everything worth knowing can be learned from
              romance’ kc dyer, author of Finding Fraser Don’t miss the next
              Bromance Book Club reads! Undercover Bromance is out now and Crazy
              Stupid Bromance is available to preorder! 9781472271686
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-6.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.1</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">The Bromance Book Club</p>
          </div>
          <div class="book_author">
            <p class="author_text">Yousef Elgendy</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">350$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">none</p>
            <p class="category">comedy</p>
            <p class="category">rommance</p>
          </div>
          <div>
            <p class="intro">
              From New York Times bestselling author Elle Kennedy and USA Today
              bestselling author Sarina Bowen comes the first in the spin-off
              series of their wildly successful Him and Us books. “We’re way
              more than friends, Jessie.” “Blake―” “But no worries. I’ll just
              sit tight until you figure that out.” Hosting her brother’s
              wedding for an MVP guest list is the challenge of Jess Canning’s
              life. Already the family screw-up, she can’t afford to fail at
              this, too. Especially after the colossal mistake she made with the
              best man during a weak moment last spring. Nobody―absolutely
              nobody―can find out about that, and there will not be a repeat.
              Absolutely not. No matter how devastatingly sexy his smile, he’s a
              giant manchild who’s never been serious in his life. And if Jess
              wants to prove herself to her family, serious is what she has to
              get. For Blake Riley, this wedding is a gift from fate itself. The
              girl he has his eye on is the maid of honor, and he’s the best
              man? Let the games begin. So what if Jess is giving him a
              little―fine, a lot―of resistance? He just needs to convince the
              stubborn blonde that he’s really a good boy with a bad rap.
              Beneath the flirty jokes and goofy smile, he’s got layers―even if
              Jess doesn’t want to see them. Luckily, every professional hockey
              player knows that you’ve got to make an effort if you want to
              score. And Jess is just the girl he wants to win.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-7.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">3.5</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">
              Wags 1: Good Boy: A Friends with Benefits Hockey Romance
            </p>
          </div>
          <div class="book_author">
            <p class="author_text">Mariam Tarek</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">200$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">none</p>
            <p class="category">drama</p>
            <p class="category">rommance</p>
          </div>
          <div>
            <p class="intro">
              (2020) The Bromance Book Club was one of Bustle’s ’21 New Rom-Coms
              Out In Fall 2019 To Give You Warm And Fuzzy Feelings All Season
              Long’! If you love Jasmine Guillory, Sally Thorne and Helen Hoang,
              you’ll LOVE Lyssa Kay Adams! Readers adore Undercover Bromance!
              ‘This series is one of the best I’ve EVER read’ ‘FAB-U-LOUS!!!’
              ‘The kind of book I love to read after a hard day to make me
              smile’ The first rule of book club: You don’t talk about book
              club. Braden Mack thinks reading romance novels makes him an
              expert in love, but he’ll soon discover that real life is better
              than fiction. Liv Papandreas has a dream job as a sous chef at
              Nashville’s hottest restaurant. Too bad the celebrity chef owner
              is less than charming behind kitchen doors. After she catches him
              harassing a young hostess, she confronts him and gets fired. Liv
              vows revenge, but she’ll need assistance to take on the powerful
              chef Unfortunately, that means turning to Braden Mack. When Liv’s
              blackballed from the restaurant scene, the charismatic nightclub
              entrepreneur offers to help expose her ex-boss, but she is
              suspicious of his motives. This is a job for the Bromance Book
              Club. Inspired by the romantic suspense novel they’re reading, the
              book club assists Liv in setting up a sting operation to take down
              the chef. But they’re just as eager to help Mack figure out the
              way to Liv’s heart…even though she’s determined to squelch the
              sparks between them before she gets burned. Praise for The
              Bromance Book Club: ‘A you’re-gonna-burn-dinner book because you
              will not want to put it down. Laugh out loud with tons of heart,
              this is an absolutely adorable must read’ Avery Flynn, USA Today
              bestselling author ‘A delight!…I raced to finish this book, but
              still never wanted it to end!’ Alexa Martin, author of Intercepted
              ‘A delightful, fast-paced read with the perfect mix of
              laugh-out-loud and swoony moments-every town should have a
              Bromance Book Club’ Evie Dunmore, author of Bringing Down the Duke
              ‘It is the reading aloud in this story that ultimately wins my
              heart, and shows that everything worth knowing can be learned from
              romance’ kc dyer, author of Finding Fraser Don’t miss the other
              Bromance Book Club reads! The Bromance Book Club is out now and
              Crazy Stupid Bromance is available to preorder! 9781472271686
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-8.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">3.2</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Undercover Bromance</p>
          </div>
          <div class="book_author">
            <p class="author_text">Lama Wael</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">150$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">action</p>
            <p class="category">rommance</p>
            <p class="category hidden">fantasy</p>
          </div>
          <div>
            <p class="intro">
              As a child, Monkey D. Luffy was inspired to become a pirate by
              listening to the tales of the buccaneer "Red-Haired" Shanks. But
              his life changed when Luffy accidentally ate the Gum-Gum Devil
              Fruit and gained the power to stretch like rubber...at the cost of
              never being able to swim again! Years later, still vowing to
              become the king of the pirates, Luffy sets out on his
              adventure...one guy alone in a rowboat, in search of the legendary
              "One Piece," said to be the greatest treasure in the world
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-9.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">5.0</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">One Piece 01: Romance Dawn</p>
          </div>
          <div class="book_author">
            <p class="author_text">sofa lotfy</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">250$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">drama</p>
            <p class="category">rommance</p>
            <p class="category">action</p>
          </div>
          <div>
            <p class="intro">
              (2021) The first novel in Julia Quinn’s worldwide bestselling
              Bridgerton novels, now a series created by Shonda Rhimes for
              Netflix. This is the story of Daphne Bridgerton and the Duke:
              welcome to the ballrooms of Regency London . . . Can there be any
              greater challenge to London’s Ambitious Mamas than an unmarried
              duke? Lady Whistledown’s Society Papers, April 1813 By all
              accounts, Simon Basset is on the verge of proposing to his best
              friend’s sister, the lovely – and almost-on-the-shelf – Daphne
              Bridgerton. But the two of them know the truth – it’s all an
              elaborate plan to keep Simon free from marriage-minded society
              mothers. And as for Daphne, surely she will attract some worthy
              suitors now that it seems a duke has declared her desirable . . .
              Their ruse works like a charm – at first. But as Daphne waltzes
              across ballroom after ballroom with Simon, it’s hard to remember
              that their courtship is a complete sham. Maybe it’s his devilish
              smile, certainly it’s the way his eyes seem to burn every time he
              looks at her. It wasn’t the plan, but it seems she’s falling for
              the duke, for real. And amidst the glittering, gossipy, cut-throat
              world of London’s elite, there is only one certainty: love ignores
              every rule . . . Find out why readers love Julia Quinn . . .
              ‘Light, pacy and full of feisty heroines’ Guardian on the
              Bridgerton series ‘Julia Quinn’s Bridgerton books take all of the
              classic tropes we know and love . . . and gives them a thoroughly
              modern twist. I can’t focus on anything else’ Stylist ‘Quinn is a
              master of historical romance’ Entertainment Weekly ‘A smart, funny
              touch’ Time Magazine ‘Like an episode of Downton Abbey mixed with
              a great rom-com’ iBooks Best Books of March ‘Powered by a surfeit
              of dazzling wit and graced with a cast of unforgettable
              characters’ Booklist ‘A romance readers will not want to put down
              . . . Hooray Julia!’ Romance Reviews Today ‘Quinn writes
              delightfully fast-paced, funny, sparkling and bright romance’
              Romantic Times ‘The next best thing to Georgette Heyer’ Gloss
              ‘Julia Quinn is one of the best historical romance novelists of
              our time’ Heroes and Heartbreakers ‘Quinn excels in writing
              stories full of joy and delight, where laughter trembles on the
              edges’ Happy Ever After ‘Full of wit, charm and smouldering
              attraction . . . an unputdownable story that I think romance fans
              will treasure’ Harlequin Junkie ‘Quinn is incomparable! The latest
              addition to her beloved Bridgerton series is funny, charming,
              witty and wildly romantic’ RT Book Reviews
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-10.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.7</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Bridgerton: The Duke and I</p>
          </div>
          <div class="book_author">
            <p class="author_text">Abdallah Ayman</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">600$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">none</p>
            <p class="category">action</p>
            <p class="category">fantasy</p>
          </div>
          <div>
            <p class="intro">
              “The first year of Marvel Action: Avengers comes to a thrilling
              conclusion! The Avengers begin their final attack against A.I.M.
              and the mastermind behind their woes reveals themselves. These
              graphic novels are the perfect starting point for new fans looking
              for more stories of the adventures of Black Panther, Captain
              America, Thor, Captain Marvel, Iron Man, and Black Widow! Collects
              issues #10-12 of the Marvel Action: Avengers series.”
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-11.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.5</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Marvel Action: Avengers 4</p>
          </div>
          <div class="book_author">
            <p class="author_text">Hany Ashraf</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">300$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">action</p>
            <p class="category">rommance</p>
            <p class="category">science fiction</p>
          </div>
          <div>
            <p class="intro">
              (2004) Are you a helper or an achiever? A challenger or a
              peacemaker? Awareness to Action explores the nine distinct, yet
              interconnected personality types of Enneagram theory, which uses a
              nine-pointed figure to illustrate the relationship between an
              individual’s dominant personality and the other types that
              comprise the structure. Mario Sikora and Robert Tallon explain the
              characteristics of each personality and show how a person can
              capitalize on their strengths and weaknesses, charting a specific
              course for personal growth. They discuss practical topics such as
              relationship building, conflict resolution, and personal
              development, information that will not only be of interest to
              individuals seeking a greater understanding of self, but to
              managers and human resource professionals as well.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-12.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.6</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Awareness to Action</p>
          </div>
          <div class="book_author">
            <p class="author_text">Abdo Mrieden</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">400$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">action</p>
            <p class="category">fantasy</p>
            <p class="category">science fiction</p>
          </div>
          <div>
            <p class="intro">
              “Heroes and villains alike prepare for an incoming threat from the
              cosmos! Will someone from Black Panther’s past be friend or foe?
              And what sinister plan is M.O.D.O.K. preparing? These graphic
              novels are the perfect starting point for new fans looking for
              more stories of the adventures of Black Panther, Captain America,
              Thor, Captain Marvel, Iron Man, and Black Widow! Collects issues
              #7-9 of the Marvel Action: Avengers series.”
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-13.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.4</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Marvel Action: Avengers 3</p>
          </div>
          <div class="book_author">
            <p class="author_text">Abdelrahman Helmy</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">250$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">action</p>
            <p class="category">science fiction</p>
            <p class="category">history</p>
          </div>
          <div>
            <p class="intro">
              Are you a helper or an achiever? A challenger or a peacemaker?
              Awareness to Action explores the nine distinct, yet interconnected
              personality types of Enneagram theory, which uses a nine-pointed
              figure to illustrate the relationship between an individual’s
              dominant personality and the other types that comprise the
              structure. Mario Sikora and Robert Tallon explain the
              characteristics of each personality and show how a person can
              capitalize on their strengths and weaknesses, charting a specific
              course for personal growth. They discuss practical topics such as
              relationship building, conflict resolution, and personal
              development, information that will not only be of interest to
              individuals seeking a greater understanding of self, but to
              managers and human resource professionals as well.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-14.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.3</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Awareness To Action</p>
          </div>
          <div class="book_author">
            <p class="author_text">Yousef Elgendy</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">300$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">action</p>
            <p class="category">history</p>
            <p class="category">mystrey</p>
          </div>
          <div>
            <p class="intro">
              (2020) The Light of All That Falls is the spectacular conclusion
              to James Islington’s Licanius trilogy – a modern fantasy
              blockbuster packed with magic, prophecy and adventure. James
              Islington’s bestselling debut, The Shadow of What Was Lost, began
              an epic tale of three heroes who embraced forbidden powers to
              confront a rising evil. The adventure continued in An Echo of
              Things to Come as armies clashed and magic collided. Now the final
              battle – and the fate of the world – is at hand in The Light of
              All That Falls, the enthralling final volume in the Licanius
              trilogy. Praise for the series: ‘Numerous surprises . . . action
              aplenty’ SciFiNow ‘You’ll be left wanting more’ SFX ‘Astoundingly
              intricate world-building’ Daily Mail ‘Action-packed epic fantasy’
              BookBag The Licanius series: The Shadow of What Was Lost An Echo
              of Things to Come The Light of All That Falls
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-15.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.8</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">The light of all that falls</p>
          </div>
          <div class="book_author">
            <p class="author_text">Lama Wael</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">500$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">fantasy</p>
            <p class="category">history</p>
            <p class="category">science fiction</p>
          </div>
          <div>
            <p class="intro">
              The book assembles Fragonard’s fantasy figures alongside his
              original sketches for the first time. It presents scientific
              research into the mysterious series and examines the 18th-century
              Parisian world of new money, unexpected social alliances and
              extravagant fashions from which these unique paintings emerged.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-16.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">2.6</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Fragonard The Fantasy Figures</p>
          </div>
          <div class="book_author">
            <p class="author_text">Mariam Tarek</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">100$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">history</p>
            <p class="category">action</p>
            <p class="category">fantasy</p>
          </div>
          <div>
            <p class="intro">
              (2011) In a world where magic is tightly controlled, the most
              powerful man in history must choose between his kingdom and his
              son – in the first book of the New York Times bestselling
              Lightbringer series, one of the most popular fantasy epics of the
              decade. EVERY LIGHT CASTS A SHADOW. Guile is the Prism, the most
              powerful man in the world. He is high priest and emperor, a man
              whose power, wit, and charm are all that preserves a tenuous
              peace. Yet Prisms never last, and Guile knows exactly how long he
              has left to live. When Guile discovers he has a son, born in a far
              kingdom after the war that put him in power, he must decide how
              much he’s willing to pay to protect a secret that could tear his
              world apart. With over four million copies sold, Brent Weeks is
              one of the fastest-selling fantasy authors of all time. ‘Brent
              Weeks is so good it’s beginning to tick me off’ Peter V. Brett
              ‘Weeks has a style of immediacy and detail that pulls the reader
              relentlessly into the story. He doesn’t allow you to look away’
              Robin Hobb ‘I was mesmerised from start to finish. Unforgettable
              characters, a plot that kept me guessing, non-stop action and the
              kind of in-depth storytelling that makes me admire a writers’
              work’ Terry Brooks ‘Weeks has truly cemented his place among the
              great epic fantasy writers of our time’ British Fantasy Society
              Books by Brent Weeks Night Angel The Way of Shadows Shadow’s Edge
              Beyond the Shadows Perfect Shadow (novella) Lightbringer The Black
              Prism The Blinding Knife The Broken Eye The Blood Mirror The
              Burning White
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-17.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.8</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">The Black Prism</p>
          </div>
          <div class="book_author">
            <p class="author_text">Lama Wael</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">800$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">fantasy</p>
            <p class="category">action</p>
            <p class="category hidden">scince fiction</p>
          </div>
          <div>
            <p class="intro">
              (2018) “This compelling Nigerian-influenced fantasy has a
              wonderfully unique premise and lush, brilliant worldbuilding that
              will consume you until the last page.”—Buzzfeed “…Unforgettable in
              its darkness, inequality, and magic.” —VOYA, Starred Review “…A
              paean to an emerging black legend.”—Kirkus Reviews, Starred Review
              Black Panther meets Nnedi Okorafor’s Akata Witch in Beasts Made of
              Night, the first book in an epic fantasy duology. In the walled
              city of Kos, corrupt mages can magically call forth sin from a
              sinner in the form of sin-beasts—lethal creatures spawned from
              feelings of guilt. Taj is the most talented of the aki, young
              sin-eaters indentured by the mages to slay the sin-beasts. But
              Taj’s livelihood comes at a terrible cost. When he kills a
              sin-beast, a tattoo of the beast appears on his skin while the
              guilt of committing the sin appears on his mind. Most aki are
              driven mad by the process, but Taj is cocky and desperate to
              provide for his family. When Taj is called to eat a sin of a
              member of the royal family, he’s suddenly thrust into the center
              of a dark conspiracy to destroy Kos. Now Taj must fight to save
              the princess that he loves—and his own life. Debut author Tochi
              Onyebuchi delivers an unforgettable series opener that powerfully
              explores the true meaning of justice and guilt. Packed with dark
              magic and thrilling action, Beasts Made of Night is a gritty
              Nigerian-influenced fantasy perfect for fans of Paolo Bacigalupi
              and Nnedi Okorafor.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-18.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.7</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Beasts Made of Night</p>
          </div>
          <div class="book_author">
            <p class="author_text">sofa lotfy</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">500$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">comedy</p>
            <p class="category">action</p>
            <p class="category">fantasy</p>
          </div>
          <div>
            <p class="intro">
              (2021) “Namina Forna Could Be The Toni Morrison Of YA Fantasy.”
              –Refinery 29 “Fans of Children of Blood and Bone, Mulan, and the
              Dora Milaje from Black Panther are going to adore this one.”
              –BuzzFeed “A dark feminist tale spun with blood and gold. Must
              read!” –Dhonielle Clayton, New York Times bestselling author of
              The Belles The most anticipated fantasy of 2021. In this world,
              girls are outcasts by blood and warriors by choice. Get ready for
              battle. Sixteen-year-old Deka lives in fear and anticipation of
              the blood ceremony that will determine whether she will become a
              member of her village. Already different from everyone else
              because of her unnatural intuition, Deka prays for red blood so
              she can finally feel like she belongs. But on the day of the
              ceremony, her blood runs gold, the color of impurity–and Deka
              knows she will face a consequence worse than death. Then a
              mysterious woman comes to her with a choice: stay in the village
              and submit to her fate, or leave to fight for the emperor in an
              army of girls just like her. They are called alaki–near-immortals
              with rare gifts. And they are the only ones who can stop the
              empire’s greatest threat. Knowing the dangers that lie ahead yet
              yearning for acceptance, Deka decides to leave the only life she’s
              ever known. But as she journeys to the capital to train for the
              biggest battle of her life, she will discover that the great
              walled city holds many surprises. Nothing and no one are quite
              what they seem to be–not even Deka herself. The start of a bold
              and immersive fantasy series for fans of Children of Blood and
              Bone and Black Panther.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-19.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.7</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">The Gilded Ones</p>
          </div>
          <div class="book_author">
            <p class="author_text">Abdallah Ayman</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">300$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">none</p>
            <p class="category">none</p>
            <p class="category">history</p>
          </div>
          <div>
            <p class="intro">
              (2012) Neil MacGregor’s A History of the World in 100 Objects
              takes a bold, original approach to human history, exploring past
              civilizations through the objects that defined them. Encompassing
              a grand sweep of human history, A History of the World in 100
              Objects begins with one of the earliest surviving objects made by
              human hands, a chopping tool from the Olduvai gorge in Africa, and
              ends with objects which characterise the world we live in today.
              Seen through MacGregor’s eyes, history is a kaleidoscope –
              shifting, interconnected, constantly surprising, and shaping our
              world today in ways that most of us have never imagined. A stone
              pillar tells us about a great Indian emperor preaching tolerance
              to his people; Spanish pieces of eight tell us about the beginning
              of a global currency; and an early Victorian tea-set speaks to us
              about the impact of empire. An intellectual and visual feast, this
              is one of the most engrossing and unusual history books published
              in years.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-20.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">3.2</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">History of the World in 100 Ob</p>
          </div>
          <div class="book_author">
            <p class="author_text">Abdo Mrieden</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">150$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">none</p>
            <p class="category">history</p>
            <p class="category">action</p>
          </div>
          <div>
            <p class="intro">
              (2018) From the fury of the Punic Wars to the icy waters of
              Dunkirk, relive 5,000 years of world-changing combat with this
              guide to the most famous battles in history, including a foreword
              from TV presenter and historian Tony Robinson. This military
              history book takes you on a journey through the battlefields of
              history, from the ancient world to the American Civil War, World
              War 1, World War 2, the Cold War, and beyond. Maps, paintings, and
              photographs reveal the stories behind more than 90 of the most
              important battles ever to take place, and show how fateful
              decisions led to glorious victories and crushing defeats. From
              medieval battles and great naval battles to the era of high-tech
              air battles, key campaigns are illustrated and analysed in detail
              – the weapons, the soldiers, and the military strategy. Famous
              military leaders are profiled, including Alexander the Great,
              Napoleon, and Rommel, and crucial arms, armour, and equipment are
              explained. Whether at Marathon, Agincourt, Gettysburg, or
              Stalingrad, Battles that Changed History takes you into the thick
              of combat and shows how kingdoms and empires have been won and
              lost on the battlefield.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-21.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">2.9</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Battles that Changed History</p>
          </div>
          <div class="book_author">
            <p class="author_text">Hany Ashraf</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">200$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">none</p>
            <p class="category">history</p>
            <p class="category">science fiction</p>
          </div>
          <div>
            <p class="intro">
              (2019) Journey through the history of the railways A fascinating
              journey through the history of railways, packed with first-hand
              accounts of innovation, triumph, and tragedy.From the earliest
              steam engine to the high-speed bullet trains of today, A Short
              History of the Railway reveals the hidden stories of railway
              history across the world – the inspired engineering; the blood,
              sweat, and tears that went into the construction of the tracks;
              the ground-breaking innovations behind the trains that travelled
              along them; and the triumphs and tragedies of the people who made
              the railway what it is.Chart the history of the Trans-Siberian
              railway, the Orient Express, and Maglev trains and the impact of
              world events on the development of trains and the railway. Explore
              the pioneering railway lines that crossed continents, the key
              trains ofeach era, and the locomotives that changed the world.A
              riveting narrative packed with photographs, diagrams, and maps to
              illustrate and illuminate, this is the biographyof the machines
              that carried us into the modern era. Previously published as The
              Iron Road, A Short History of the Train makes perfect reading for
              train buffs.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-22.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">2.2</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">A Short History of Trains</p>
          </div>
          <div class="book_author">
            <p class="author_text">Yousef Elgendy</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">160$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">drama</p>
            <p class="category">history</p>
            <p class="category">science fiction</p>
          </div>
          <div>
            <p class="intro">
              Based on the true story of a famous trial, this novel is Law and
              1800, as Alexander Hamilton and Aaron Burr investigate the
              shocking murder of a young woman who everyone—and no one—seemed to
              know. At the start of a new century, a shocking murder transfixes
              Manhattan, forcing bitter rivals Alexander Hamilton and Aaron Burr
              to work together to save a man from the gallows. Just before
              Christmas 1799, Elma Sands slips out of her Quaker cousin’s
              boarding house—and doesn’t come home. Has she eloped? Run away? No
              one knows—until her body appears in the Manhattan Well. Her family
              insists they know who killed her. Handbills circulate around the
              city accusing a carpenter named Levi Weeks of seducing and
              murdering Elma. But privately, quietly, Levi’s wealthy brother
              calls in a special favor…. Aaron Burr’s legal practice can’t
              finance both his expensive tastes and his ambition to win the 1800
              New York elections. To defend Levi Weeks is a double a hefty fee
              plus a chance to grab headlines. Alexander Hamilton has his own
              political aspirations; he isn’t going to let Burr monopolize the
              public’s attention. If Burr is defending Levi Weeks, then Hamilton
              will too. As the trial and the election draw near, Burr and
              Hamilton race against time to save a man’s life—and destroy each
              other. Part murder mystery, part thriller, part true crime, The
              Girl From Greenwich Street revisits a dark corner of history—with
              a surprising twist ending that reveals the true story of the woman
              at the center of the tale.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-23.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">3.7</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">The Girl from Greenwich Street</p>
          </div>
          <div class="book_author">
            <p class="author_text">Mariam Tarek</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">460$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">none</p>
            <p class="category">none</p>
            <p class="category">history</p>
          </div>
          <div>
            <p class="intro">
              There are many stories we can spin about previous ages, but which
              accounts get told? And by whom? Is there even such a thing as
              “objective” history? In this “witty, wise, and elegant” (The
              Spectator), book, Richard Cohen reveals how professional
              historians and other equally significant witnesses, such as the
              writers of the Bible, novelists, and political propagandists,
              influence what becomes the accepted record. Cohen argues, for
              example, that some historians are practitioners of “Bad History”
              and twist reality to glorify themselves or their country.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-24.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">1.3</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Making History</p>
          </div>
          <div class="book_author">
            <p class="author_text">Lama Wael</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">200$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">none</p>
            <p class="category">none</p>
            <p class="category">history</p>
          </div>
          <div>
            <p class="intro">
              Inspired by the influential text WHAT IS HISTORY? authored by
              Helen Carr’s great-grandfather, E.H. Carr, and published on the
              60th anniversary of that book, this is a groundbreaking new
              collection addressing the burning issue of how we interpret
              history today. What stories are told, and by whom, who should be
              celebrated, and what rewritten, are questions that have been asked
              recently not just within the history world, but by all of us.
              Featuring a diverse mix of writers, both bestselling names and
              emerging voices, this is the history book we need NOW. WHAT IS
              HISTORY, NOW? covers topics such as the history of racism and
              anti-racism, queer history, the history of faith, the history of
              disability, environmental history, escaping imperial nostalgia,
              hearing women’s voices and ‘rewriting’ the past. The list of
              contributors includes: Justin Bengry, Leila K Blackbird, Emily
              Brand, Gus Casely-Hayford, Sarah Churchwell, Caroline Dodds
              Pennock, Peter Frankopan, Bettany Hughes, Dan Hicks, Onyeka Nubia,
              Islam Issa, Maya Jasanoff, Rana Mitter, Charlotte Riley, Miri
              Rubin, Simon Schama, Alex von Tunzelmann and Jaipreet Virdi.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-25.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">2.5</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">What Is History, Now?</p>
          </div>
          <div class="book_author">
            <p class="author_text">Mariam Tarek</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">300$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">none</p>
            <p class="category">drama</p>
            <p class="category">rommance</p>
          </div>
          <div>
            <p class="intro">
              (2016) Highlighting the fascinating link between a child’s
              neurological development and the way a parent reacts to
              misbehavior, No-Drama Discipline provides an effective,
              compassionate road map for dealing with tantrums, tensions, and
              tears—without causing a scene. Defining the true meaning of the
              “d” word (to instruct, not to shout or reprimand), the authors
              explain how to reach your child, redirect emotions, and turn a
              meltdown into an opportunity for growth. By doing so, the cycle of
              negative behavior (and punishment) is essentially brought to a
              halt, as problem solving becomes a win/win situation. Inside this
              sanity-saving guide you’ll discover • strategies that help parents
              identify their own discipline philosophy—and master the best
              methods to communicate the lessons they are trying to impart •
              facts on child brain development—and what kind of discipline is
              most appropriate and constructive at all ages and stages • the way
              to calmly and lovingly connect with a child—no matter how extreme
              the behavior—while still setting clear and consistent limits •
              tips for navigating your child through a tantrum to achieve
              insight, empathy, and repair • twenty discipline mistakes even the
              best parents make—and how to stay focused on the principles of
              whole-brain parenting and discipline techniques Complete with
              candid stories and playful illustrations that bring the authors’
              suggestions to life, No-Drama Discipline shows you how to work
              with your child’s developing mind, peacefully resolve conflicts,
              and inspire happiness and strengthen resilience in everyone in the
              family.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-26.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">1.2</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">No Drama Discipline</p>
          </div>
          <div class="book_author">
            <p class="author_text">sofa lotfy</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">100$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">none</p>
            <p class="category">none</p>
            <p class="category">drama</p>
          </div>
          <div>
            <p class="intro">
              NEW YORK TIMES BESTSELLER • REESE’S BOOK CLUB PICK • A comedy
              writer thinks she’s sworn off love, until a dreamy pop star flips
              the script on all her assumptions—a “smart, sophisticated, and
              fun” (Oprah Daily) novel from the author of Eligible, Rodham, and
              Prep. Sally Milz is a sketch writer for The Night Owls, a
              late-night live comedy show that airs every Saturday. With a
              couple of heartbreaks under her belt, she’s long abandoned the
              search for love, settling instead for the occasional hook-up,
              career success, and a close relationship with her stepfather to
              round out a satisfying life. But when Sally’s friend and fellow
              writer Danny Horst begins dating Annabel, a glamorous actress who
              guest-hosted the show, he joins the not-so-exclusive group of
              talented but average-looking and even dorky men at the show—and in
              society at large—who’ve gotten romantically involved with
              incredibly beautiful and accomplished women. Sally channels her
              annoyance into a sketch called the Danny Horst Rule, poking fun at
              this phenomenon while underscoring how unlikely it is that the
              reverse would ever happen for a woman. Enter Noah Brewster, a pop
              music sensation with a reputation for dating models, who signed on
              as both host and musical guest for this week’s show. Dazzled by
              his charms, Sally hits it off with Noah instantly, and as they
              collaborate on one sketch after another, she begins to wonder if
              there might actually be sparks flying. But this isn’t a romantic
              comedy—it’s real life. And in real life, someone like him would
              never date someone like her … right? With her keen observations
              and trademark ability to bring complex women to life on the page,
              Curtis Sittenfeld explores the neurosis-inducing and
              heart-fluttering wonder of love, while slyly dissecting the social
              rituals of romance and gender relations in the modern age.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-27.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">2.0</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">
              Drama Free: A Guide to Managing Unhealthy Family Relationshi
            </p>
          </div>
          <div class="book_author">
            <p class="author_text">Abdo Mrieden</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">180$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">none</p>
            <p class="category">comedy</p>
            <p class="category">drama</p>
          </div>
          <div>
            <p class="intro">
              (2019) A special bumper edition of dorkiness featuring Drama Queen
              and Puppy Love from the bestselling DORK DIARIES series! From a
              missing-diary disaster (leading to a mean-girl takeover!) to a
              puppy problem of epic proportions, Nikki Maxwell’s life if never
              dull and always dorky! Get ready to dive into Nikki’s dork-tastic
              life with this fabulous two-in-one bind-up. It’s time to embrace
              your inner dork!
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-28.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">1.7</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Double Dork Diaries 5 Drama Qu</p>
          </div>
          <div class="book_author">
            <p class="author_text">Hany Ashraf</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">80$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">comedy</p>
            <p class="category">drama</p>
            <p class="category">action</p>
          </div>
          <div>
            <p class="intro">
              “Things just got serious! Fortnite-obsessed Tyler is going for
              gold in the local Fortnite tournament. But he’s got a lot of real
              life drama to deal with – crazy best friends, girl trouble and
              prying parents. Plus who’s the mystery rival squad online… and why
              do they seem so familiar? Readers will learn all-new Fortnite
              tips, tricks and secrets along with Tyler, while reading about his
              hilarious adventures in the game and at school. Original
              illustrations and easy-to-read text make this the ideal book for
              Fortnite-obsessed reluctant readers and fans of Diary of a Wimpy
              Kid and Tom Gates. Book three in a series, this independent and
              unofficial chapter book combines an accessible Fortnite play guide
              with the laugh-out-loud story of Tyler’s quest for gaming glory.”
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-29.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">1.9</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Llama Drama</p>
          </div>
          <div class="book_author">
            <p class="author_text">Abdelrahman Helmy</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">190$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">none</p>
            <p class="category">mystrey</p>
            <p class="category">fantasy</p>
          </div>
          <div>
            <p class="intro">
              Practical Magic meets Gone Girl in Ava Morgyn's next dark,
              spellbinding novel about a woman who is more than a witch - she's
              a hunter. Piers Corbin has always had an affinity for poisonous
              things - plants and men. From the pokeweed berries she consumed at
              age five that led to the accidental death of a stranger, to the
              husband whose dark proclivities have become… concerning, poison
              has been at the heart of her story. But when she fakes her own
              death in an attempt to escape her volatile marriage and goes to
              stay with her estranged great aunt in the mountains, she realizes
              her predilection is more than a hunger - it’s a birthright. Piers
              comes from a long line of poison eaters - Bane Witches – women who
              ingest deadly plants and use their magic to rid the world of evil
              men. Piers sets out to earn her place in her family’s gritty but
              distinguished legacy, all while working at her Aunt Myrtle’s cafe
              and perpetuating a flirtation with the local, well-meaning sheriff
              to allay his suspicions on the body count she’s been leaving in
              her wake. But soon she catches the attention of someone else, a
              serial killer operating in the area. And that only means one thing
              - it’s time to feed. In Ava Morgyn’s dark, thrilling novel, The
              Bane Witch, a very little poison can do a world of good.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-30.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.3</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">The Bane Witch</p>
          </div>
          <div class="book_author">
            <p class="author_text">Yousef Elgendy</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">540$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">mystrey</p>
            <p class="category">rommance</p>
            <p class="category">drama</p>
          </div>
          <div>
            <p class="intro">
              A restaurateur lured by pandemic-era incentives moves her family
              to a seemingly idyllic town in Georgia. The email message that
              lands in Billie Hope’s inbox seems like a gift from the universe.
              For $100 she can purchase a spacious Victorian home in Juliana,
              Georgia, a small town eager to boost its economy in the wake of
              the pandemic. She can leave behind her cramped New York City
              rental and some painful memories. Plus she’ll get a business grant
              to open a new restaurant in a charming riverside community laden
              with opportunity. After some phone calls and one hurried visit,
              Billie and her husband and daughter are officially part of the
              "Juliana Initiative." The town is everything promised, and between
              settling into her lavish home and starting a new restaurant,
              Billie is busy enough to dismiss misgivings. Yet those misgivings
              grow. There’s something about Juliana, something off-kilter and
              menacing beneath its famous Southern hospitality. No matter how
              much Billie longed for her family to come here, she’s starting to
              wonder how, and whether, they’ll ever leave.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-31.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">3.8</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Gothictown</p>
          </div>
          <div class="book_author">
            <p class="author_text">Lama Wael</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">320$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">none</p>
            <p class="category">comedy</p>
            <p class="category">mystrey</p>
          </div>
          <div>
            <p class="intro">
              A cozy mystery series about a former nun who searches for answers
              in a small seaside town after her pen pal mysteriously disappears
              1954: When her former novice’s dependable letters stop, Nora Breen
              asks to be released from her vows. Haunted by a line in Frieda’s
              letter, Nora arrives at Gulls Nest, a charming hotel in
              Gore-on-Sea in Kent. A seaside town, a place of fresh air and
              relaxed constraints, is the perfect place for a new start. Nora
              hides her identity and pries into the lives of her fellow
              guests—but when a series of bizarre murders rattles the occupants
              of Gulls Nest it’s time to ask if a dark past can ever really be
              left behind.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-32.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.7</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Murder at Gulls Nest</p>
          </div>
          <div class="book_author">
            <p class="author_text">Abdelrahman Helmy</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">300$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">none</p>
            <p class="category">mystrey</p>
            <p class="category">science fiction</p>
          </div>
          <div>
            <p class="intro">
              Mare of Easttown meets The Outsider in this spine-tingling and
              twisty debut about a series of disappearances in a small,
              fundamentalist town and what one broken family must do to remain
              together as dark forces close in. After losing her young son in an
              accident, Rachel Kennan throws herself into her career as police
              chief of a small Virginia town to avoid focusing on her grief.
              Meanwhile, her husband, Finn, a washed-up writer whose alcoholism
              led to the devastating tragedy that changed everything, struggles
              to redeem himself before his family completely falls apart. Their
              two daughters are the only things keeping Rachel and Finn
              together, but the girls have demons of their own. At the same
              time, a disturbing crime rocks their tightknit, religious
              community, sending Rachel chasing leads in a place that does not
              take kindly to outsiders. When an ominous force in the forest
              starts calling to the children, fear spawns hate among the
              townspeople, placing the Kennan family directly in the line of
              fire. Left with no choice but to rely on each other, Rachel and
              Finn must come together to face threats inside and out. A haunting
              family saga and a disquieting horror debut, Nowhere draws from
              Appalachian folklore to caution us that true terror is what we
              bury in our own hearts.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-33.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">5.0</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Nowhere</p>
          </div>
          <div class="book_author">
            <p class="author_text">sofa lotfy</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">1000$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">mystrey</p>
            <p class="category">science ficiton</p>
            <p class="category">fantasy</p>
          </div>
          <div>
            <p class="intro">
              From New York Times bestselling author of Dark and Shallow Lies
              comes a new southern gothic supernatural thriller about a teen
              girl in a small Ozark town who can hear the bones of the dead. The
              past three years have been tough for Lucifer’s Creek, Arkansas, a
              small town quietly tucked away in the Ozark mountains. More than
              two dozen people have disappeared on the local hiking trails;
              there one moment, gone the next, not a trace left behind, until
              their buried bodies are discovered. 17-year-old Dovie doesn’t
              believe in magic even though she comes from a long line of women
              who can hear the bones of the dead sing, and for the past few
              years the bones have been crooning nonstop, calling out to Dovie
              to dig them up. Some of the old-timers believe that it’s the
              monstrous Ozarks howler snatching people off the Aux Arc Trail.
              Well Dovie doesn’t believe in the howler, and she doesn’t believe
              her best friend Lo when he tells her he is being haunted by dark
              shadows. All she believes in is her talent that guides the local
              sheriff to the bones when they begin their song, then reuniting
              the dead with their families to give them some peace. Lo doesn’t
              know peace, though. The shadows follow him everywhere. He soon
              learns they’re the murdered hikers and they want answers. But the
              truth of their deaths isn’t buried with their bones; it’s hidden
              somewhere deep in the hills. And Lo and Dovie must unearth it
              before anyone else is killed.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-34.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.0</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">When the Bones Sing</p>
          </div>
          <div class="book_author">
            <p class="author_text">Abdallah Ayman</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">470$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">none</p>
            <p class="category">science fiction</p>
            <p class="category">action</p>
          </div>
          <div>
            <p class="intro">
              (2014) Part of the popular Big Ideas series, The Science Book
              explores the history of science, how scientists have sought to
              explain our incredible universe and how amazing scientific
              discoveries have been made. Discover how Galileo worked out his
              scientific theories of motion and inertia, why Copernicus’s ideas
              were contentious and what the discovery of DNA meant. All the big
              scientific ideas and discoveries are brought to life with quirky
              graphics, pithy quotes and step-by-step ‘mind maps’, plus every
              area of science is covered, including astronomy, biology,
              chemistry, geology, maths and physics. You’ll be brought
              up-to-date on scientific ideas from black holes to genetic
              engineering with eye-catching artworks showing how the ideas of
              key scientists have impacted our understanding of the world.
              Whether you are a science student or just have an interest in
              scientific ideas, The Science Book is a perfect way to explore
              this fascinating subject
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-35.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">2.3</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Science Book</p>
          </div>
          <div class="book_author">
            <p class="author_text">Abdo Mrieden</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">280$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">comedy</p>
            <p class="category">rommance</p>
            <p class="category hidden">none</p>
          </div>
          <div>
            <p class="intro">
              From the beloved internet humorist, a debut novel that introduces
              an unforgettable investigator to the drowned streets of L.A. in a
              hugely imaginative and heartfelt blend of noir and cyberpunk. In a
              mostly underwater near-future Los Angeles, aging combat-drone
              veteran Orr Vue now lives a simple and small life, trading
              snippets of what's become the most valuable information. So when
              the cops show up at his door looking for data on a murder he’s not
              even aware has happened, things get interesting for the first time
              in 25 years. At first, Orr is happy to exchange whatever he knows
              about the demise of InfoDrip’s top exec to buy booze and pay rent
              on his memory storage, but that plan goes to hell when Orr’s old
              boyfriend, Auggie Wolf, shows up as the number one suspect. Forced
              to stretch his atrophied spy skills and take his illegal horde of
              drones out of retirement alongside his busted knees, Orr finds
              himself in the crosshairs of the militarized police, a family of
              megarich corporate heirs, a clan of emancipated AIs, and a cult.
              Barely avoiding getting killed with every clue he collects, Orr
              realizes he's uncovered not just a murder, but a conspiracy that
              threatens Auggie’s very existence. Ahh, the things we do for
              love... But in a world where memories can be bought and sold, how
              can you truly know who anyone is—or what you yourself are capable
              of? Fast paced, funny, and shockingly romantic, Two Truths and a
              Lie is Raymond Chandler reinvented for the 22nd century.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-36.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">2.3</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">killing\ asas saasfasf</p>
          </div>
          <div class="book_author">
            <p class="author_text">Abdelrahman Helmy</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">370$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">comedy</p>
            <p class="category">rommance</p>
            <p class="category">science fiction</p>
          </div>
          <div>
            <p class="intro">
              One of the greatest love stories in history gets derailed when a
              struggling poet at Cambridge runs into a time-traveler who agrees
              to help him find his muse—a thoughtful and uplifting romantic
              comedy for fans of About Time and The Midnight Library. Cambridge
              University, 2005: Student Joe Greene scribbles verses in the
              margins of his notebook, dreaming of a future where his words will
              echo through the ages, all while doubting it could ever happen.
              Then, the future quite literally finds him—in the form of Esi.
              She’s part of a time-traveling tour, a trip for people in the
              future to witness history’s greatest moments firsthand. The star
              of this tour? Joe Greene. In Esi’s era, Joe is as renowned as
              Shakespeare. And he’s about to meet Diana, a fellow student and
              aspiring actress, who will become his muse and the subject of his
              famous love poems. But Esi is harboring a secret. She’s not here
              because she idolizes Joe—actually, she thinks his poetry is
              overrated. Something will happen at Cambridge this year that will
              wreck Esi’s life, and she’s hell-bent on changing it. When Esi
              goes rogue from her tour, she bumps into Joe and sends his destiny
              into a tailspin. To save both their futures, Esi becomes Joe’s
              dating coach, helping him win over Diana. But when Joe’s romantic
              endeavors go off-script—and worse, he starts falling for Esi
              instead—they both face a crucial question: Is the future set in
              stone, or can we pen our own fates?
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-37.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">3.7</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Love and Other Paradoxes</p>
          </div>
          <div class="book_author">
            <p class="author_text">Hany Ashraf</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">280$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">science fiction</p>
            <p class="category">mystrey</p>
            <p class="category">fantasy</p>
          </div>
          <div>
            <p class="intro">
              Venture into The Midnight Vault, an anthology featuring 29
              compelling tales of science fiction and horror. Written by an
              extraordinary cast of breakthrough talent, this collection
              explores eerie and speculative realms, challenging the boundaries
              of the known. From otherworldly horrors to dystopian visions, each
              story delves into the depths of fear and fascination, promising to
              captivate and thrill. Uncover dark corners of the universe and
              embrace the supernatural as you turn each page. Dare to explore
              The Midnight Vault-where the fantastic and the frightful come
              alive.. Stories included: "A Six-Part Death" - William Pauley III
              "The HALCYONIUM" - Clancy Steadwell "Hector" - Annie Hendrix "The
              Lonely Planter" - Bryan Pirolli "Separate Memories" - Michele
              Bardsley "All The World's Static" - Jason Thompson "An Elegant
              Solution" - Bridget Riley "The Creative Lives Of The
              Lichtensteins" - EJ Trask "Watched Pots" - Will Boucher "Off
              Switch" - Honeygloom "The Last Stop" - Shane Bzdok "The Sun And
              The Moon" - CB Mason "Sunbonnet Sue" - Lisa Kuznak "Blink Twice If
              You Can Hear Me" - Sean Thomas McDonnell "Vote Control" - Andy
              Futuro "Soma's Reflection" - Edith Bow "Room 13" - Miguel S. "The
              Thing In The Box" - A.P. Murphy "Amanita" - Sean Archer "The Swing
              of the Pendulum" - Adam Rockwell "In Capable Hands" - Shaina Read
              "August's Fog" - Nyanka J. "The Zeno Paradox" - J. Curtis "The
              Joke's On You" - Stephen Duffy "Mail-Order Bride" - K.C. Knouse
              "The Switchboard" - Hanna Delaney "What You're Made Of" - Jon
              Toews "Conception" - Bob Graham "Good Neighbors" - Liz Zimmers
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-38.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">3.9</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">The Midnight Vault</p>
          </div>
          <div class="book_author">
            <p class="author_text">Yousef Elgendy</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">240$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">none</p>
            <p class="category">fantasy</p>
            <p class="category">action</p>
          </div>
          <div>
            <p class="intro">
              NEW YORK TIMES BESTSELLER • REESE’S BOOK CLUB PICK • A comedy
              writer thinks she’s sworn off love, until a dreamy pop star flips
              the script on all her assumptions—a “smart, sophisticated, and
              fun” (Oprah Daily) novel from the author of Eligible, Rodham, and
              Prep. Sally Milz is a sketch writer for The Night Owls, a
              late-night live comedy show that airs every Saturday. With a
              couple of heartbreaks under her belt, she’s long abandoned the
              search for love, settling instead for the occasional hook-up,
              career success, and a close relationship with her stepfather to
              round out a satisfying life. But when Sally’s friend and fellow
              writer Danny Horst begins dating Annabel, a glamorous actress who
              guest-hosted the show, he joins the not-so-exclusive group of
              talented but average-looking and even dorky men at the show—and in
              society at large—who’ve gotten romantically involved with
              incredibly beautiful and accomplished women. Sally channels her
              annoyance into a sketch called the Danny Horst Rule, poking fun at
              this phenomenon while underscoring how unlikely it is that the
              reverse would ever happen for a woman. Enter Noah Brewster, a pop
              music sensation with a reputation for dating models, who signed on
              as both host and musical guest for this week’s show. Dazzled by
              his charms, Sally hits it off with Noah instantly, and as they
              collaborate on one sketch after another, she begins to wonder if
              there might actually be sparks flying. But this isn’t a romantic
              comedy—it’s real life. And in real life, someone like him would
              never date someone like her … right? With her keen observations
              and trademark ability to bring complex women to life on the page,
              Curtis Sittenfeld explores the neurosis-inducing and
              heart-fluttering wonder of love, while slyly dissecting the social
              rituals of romance and gender relations in the modern age.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-39.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.5</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">Harry Potter and the Sorcerer's Stone</p>
          </div>
          <div class="book_author">
            <p class="author_text">Abdallah Ayman</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">870$</p>
          </div>
        </div>
      </div>
      <div class="book">
        <div class="more_details">
          <div class="categorys">
            <p class="category">science fiction</p>
            <p class="category">fantasy</p>
            <p class="category">rommance</p>
          </div>
          <div>
            <p class="intro">
              The first novel in the worldwide bestselling series by Suzanne
              Collins! Winning means fame and fortune. Losing means certain
              death. The Hunger Games have begun. . . . In the ruins of a place
              once known as North America lies the nation of Panem, a shining
              Capitol surrounded by twelve outlying districts. The Capitol is
              harsh and cruel and keeps the districts in line by forcing them
              all to send one boy and one girl between the ages of twelve and
              eighteen to participate in the annual Hunger Games, a fight to the
              death on live TV. Sixteen-year-old Katniss Everdeen regards it as
              a death sentence when she steps forward to take her sister's place
              in the Games. But Katniss has been close to dead before-and
              survival, for her, is second nature. Without really meaning to,
              she becomes a contender. But if she is to win, she will have to
              start making choices that weigh survival against humanity and life
              against love.
            </p>
          </div>
        </div>
        <div class="book_img">
          <img src="books_images/book-40.jpg" class="image" />
          <div class="rate">
            <div class="rate_value">
              <p class="rating">4.4</p>
            </div>
            <div class="rate_icon">
              <img src="icons/star-icon-png-2.png" class="image" />
            </div>
          </div>
        </div>
        <div class="details">
          <div class="book_title">
            <p class="title_text">The Hunger Games</p>
          </div>
          <div class="book_author">
            <p class="author_text">sofa lotfy</p>
          </div>
          <div class="line1"></div>
          <div class="book_price">
            <p class="price_text">760$</p>
          </div>
        </div>
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
