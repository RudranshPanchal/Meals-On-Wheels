<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo $__env->yieldContent('title'); ?>
    </title>

    <!-- meta character set -->
    <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Blue</title>		
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>
  </head>
<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <div id="preloader">
      <div class="loder-box">
        <div class="battery"></div>
      </div>
</div>

<!-- Start nav -->
<header class="site-navbar" role="banner">

  <div class="container">
    <div class="row align-items-center">
    
    <div class="col-11 col-xl-2">
      <h1 class="mb-0 site-logo"><a style="color: aliceblue" href="<?php echo e(route('main')); ?>" class="text-white mb-0">Meals-On-Wheels</a></h1>
    </div>
    <div class="col-12 col-md-10 d-none d-xl-block">
      <nav class="site-navigation position-relative text-right" role="navigation">

      <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
        <li class=""><a href="<?php echo e(route('main')); ?>"><span>Home</span></a></li>
        
        <li><a href="<?php echo e(route('about')); ?>"><span>About Us</span></a></li>
        <li><a href="<?php echo e(route('contact')); ?>"><span>Contact Us</span></a></li>
        <li><a href="<?php echo e(route('register')); ?>"><span>Register</span></a></li>
        <li><a href="<?php echo e(route('login')); ?>"><span>Login</span></a></li>
      </ul>
      </nav>
    </div>


    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

    </div>

    </div>
  </div>
  
  </header>

<!-- END nav -->

<!-- Content -->

    <?php echo $__env->yieldContent('content'); ?>

<!-- End Content -->

<footer id="footer">
  <div class="container">
    <div class="row text-center">
      <div class="footer-content">
        <div class="wow animated fadeInDown">
          <p>Meals-On-Wheels</p>
        </div>
        <form action="#" method="post" class="subscribe-form wow animated fadeInUp">
          <div class="input-field">
            <input type="email" class="subscribe form-control" placeholder="Enter Your Email...">
            <button type="submit" class="submit-icon">
              <i class="fa fa-paper-plane fa-lg"></i>
            </button>
          </div>
        </form>
        <div class="footer-social">
          <ul>
            <li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
            <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
            <li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-skype fa-3x"></i></a></li>
            <li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-dribbble fa-3x"></i></a></li>
            <li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="https://www.youtube.com/channel/UC4yzoGuKkCL_8FzI-B-x83A"><i class="fa fa-youtube fa-3x"></i></a></li>
          </ul>
        </div>
        
        <p>Meals-On-Wheels &copy; Copyright 2016. Design and Developed By<a href="SAGI G3"> SAGI Designs</a> </p>
      </div>
    </div>
  </div>
</footer>

<!-- Essential jQuery Plugins
================================================== -->
<!-- Main jQuery -->
    <script src="js/jquery-1.11.1.min.js"></script>
<!-- Twitter Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
<!-- Single Page Nav -->
    <script src="js/jquery.singlePageNav.min.js"></script>
<!-- jquery.fancybox.pack -->
    <script src="js/jquery.fancybox.pack.js"></script>
<!-- Google Map API -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- jquery easing -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Fullscreen slider -->
    <script src="js/jquery.slitslider.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
<!-- onscroll animation -->
    <script src="js/wow.min.js"></script>
<!-- Custom Functions -->
    <script src="js/main.js"></script>
  </body>
</html>


                
<?php /**PATH C:\wamp64\www\mealsbootstrap\resources\views/layouts/app.blade.php ENDPATH**/ ?>