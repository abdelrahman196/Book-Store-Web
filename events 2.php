<!DOCTYPE html>

<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Events 2.css" rel="stylesheet" >
    <link href="https://cdn.prod.website-files.com/65e8fb628c240d731351cd61/css/storyline-312089.webflow.7e60f716a.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect">
        <link rel="stylesheet" href="header/file1.css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>BookStore</title>
</head>

<body>
<script src="header/main 21.js"></script>
<?php
      session_start();
      print '<p class="php cart_ad">' . $_SESSION["CART_A"] . '</P>';
?>
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
                <button class="sub"type="submit">
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

    <main class="main-wrapper">
        <header class="section_events-hero">
            <div class="padding-global" >
            <div class="container-small">
            <div class="header30_content">
                <div class="padding-section-large">
                    <div class="text-align-center">
                        <div class="margin-bottom margin-small">
                            <h1>Events</h1>
                        </div><p style="color: white;">Explore a world of literary wonder at our upcoming events in the heart of our bookstore. Join us for captivating readings, engaging author discussions, and vibrant book swaps - all designed to ignite your passion for literature.</p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="events-hero_background-image-wrapper">
                    <div class="events-hero_image-overlay">
                    </div>
                    <img src="https://media.istockphoto.com/id/873507500/photo/image-of-open-antique-book-on-wooden-table-with-glitter-overlay.jpg?s=612x612&w=0&k=20&c=clB-tJl5j44IqVLlCELHVP6G-kJjeNt_nNmQi48aEKo%3D" class="events-hero_background-image" loading="eager" sizes="100vw"srcset="https://media.istockphoto.com/id/873507500/photo/image-of-open-antique-book-on-wooden-table-with-glitter-overlay.jpg?s=612x612&w=0&k=20&c=clB-tJl5j44IqVLlCELHVP6G-kJjeNt_nNmQi48aEKo%3D 500w, https://media.istockphoto.com/id/873507500/photo/image-of-open-antique-book-on-wooden-table-with-glitter-overlay.jpg?s=612x612&w=0&k=20&c=clB-tJl5j44IqVLlCELHVP6G-kJjeNt_nNmQi48aEKo%3D 800w, https://media.istockphoto.com/id/873507500/photo/image-of-open-antique-book-on-wooden-table-with-glitter-overlay.jpg?s=612x612&w=0&k=20&c=clB-tJl5j44IqVLlCELHVP6G-kJjeNt_nNmQi48aEKo%3D 1080w, https://media.istockphoto.com/id/873507500/photo/image-of-open-antique-book-on-wooden-table-with-glitter-overlay.jpg?s=612x612&w=0&k=20&c=clB-tJl5j44IqVLlCELHVP6G-kJjeNt_nNmQi48aEKo%3D 1600w,https://media.istockphoto.com/id/873507500/photo/image-of-open-antique-book-on-wooden-table-with-glitter-overlay.jpg?s=612x612&w=0&k=20&c=clB-tJl5j44IqVLlCELHVP6G-kJjeNt_nNmQi48aEKo%3D2000w, https://media.istockphoto.com/id/873507500/photo/image-of-open-antique-book-on-wooden-table-with-glitter-overlay.jpg?s=612x612&w=0&k=20&c=clB-tJl5j44IqVLlCELHVP6G-kJjeNt_nNmQi48aEKo%3D" alt="" >
                </div>
        </header>

        <section class="section_event4">
            <div class="padding-global">
                <div class="container-large">
                    <div class="padding-bottom padding-xxlarge">
                        <div class="margin-bottom margin-xxlarge">
                            <div class="text-align-center">
                                <h4 style="color:royalblue">Upcoming Events</h4>
                            </div>
                        </div>
                        <div class="event4_component">
                            <div class="event4_list-wrapper w-dyn-list">
                                <div class="event4_list w-dyn-items">


                            <div class="event4_item w-dyn-item">
                                        <div class="event4_image-wrapper">
                                            <img src="https://cdn.prod.website-files.com/65ea408aa74b2e5d65d52a44/67e2c77825087dcaa3da4cf4_Author%20Signing%20Graphics%20-%20IGFBWebsite%20(2).jpg" class="event4_image" loading="lazy" width="100" height="100" alt="">
                                        </div>
                                        <div class="event4_item-content">
                                            <div class="event4_item-content-left">
                                                <div class="event4_item-content-top">
                                                    <div class="event4_date-wrapper">
                                                        <div class="text-size-small event-date">April 29, 2025</div>
                                                        <div class="div-block-6">
                                                            <div class="text-size-small">6:00 pm</div>
                                                            <div class="text-size-small"> - </div>
                                                            <div class="text-size-small">7:00 pm</div>
                                                        </div>
                                                    </div>
                                                    <div class="event4_title">
                                                        <img src="https://cdn.prod.website-files.com/65ea408aa74b2e5d65d52a44/660f690fd7f9a3894000a22a_Icons.svg" loading="lazy" alt="">
                                                        <div class="heading-style-h5-2">Author Talk and Signing with Renee Rosen </div>
                                                    </div>
                                                </div>
                                                <div class="w-richtext">
                                                    <p>Join us for a fabulous evening with Renée Rosen as we celebrate the release of Let's Call Her Barbie, a dazzling new novel about ambition and reinvention. Don your best pink attire and get ready for an evening of books, conversation, and a little extra sparkle!</p><p>‍</p><p>‍</p><p><strong>About the Book: </strong></p><p>‍</p><p>When Ruth Handler walks into the boardroom of the toy company she co-founded and pitches her idea for a doll unlike any other, <em>she</em> knows what she’s setting in motion. It might just take the world a moment to catch up.</p><p>‍</p><p>In 1956, the only dolls on the market for little girls let them pretend to be mothers. Ruth’s vision for a doll shaped like a grown woman and outfitted in an enviable wardrobe will let them dream they can be anything.</p><p>‍</p><p>As Ruth assembles her team of creative rebels—head engineer Jack Ryan who hides his deepest secrets behind his genius and designers Charlotte Johnson and Stevie Klein, whose hopes and dreams rest on the success of Barbie’s fashion—she knows they’re working against a ticking clock to get this wild idea off the ground.</p><p>‍</p><p>In the decades to come—through soaring heights and devastating personal lows, public scandals and private tensions— each of them will have to decide how tightly to hold on to their creation. Because Barbie has never been just a doll—she’s a legacy.</p><p>‍</p><p><strong>THE <em>USA TODAY </em>BESTSELLER<em> ∙ </em>She was only eleven-and-a-half inches tall, but she would change the world. Barbie is born in this bold novel by <em>USA Today</em> bestselling author Renée Rosen.<br><br>As featured in <em>The New York Post</em> ∙ RuPaul's Book Club ∙ Book Riot ∙ The Nerd Daily ∙ Chicago Review of Books ∙ and more!<br><br>“A fresh and fun take on Barbie lore…clever and satisfying.”—Shelby Van Pelt, #1 <em>New York Times</em> bestselling author of <em>Remarkably Bright Creatures</em></strong></p><p>‍</p><p>‍</p><p><strong>About the author: </strong></p><p>‍</p><p>Renee Rosen is a <em>USA Today </em>bestselling author. Her novels include <em>Fifth Avenue Glamour Girl, The Social Graces, Park Avenue Summer, Windy City Blues, White Collar Girl, What the Lady Wants </em>and <em>Dollface </em>as well as the young adult novel, <em>Every Crooked Pot. </em></p><p>‍</p><p>She is a native of Akron, Ohio, and a graduate of American University in Washington, D.C. She now lives in Chicago and is at work on a new novel. </p>
                                                </div>
                                            </div>
                                            <div class="event_item-cta">
                                                <a href="https://www.eventbrite.com/e/1269412158939?aff=oddtdtcreator" class="button-event is-cta w-button" target="_blank" >Learn More</a>
                                            </div>
                                        </div>
                                 </div>


                            <div class="event4_item w-dyn-item">
                                        <div class="event4_image-wrapper">
                                            <img src="https://cdn.prod.website-files.com/65ea408aa74b2e5d65d52a44/67e69e6df15d964221fd9abd_book%20clubs%20(IG%20Post)%20(1080%20x%201350%20px)%20(8).jpg" class="event4_image" loading="lazy" width="100" height="100" alt="" >
                                        </div>
                                    <div class="event4_item-content">
                                        <div class="event4_item-content-left">
                                            <div class="event4_item-content-top">
                                                <div class="event4_date-wrapper">
                                                    <div class="text-size-small event-date">May 4, 2025</div>
                                                    <div class="div-block-6">
                                                        <div class="text-size-small">10:00 am</div>
                                                        <div class="text-size-small"> - </div>
                                                        <div class="text-size-small">11:00 am</div>
                                                    </div>
                                                </div>
                                                <div class="event4_title">
                                                    <img src="https://cdn.prod.website-files.com/65ea408aa74b2e5d65d52a44/660f69b82b757b243fa07134_Icons.svg" loading="lazy" alt="">
                                                    <div class="heading-style-h5-2">Lit Fic Book Club Meeting </div>
                                                </div>
                                            </div>
                                            <div class="w-richtext">
                                                <p>Join us for a discussion of Private Rites by Julia Armfield. </p><p>‍</p><p>About the book:</p><p>‍</p><p>It’s been raining for a long time now, so long that the land has reshaped itself and old rituals and religions are creeping back into practice. Sisters Isla, Irene, and Agnes have not spoken in some time when their father, an architect as cruel as he was revered, dies. His death offers an opportunity for the sisters to come together in a new way. In the grand glass house they grew up in, their father’s most famous creation, the sisters sort through the secrets and memories he left behind, until their fragile bond is shattered by a revelation in his will.</p><p>‍</p><p>The sisters are more estranged than ever, and their lives spin out of control: Irene’s relationship is straining at the seams, Isla’s ex-wife keeps calling, and cynical Agnes is falling in love for the first time. But something even more sinister might be unfolding, something related to their mother’s long-ago disappearance and the strangers who have always seemed unusually interested in the sisters’ lives. Soon, it becomes clear that the sisters have been chosen for a very particular purpose, one with shattering implications for their family and their imperiled world.</p><p>‍</p><p>From the BELOVED, AWARD-WINNING author of Our Wives Under the Sea, a speculative reimagining of King Lear, centering three sisters navigating queer love and loss in a drowning world</p><p>‍</p><p>“One of my FAVORITE NOVELS of the past few years.” —Jeff VanderMeer, NEW YORK TIMES BESTSELLING author of Annihilation</p><p>‍</p>
                                            </div>
                                        </div>
                                        <div class="event_item-cta">
                                            <a href="https://www.eventbrite.com/e/1302992769449?aff=oddtdtcreator" class="button-event is-cta w-button" target="_blank" >Learn More</a>
                                        </div>
                                    </div>
                            </div>


                            <div class="event4_item w-dyn-item">
                                <div class="event4_image-wrapper">
                                    <img src="https://cdn.prod.website-files.com/65ea408aa74b2e5d65d52a44/67e6bc29adf424adccd921fb_book%20clubs%20(IG%20Post)%20(1080%20x%201350%20px)%20(7).jpg" class="event4_image" loading="lazy" width="100" height="100" alt="" >
                                </div>
                                <div class="event4_item-content">
                                    <div class="event4_item-content-left">
                                        <div class="event4_item-content-top">
                                            <div class="event4_date-wrapper">
                                                <div class="text-size-small event-date">May 13, 2025</div>
                                                <div class="div-block-6">
                                                    <div class="text-size-small">6:00 pm</div>
                                                    <div class="text-size-small"> - </div>
                                                    <div class="text-size-small">7:00 pm</div>
                                                </div>
                                            </div>
                                            <div class="event4_title">
                                                <img src="https://cdn.prod.website-files.com/65ea408aa74b2e5d65d52a44/660f69b82b757b243fa07134_Icons.svg" loading="lazy" alt="">
                                                <div class="heading-style-h5-2">No Plot Just Vibes Book Club Meeting </div>
                                            </div>
                                        </div>
                                        <div class="w-richtext">
                                            <p>Join us for a discussion of A Long Way To A Small, Angry Planet by Becky Chambers. </p><p>‍</p><p>About the book:</p><p>‍</p><p>National Bestseller!</p><p>‍</p><p>The acclaimed modern science fiction masterpiece, Hugo Award winner for Best Series!</p><p>‍</p><p>Follow a motley crew on an exciting journey through space—and one adventurous young explorer who discovers the meaning of family in the far reaches of the universe—in this light-hearted debut space opera from a rising sci-fi star.</p><p>‍</p><p>Rosemary Harper doesn’t expect much when she joins the crew of the aging Wayfarer. While the patched-up ship has seen better days, it offers her a bed, a chance to explore the far-off corners of the galaxy, and most importantly, some distance from her past. An introspective young woman who learned early to keep to herself, she’s never met anyone remotely like the ship’s diverse crew, including Sissix, the exotic reptilian pilot, chatty engineers Kizzy and Jenks who keep the ship running, and Ashby, their noble captain.</p><p>‍</p><p>Life aboard the Wayfarer is chaotic and crazy—exactly what Rosemary wants. It’s also about to get extremely dangerous when the crew is offered the job of a lifetime. Tunneling wormholes through space to a distant planet is definitely lucrative and will keep them comfortable for years. But risking her life wasn’t part of the plan. In the far reaches of deep space, the tiny Wayfarer crew will confront a host of unexpected mishaps and thrilling adventures that force them to depend on each other. To survive, Rosemary’s got to learn how to rely on this assortment of oddballs—an experience that teaches her about love and trust, and that having a family isn’t necessarily the worst thing in the universe.</p><p>‍</p>
                                        </div>
                                    </div>
                                    <div class="event_item-cta">
                                        <a href="https://www.eventbrite.com/e/1302997563789?aff=oddtdtcreator" class="button-event is-cta w-button" target="_blank" >Learn More</a>
                                    </div>
                                </div>
                            </div>


                            <div class="event4_item w-dyn-item">
                                <div class="event4_image-wrapper">
                                    <img src="https://cdn.prod.website-files.com/65ea408aa74b2e5d65d52a44/67e6b92daff7b24a0ce619a6_book%20clubs%20(IG%20Post)%20(1080%20x%201350%20px)%20(6).jpg" class="event4_image" loading="lazy" width="100" height="100" alt="" >
                                </div>
                                <div class="event4_item-content">
                                    <div class="event4_item-content-left">
                                        <div class="event4_item-content-top">
                                            <div class="event4_date-wrapper">
                                                <div class="text-size-small event-date">May 14, 2025</div>
                                                <div class="div-block-6">
                                                    <div class="text-size-small">6:00 pm</div>
                                                    <div class="text-size-small"> - </div>
                                                    <div class="text-size-small">7:00 pm</div>
                                                </div>
                                            </div>
                                            <div class="event4_title">
                                                <img src="https://cdn.prod.website-files.com/65ea408aa74b2e5d65d52a44/660f69b82b757b243fa07134_Icons.svg" loading="lazy" alt="">
                                                <div class="heading-style-h5-2">Romance Book Club Meeting </div>
                                            </div>
                                        </div>
                                        <div class="w-richtext">
                                            <p>‍</p><p>Join us for a discussion of Say You'll Remember Me by Abby Jimenez. </p><p>‍</p><p>About the book:</p><p>‍</p><p><strong>From the #1 <em>New York Times </em>bestselling author of Just for the Summer comes a playful yet deeply emotional romance where one date is all it takes for two people to know they're perfect for each other . . . until one of them moves 2,000 miles away the next day.</strong><br><br>‍</p><p>There's no such thing as a perfect guy, but Xavier Rush comes disastrously close. A gorgeous veterinarian giving Greek god vibes—all while cuddling a tiny kitten? Immediate yes. That is until Xavier opens his mouth and proves that even sculpted gods can say the absolute wrong thing. Like, really wrong. Of course, there’s nothing Samantha loves more than proving an asshole wrong . . . unless, of course, he can admit he made a mistake.<br><br>‍</p><p>But after one incredible and seemingly endless date, Samantha is forced to admit the truth, that her family is in crisis and any kind of relationship would be impossible. Samantha begs Xavier to forget her. To remember their night together as a perfect moment, as crushing as that may be. Only no amount of distance or time is enough to forget what's between them. And the only thing better than one single perfect memory is to make a life—and even a love—worth remembering.</p><p>‍</p>
                                        </div>
                                    </div>
                                    <div class="event_item-cta">
                                        <a href="https://www.eventbrite.com/e/1302994163619?aff=oddtdtcreator" class="button-event is-cta w-button" target="_blank" >Learn More</a>
                                    </div>
                                </div>
                            </div>


                            <div class="event4_item w-dyn-item">
                                <div class="event4_image-wrapper">
                                    <img src="https://cdn.prod.website-files.com/65ea408aa74b2e5d65d52a44/67e6bf36ff59670b3d228e25_book%20clubs%20(IG%20Post)%20(1080%20x%201350%20px)%20(9).jpg" class="event4_image" loading="lazy" width="100" height="100" alt="" >
                                </div>
                                <div class="event4_item-content">
                                    <div class="event4_item-content-left">
                                        <div class="event4_item-content-top">
                                            <div class="event4_date-wrapper">
                                                <div class="text-size-small event-date">May 15, 2025</div>
                                                <div class="div-block-6">
                                                    <div class="text-size-small">6:00 pm</div>
                                                    <div class="text-size-small"> - </div>
                                                    <div class="text-size-small">7:00 pm</div>
                                                </div>
                                            </div>
                                            <div class="event4_title">
                                                <img src="https://cdn.prod.website-files.com/65ea408aa74b2e5d65d52a44/660f69b82b757b243fa07134_Icons.svg" loading="lazy" alt="">
                                                <div class="heading-style-h5-2">Mystery Thriller Book Club Meeting </div>
                                            </div>
                                        </div>
                                        <div class="w-richtext">
                                            <p>Join us for a discussion of Victorian Psycho by Virginia Feito. </p><p>‍</p><p>About the book:</p><p>‍</p><p>Virginia Feito’s Mrs. March was hailed as “a brilliant debut . . . [by] a writer who keeps pace with the grandees she invokes” (Sarah Ditum, Guardian)—from Daphne Du Maurier and Shirley Jackson to Patricia Highsmith. Now, Feito returns with her “silver-polish sentences and her eerie psychological acumen” (Constance Grady, Vox) to unleash an entirely new antihero on us all.</p><p>‍</p><p>Grim Wolds, England: Winifred Notty arrives at Ensor House prepared to play the perfect governess—she’ll dutifully tutor her charges, Drusilla and Andrew, tell them bedtime stories, and only joke about eating children. But long, listless days spent within the estate’s dreary confines come with an intimate knowledge of the perversions and pathetic preoccupations of the Pounds family—Mr. Pounds can’t keep his eyes off Winifred’s chest, and Mrs. Pounds takes a sickly pleasure in punishing Winifred for her husband’s wandering gaze. Compounded with her disdain for the entitled Pounds children, Winifred finds herself struggling at every turn to stifle the violent compulsions of her past. French tutoring and needlework are one way to pass the time, as is admiring the ugly portraits in the gallery . . . and creeping across the moonlit lawns. . . .</p><p>‍</p><p>Patience. Winifred must have patience, for Christmas is coming, and she has very special gifts planned for the dear souls of Ensor House. Brimming with sardonic wit and culminating in a shocking conclusion, Victorian Psycho plunges readers into the chilling mind of an iconic new literary psychopath.</p><p>‍</p>
                                        </div>
                                    </div>
                                    <div class="event_item-cta">
                                        <a href="https://www.eventbrite.com/e/1302987884839?aff=oddtdtcreator" class="button-event is-cta w-button" target="_blank" >Learn More</a>
                                    </div>
                                </div>
                            </div>


                            <div class="event4_item w-dyn-item">
                                <div class="event4_image-wrapper">
                                    <img src="https://cdn.prod.website-files.com/65ea408aa74b2e5d65d52a44/67e6c35e5cc0aa76b74940d2_book%20clubs%20(IG%20Post)%20(1080%20x%201350%20px)%20(10).jpg" class="event4_image" loading="lazy" width="100" height="100" alt="" >
                                </div>
                                    <div class="event4_item-content">
                                        <div class="event4_item-content-left">
                                            <div class="event4_item-content-top">
                                                <div class="event4_date-wrapper">
                                                <div class="text-size-small event-date">May 18, 2025</div>
                                                <div class="div-block-6">
                                                    <div class="text-size-small">4:00 pm</div>
                                                    <div class="text-size-small"> - </div>
                                                    <div class="text-size-small">5:00 pm</div>
                                                </div>
                                            </div>
                                            <div class="event4_title">
                                                <img src="https://cdn.prod.website-files.com/65ea408aa74b2e5d65d52a44/660f69b82b757b243fa07134_Icons.svg" loading="lazy" alt="">
                                                <div class="heading-style-h5-2">Sci Fi Fantasy Book Club Meeting </div>
                                            </div>
                                        </div>
                                        <div class="w-richtext">
                                            <p>Join us for a discussion of The Murderbot Diaries Vol 1 by Martha Wells.</p><p>‍</p><p> About the book: Coming to Apple TV+! </p><p>‍</p><p>The first two novellas in the New York Times bestselling Murderbot series, collected in paperback for the first time! </p><p>‍</p><p>"As a heartless killing machine, I was a complete failure." </p><p>‍</p><p>First, read the story that started the Murderbot phenomenon in All Systems Red! </p><p>‍</p><p>On a distant planet, a team of scientists are conducting surface tests, shadowed by their Company-supplied ‘droid — a self-aware SecUnit that has hacked its own governor module, and refers to itself (though never out loud) as “Murderbot.” Scornful of humans, all it really wants is to be left alone long enough to figure out who it is (and to watch its favorite show in its downtime.) </p><p>‍</p><p>But when a neighboring mission goes dark, it’s up to the scientists and Murderbot to get to the truth. Then, In Artificial Condition Murderbot teams up with a Research Transport vessel named ART (you don’t want to know what the “A” stands for), and together, they infiltrate the mining facility where Murderbot went rogue to try to understand its past. </p><p>‍</p><p>What it discovers will forever change the way it thinks…</p><p>‍</p>
                                        </div>
                                    </div>
                                    <div class="event_item-cta">
                                        <a href="https://www.eventbrite.com/e/1303003682089?aff=oddtdtcreator" class="button-event is-cta w-button" target="_blank" >Learn More</a>
                                    </div>
                                </div>
                            </div>


                            <div class="event4_item w-dyn-item">
                                    <div class="event4_image-wrapper">
                                        <img src="https://cdn.prod.website-files.com/65ea408aa74b2e5d65d52a44/67e6c87756985253cc980346_book%20clubs%20(IG%20Post)%20(1080%20x%201350%20px)%20(11).jpg" class="event4_image" loading="lazy" width="100" height="100" alt="" >
                                    </div>
                                    <div class="event4_item-content">
                                        <div class="event4_item-content-left">
                                            <div class="event4_item-content-top">
                                                <div class="event4_date-wrapper">
                                                    <div class="text-size-small event-date">May 19, 2025</div>
                                                    <div class="div-block-6">
                                                        <div class="text-size-small">6:00 pm</div>
                                                        <div class="text-size-small"> - </div>
                                                        <div class="text-size-small">7:00 pm</div>
                                                    </div>
                                                </div>
                                                <div class="event4_title">
                                                    <img src="https://cdn.prod.website-files.com/65ea408aa74b2e5d65d52a44/660f69b82b757b243fa07134_Icons.svg" loading="lazy" alt="">
                                                    <div class="heading-style-h5-2">The Classics Book Club Meeting </div>
                                                </div>
                                            </div>
                                            <div class="w-richtext">
                                                <p>Join us for a discussion of A Sport and A Pastime by James Salter.</p><p>‍</p><p> About the book: </p><p>‍</p><p>"As nearly perfect as any American fiction I know," is how Reynolds Price (The New York Times) described this classic that has been a favorite of readers, both here and in Europe, for almost forty years. Set in provincial France in the 1960s, James Salter's A Sport and a Pastime is the intensely carnal story—part shocking reality, part feverish dream —of a love affair between a footloose Yale dropout and a young French girl. There is the seen and the unseen—and pages that burn with a rare intensity.</p><p>‍</p><p>‍</p>
                                         </div>
                                    </div>
                                    <div class="event_item-cta">
                                        <a href="https://www.eventbrite.com/e/1303283890199?aff=oddtdtcreator" class="button-event is-cta w-button" target="_blank" >Learn More</a>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>


                <div class="event4_heading-wrapper">
                    <img src="https://cdn.prod.website-files.com/65e8fb628c240d731351cd61/6615f877cdcce0a7a8ea5607_Group%201.png" class="image-4" loading="lazy" sizes="100vw" srcset="https://cdn.prod.website-files.com/65e8fb628c240d731351cd61/6615f877cdcce0a7a8ea5607_Group%201-p-500.png 500w, https://cdn.prod.website-files.com/65e8fb628c240d731351cd61/6615f877cdcce0a7a8ea5607_Group%201-p-800.png 800w, https://cdn.prod.website-files.com/65e8fb628c240d731351cd61/6615f877cdcce0a7a8ea5607_Group%201-p-1080.png 1080w, https://cdn.prod.website-files.com/65e8fb628c240d731351cd61/6615f877cdcce0a7a8ea5607_Group%201.png 1440w" alt="" >
                </div>


        </section>

    </main>  
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