<!DOCTYPE html>
<html lang="en">
<head>
    <title>MyClub</title>
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
<?php
        if(isset($_POST['login-btn'])){
            $connect = mysqli_connect('localhost','root','leo10fcb4ever','usersdb');
            $username = $_POST['username'];
            $Password = $_POST['password'];

            $req="select * from signup";
            $res = mysqli_query($connect,$req);
            if(mysqli_num_rows($res) > 0 ){
                $req1 = "select * from signup WHERE username='$username'";
                $res1 = mysqli_query($connect,$req1);
                if(mysqli_num_rows($res1)==1){
                    $req2 = mysqli_fetch_assoc($res1);
                    $pass = $req2['password'];
                    if($Password === $pass){
                        session_start();
                        $url = "profile.php?username=" . $username;
                        header('Location: ' . $url);
                    }else{
                        echo "<script>alert('Password invalid !');</script>";
                    }
                }else{
                    echo "<script>alert('no account found under this Username');</script>";}
                }else{
                    echo "<script>alert('no account found ,sign up and create one');</script>";
                }}
?>
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
                            <li><a href="homepage.php">Home</a></li>
                            <li><a href="#about">About us</a></li>
                            <li><a href="#news">News</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->

                <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                    <div class="buy-tickets">
                        <a class="btn gradient-bg" href="#" onclick="document.getElementById('log').style.display='block'">Login</a>
                        

                    </div><!-- .buy-tickets -->
                    <div class="login" id="log">
                    <form class="modal-content animate" method="post">
                    <div class="log-imgcontainer">
      <img src="images\login.png" alt="Avatar" class="avatar">
    </div>
    <div class="log-container">
      <label for="uname"><b>Username</b></label><br>
      <input type="text" placeholder="Enter Username" name="username" required><br><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required><br><br>
        
      <input id="log-btn-span" type="submit" name="login-btn" value="Login"><br><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label><br>
      <button type="button" onclick="document.getElementById('log').style.display='none'" class="cancelbtn">Cancel</button><br><br>
      <span class="psw">Forgot <a href="#">password?</a></span><br>
      <span class="create"><a href="Sign-Up.php">Create an account.</a></span>
    </div>
  </form>
</div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div class="swiper-container hero-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide" data-date="2020/05/01" style="background: url('images/header-bg.jpg') no-repeat">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center">
                                <div class="entry-header">
                                    <div class="countdown flex align-items-center">
                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dday"></span>
                                            <label>Days</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dhour"></span>
                                            <label>Hours</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dmin"></span>
                                            <label>Minutes</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dsec"></span>
                                            <label>Seconds</label>
                                        </div><!-- .countdown-holder -->
                                    </div><!-- .countdown -->

                                    <h2 class="entry-title">We have the best events</h2>
                                </div><!--- .entry-header -->

                                <div class="entry-footer">
                                    <a class="btn gradient-bg" href="#">Order here</a>
                                </div><!-- .entry-footer" -->
                            </div><!-- .col -->
                        </div><!-- .container -->
                    </div><!-- .hero-content -->
                </div><!-- .swiper-slide -->
            </div><!-- .swiper-wrapper -->

            <div class="swiper-slide" data-date="2020/07/01" style="background: url('images/shesolves.png') no-repeat">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center"  id="home-page-countdown">
                                <div class="entry-header">
                                    <div class="countdown flex align-items-center">
                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dday"></span>
                                            <label>Days</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dhour"></span>
                                            <label>Hours</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dmin"></span>
                                            <label>Minutes</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dsec"></span>
                                            <label>Seconds</label>
                                        </div><!-- .countdown-holder -->
                                    </div><!-- .countdown -->

                                    <h2 class="entry-title">Buy your ticket now !</h2>
                                </div><!--- .entry-header -->

                                <div class="entry-footer">
                                    <a class="btn gradient-bg" href="#">Order here</a>
                                </div><!-- .entry-footer" -->
                            </div><!-- .col -->
                        </div><!-- .container -->
                    </div><!-- .hero-content -->
                </div><!-- .swiper-slide -->
            </div><!-- .swiper-wrapper -->
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Add Arrows -->
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>
    </div><!-- .swiper-container -->
</header><!-- .site-header -->

<section id="about">
<div class="homepage-info-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-5">
                <figure>
                    <img src="images/ellogo.png" alt="logo">
                </figure>
            </div>

            <div class="col-12 col-md-8 col-lg-7">
                <header class="entry-header">
                    <h2 class="entry-title">What is MyClub and why choose our services?</h2>
                </header>

                <div class="entry-content">
                    <p>Our website will help you gain informations about all Insat's clubs and assoaciations inside
                    the university , their work , achievements , future events and more . Register for free and Read about us
                    in order to find the suitable INSAT club for your journey</p>
                </div>

                <footer class="entry-footer">
                    <a href="Sign-Up.php" class="btn dark">Register Now</a>
                </footer>
            </div>
        </div>
    </div>
</div>
</section>


<section id="news">
<div class="homepage-next-events">
    <div class="container">
        <div class="row">
            <div class="next-events-section-header">
                <h2 class="entry-title">Our next events</h2>
                <p>The year 2020/2021 will be lit , full of exciting events and competitions in and out of our INSAT <br></br><h1>stay tuned for more to come!</h1></p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="https://www.linkedin.com/company/dataoverflow/"><img src="images/up3.png" alt="1"></a>

                        <div class="event-rating">8.9</div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Data Overflow</h3>

                        <div class="posted-date"><span>sep 27, 2020</span></div>
                    </header>

                    <div class="entry-content">
                        <p>Data Overflow is a competitive data science rounds owned bY IEEE INSAT CS CHAPTER and ACM INSAT</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="https://insat.acm.org/wintercup"><img src="images/up2.png" alt="1"></a>

                        <div class="event-rating">7.9</div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Winter Cup</h3>

                        <div class="posted-date"><span>Jan 27, 2021</span></div>
                    </header>

                    <div class="entry-content">
                        <p>Winter Cup is an annual competition in programming organized by ACM INSAT</p>
                    </div>

                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="http://www.tunirobots.com/"><img src="images/tuniro.jpg" alt="1"></a>

                        <div class="event-rating">9.9</div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Tunirobots</h3>

                        <div class="posted-date"><span>Avr 27, 2021</span></div>
                    </header>

                    <div class="entry-content">
                        <p>Tunirobots is a national event in robotics held @ INSAT</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</section>

<div class="newsletter-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h2 class="entry-title">Subscribe to our newsletter to get the latest trends & news</h2>
                </header>

                <div class="newsletter-form">
                    <form class="flex flex-wrap justify-content-center align-items-center" action="newsletter.php" method="post">
                        <div class="col-md-12 col-lg-3">
                            <input type="text" name="name" placeholder="Name">
                        </div>

                        <div class="col-md-12 col-lg-6">
                            <input type="email" name="email" placeholder="Your e-mail">
                        </div>

                        <div class="col-md-12 col-lg-3">
                            <input class="btn gradient-bg"  name="signup-btn" type="submit" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="contact">
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="footer-logo">
                    <a href="#"><img src="images/ellogo.png" alt="logo" class="ellogo"></a>
                </figure>

                <nav class="footer-navigation">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                            <li><a href="homepage.php">Home</a></li>
                            <li><a href="#about">About us</a></li>
                            <li><a href="#news">News</a></li>
                            <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<p style="color:grey">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                <div class="footer-social">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#contact"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#contact"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#contact"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#contact"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#contact"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</section>

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
<script src="js/smooth-scroll.js"></script>
        <script>
            var scroll = new SmoothScroll('a[href*="#"]');
        </script>
        <script src="js/wow.min.js"></script>
        <script>
        new WOW().init();
        </script>
</body>
</html>