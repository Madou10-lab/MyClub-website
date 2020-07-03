<!DOCTYPE html>
<html lang="en">
<head>
    <title>Events</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.ico" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="events-list-page">
<header class="site-header">
    <div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-2 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title">
                            <a href="#"><img src="images/ellogo.png" alt="logo" class="ellogo"></a>
                        </div><!-- .site-title -->
                    </div><!-- .site-branding -->
                </div><!-- .col -->

                <div class="col-2 col-lg-7 order-3 order-lg-2">
                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul>
                            <li><a href="#"><?php echo $_GET['username']; ?></a></li>
                            <li><img src="images/login.png"></li>
                        </ul>

                    </nav><!-- .site-navigation -->
                </div><!-- .col -->

                <!--<div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                    <div class="buy-tickets">
                        <a class="btn gradient-bg" href="#">Buy Tickets</a>
                    </div><-- .buy-tickets --
                </div><-- .col - -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div class="page-header events-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">Events.</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->
<form class="events-search" action="acm.php">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <h1><span>Clubs :</span></h1>
            </div>
            <div class="col-12 col-md-3">
            <a href='acm.php?username=<?php echo $_GET['username']; ?>'>ACM INSAT</a>
            <img src="images/acm/0.jpg" class="ellogo">
            </div>
        </div>
    </div>
</form>

<div class="container">
    <div class="row events-list">
        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <a href="#"><img src="images/ev1.png" alt=""></a>
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title"><a href="#">Erkiz HipHop</a></h2>

                        <div class="event-location"><a href="#">676 INSAT Centre Urbain Nord BP، Tunis Cedex 1080</a></div>

                        <div class="event-date">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>
                    </div>


                </header>

            </div>
        </div>

        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <a href="#"><img src="images/ev2.png" alt=""></a>
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title"><a href="#">SheSolves</a></h2>

                        <div class="event-location"><a href="#">676 INSAT Centre Urbain Nord BP، Tunis Cedex 1080</a></div>

                        <div class="event-date">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>
                    </div>


                </header>

                <div class="entry-content">
                    <p>SheSolves is a cross university programming competition initiated in 2019 by INSAT ACM STUDENT CHAPTER and IEEE WIE INSAT Student Affinity Group in the purpose of introducing female university and high school students to competitive programming and encouraging them to participate in bigger regional and nation wide contests and improve their problem solving skills.</p>
                </div>


            </div>
        </div>

        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <a href="#"><img src="images/ev3.png" alt=""></a>
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title"><a href="#">TuniRobots19</a></h2>

                        <div class="event-location"><a href="#">676 INSAT Centre Urbain Nord BP، Tunis Cedex 1080</a></div>

                        <div class="event-date">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>
                    </div>

                </header>


            </div>
        </div>

        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <a href="#"><img src="images/ev4.png" alt=""></a>
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title"><a href="#">SecuriDay19</a></h2>

                        <div class="event-location"><a href="#">676 INSAT Centre Urbain Nord BP، Tunis Cedex 1080</a></div>

                        <div class="event-date">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>
                    </div>


                </header>

                <div class="entry-content">
                    <p>Securiday is the national cyber security day organized by SECURINETS</p>
                </div>

            </div>
        </div>

        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <a href="#"><img src="images/ev5.png" alt=""></a>
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title"><a href="#">Ektebli</a></h2>

                        <div class="event-location"><a href="#">676 INSAT Centre Urbain Nord BP، Tunis Cedex 1080</a></div>

                        <div class="event-date">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>
                    </div>


                </header>

                <div class="entry-content">
                    
                </div>


            </div>
        </div>

        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <a href="#"><img src="images/ev6.png" alt=""></a>
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title"><a href="#">Unplugged</a></h2>

                        <div class="event-location"><a href="#">676 INSAT Centre Urbain Nord BP، Tunis Cedex 1080</a></div>

                        <div class="event-date">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>
                    </div>


                </header>

            </div>
        </div>

        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <a href="#"><img src="images/event-1.jpg" alt=""></a>
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title"><a href="#">U2 Concert in Detroit</a></h2>

                        <div class="event-location"><a href="#">Ford Field  2000 Brush St, Detroit, MI 48226, EE. UU.</a></div>

                        <div class="event-date">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>
                    </div>


                </header>

                <footer class="entry-footer">
                    <a href="#">Buy Tikets</a>
                </footer>
            </div>
        </div>

        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <a href="#"><img src="images/event-2.jpg" alt=""></a>
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title"><a href="#">Summer Festival in Detroit</a></h2>

                        <div class="event-location"><a href="#">Ford Field  2000 Brush St, Detroit, MI 48226, EE. UU.</a></div>

                        <div class="event-date">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>
                    </div>


                </header>

                <div class="entry-content">
                    <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risust lacus at mauris sagittis variusut.</p>
                </div>

                <footer class="entry-footer">
                    <a href="#">Buy Tikets</a>
                </footer>
            </div>
        </div>

        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <a href="#"><img src="images/event-3.jpg" alt=""></a>
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title"><a href="#">Costume Festival Detroit</a></h2>

                        <div class="event-location"><a href="#">Ford Field  2000 Brush St, Detroit, MI 48226, EE. UU.</a></div>

                        <div class="event-date">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>
                    </div>


                </header>

                <footer class="entry-footer">
                    <a href="#">Buy Tikets</a>
                </footer>
            </div>
        </div>

        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <a href="#"><img src="images/event-4.jpg" alt=""></a>
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title"><a href="#">Summer Festival in Detroit</a></h2>

                        <div class="event-location"><a href="#">Ford Field  2000 Brush St, Detroit, MI 48226, EE. UU.</a></div>

                        <div class="event-date">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>
                    </div>


                </header>

                <div class="entry-content">
                    <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risust lacus at mauris sagittis variusut.</p>
                </div>

                <footer class="entry-footer">
                    <a href="#">Buy Tikets</a>
                </footer>
            </div>
        </div>

        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <a href="#"><img src="images/event-5.jpg" alt=""></a>
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title"><a href="#">Hotel California in Concert</a></h2>

                        <div class="event-location"><a href="#">Ford Field  2000 Brush St, Detroit, MI 48226, EE. UU.</a></div>

                        <div class="event-date">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>
                    </div>


                </header>

                <div class="entry-content">
                    <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risust lacus at mauris sagittis variusut.</p>
                </div>

                <footer class="entry-footer">
                    <a href="#">Buy Tikets</a>
                </footer>
            </div>
        </div>

        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <a href="#"><img src="images/event-6.jpg" alt=""></a>
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title"><a href="#">DJ Festival in town</a></h2>

                        <div class="event-location"><a href="#">Ford Field  2000 Brush St, Detroit, MI 48226, EE. UU.</a></div>

                        <div class="event-date">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>
                    </div>


                </header>
                <footer class="entry-footer">
                    <a href="#">Buy Tikets</a>
                </footer>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="load-more-btn">
                <a class="btn gradient-bg" href="#">Load More</a>
            </div>
        </div>
    </div>
</div>

<div class="upcoming-events-outer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="upcoming-events">
                    <div class="upcoming-events-header">
                        <h4>Upcoming Events</h4>
                    </div>

                    <div class="upcoming-events-list">
                        <div class="upcoming-event-wrap flex flex-wrap justify-content-between align-items-center">
                            <figure class="events-thumbnail">
                                <a href="#"><img src="images/up1.png" alt=""></a>
                            </figure>

                            <div class="entry-meta">
                                <div class="event-date">
                                    25<span>February</span>
                                </div>
                            </div>

                            <header class="entry-header">
                                <h3 class="entry-title"><a href="#">SheSolves20</a></h3>

                                <div class="event-date-time">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>

                                <div class="event-speaker">Speackers: Maria Williams, Luis Smith, James Doe</div>
                            </header>

                            <footer class="entry-footer">
                                <a href="https://insat.acm.org/shesolves">Register</a>
                            </footer>
                        </div>

                        <div class="upcoming-event-wrap flex flex-wrap justify-content-between align-items-center">
                            <figure class="events-thumbnail">
                                <a href="#"><img src="images/up2.png" alt=""></a>
                            </figure>

                            <div class="entry-meta">
                                <div class="event-date">
                                    27<span>February</span>
                                </div>
                            </div>

                            <header class="entry-header">
                                <h3 class="entry-title"><a href="#">Winter Cup 2020</a></h3>

                                <div class="event-date-time">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>

                                <div class="event-speaker">Speackers: Maria Williams, Luis Smith, James Doe</div>
                            </header>

                            <footer class="entry-footer">
                                <a href="#">Register</a>
                            </footer>
                        </div>

                        <div class="upcoming-event-wrap flex flex-wrap justify-content-between align-items-center">
                            <figure class="events-thumbnail">
                                <a href="#"><img src="images/up3.png" alt=""></a>
                            </figure>

                            <div class="entry-meta">
                                <div class="event-date">
                                    27<span>February</span>
                                </div>
                            </div>

                            <header class="entry-header">
                                <h3 class="entry-title"><a href="#">DataOverflow</a></h3>

                                <div class="event-date-time">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>

                                <div class="event-speaker">Speackers: Maria Williams, Luis Smith, James Doe</div>
                            </header>

                            <footer class="entry-footer">
                                <a href="#">Register</a>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="newsletter-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h2 class="entry-title">Subscribe to our newsletter to get the latest trends & news</h2>
                    <p>Join our database NOW!</p>
                </header>

                <div class="newsletter-form">
                    <form class="flex flex-wrap justify-content-center align-items-center">
                        <div class="col-md-12 col-lg-3">
                            <input type="text" placeholder="Name">
                        </div>

                        <div class="col-md-12 col-lg-6">
                            <input type="email" placeholder="Your e-mail">
                        </div>

                        <div class="col-md-12 col-lg-3">
                            <input class="btn gradient-bg" type="submit" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="footer-logo">
                    <a href="#"><img src="images/ellogo.png" alt="logo" class="ellogo"></a>
                </figure>

                <nav class="footer-navigation">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>



                <div class="footer-social">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="back-to-top flex justify-content-center align-items-center">
    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
</div>

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='js/circle-progress.min.js'></script>
<script type='text/javascript' src='js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>

</body>
</html>