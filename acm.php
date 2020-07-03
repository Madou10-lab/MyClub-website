<!DOCTYPE html>
<html lang="en">
<head>
    <title>ACM</title>
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
    <script src="js/custom.js"></script>
</head>
<body>
<header class="site-header">
    <div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-2 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title">
                            <a href="#"><img src="images/ellogo.png" class="ellogo" alt="logo"></a>
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

                <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">

                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div class="page-header acm-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->
    

<div class="homepage-info-section" id="about-acm">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-5">
                <figure>
                    <img src="images/acmacm.png" alt="logo" id="acmacm">
                </figure>
            </div>

            <div class="col-12 col-md-8 col-lg-7">
                <header class="entry-header">
                    <h2 class="entry-title">About ACM INSAT Student Chapter</h2>
                </header>

                <div class="entry-content">
                    <p>ACM, the Association for Computing Machinery is the world's largest scientific and educational computing society. It is an international organization for academic and scholarly interests in computer science, claiming nearly 100,000 student and professional members as of 2019. And it is organized into over 171 local chapters and 37 Special Interest Groups (SIGs), through which it conducts most of its activities.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div  class="acm-team">
    <div class="container"  >
        <div class="row">
            <div class="col-12">
                <header class="acm-section-header">
                    <h2 class="entry-title">The Team</h2>
                </header>
                <div class="featured-events-wrap flex flex-wrap justify-content-between">
                    <div class="event-content-wrap positioning-event-1">
                        <figure>
                            <a href="#"><img src="images/acm/iyadh.png" alt="1"></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Iyadh Chaker</h3>

                            <div class="posted-date">August 25</div>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-2">
                        <figure>
                            <a href="#"><img src="images/acm/meriem.jpg" alt=""></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Meriem</h3>

                            <div class="posted-date">November 28</div>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-3">
                        <figure>
                            <a href="#"><img src="images/acm/salma.jpg" alt=""></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Salma Halloumi</h3>

                            <div class="posted-date">August 28</div>
                        </header>
                    </div>



                    <div class="event-content-wrap positioning-event-5 half">
                        <figure>
                            <a href="#"><img src="images/acm/" alt=""></a>
                        </figure>
                    </div>



                    <div class="event-content-wrap positioning-event-7">
                        <figure>
                            <a href="#"><img src="images/acm/jihene.jpg" alt=""></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Jihene</h3>

                            <div class="posted-date">August 28</div>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-8">
                        <figure>
                            <a href="#"><img src="images/acm/sahar.jpg" alt="1"></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Sahar</h3>

                            <div class="posted-date">August 25</div>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-9">
                        <figure>
                            <a href="#"><img src="images/acm/ons.jpg" alt=""></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Ons</h3>

                            <div class="posted-date">August 28</div>
                        </header>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="homepage-regional-events">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="regional-events-heading entry-header flex flex-wrap justify-content-between align-items-center">
                    <h2 class="entry-title">Previous events</h2>

                   <!--  <div class="select-location">
                        <select>
                            <option>New York</option>
                            <option>California</option>
                            <option>South Carolina</option>
                        </select>
                    </div> -->
                </header>

                <div class="swiper-container homepage-regional-events-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure>
                                <img src="images/pev1acm.png" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href='Shesolves.php?username=<?php echo $_GET['username']; ?>'>+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">U2 Concert </h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/pev2acm.png" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Broadway Hit </h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->


                        <div class="swiper-slide">
                            <figure>
                                <img src="images/pev4acm.png" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Art Gallery</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/pev5acm.png" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Music Concert</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/pev6acm.png" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">EDM Festival</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/pev3acm.png" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Gallery Exibition</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                    <!--
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                    </div>

                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                    </div> -->
                </div>
                <!--
                <div class="events-partners">
                    <header class="entry-header">
                        <h2 class="entry-title">Partners</h2>
                    </header>

                    <div class="events-partners-logos flex flex-wrap justify-content-between align-items-center">
                        <div class="event-partner-logo">
                            <a href="#"><img src="images/pixar.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/the-pirate.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/himalayas.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/sa.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/south-porth.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/himalayas.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/sa.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/south-porth.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/pixar.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="images/the-pirate.png" alt=""></a>
                        </div>
                    </div>
                </div>-->

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
                    <a href="#"><img src="images/logo.png" alt="logo"></a>
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

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

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