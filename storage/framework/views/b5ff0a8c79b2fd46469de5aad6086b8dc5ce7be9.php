<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Department of Public Administration</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/all.min.css')); ?>">
    <!-- Fancybox CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/jquery.fancybox.min.css')); ?>">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/gijgo.min.css')); ?>">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owl.theme.default.min.css')); ?>">

    <!-- Google Font CSS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
       integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
       crossorigin="anonymous">
    </script>
    
  </head>
  <body>


    <!-- <div id="overlay">
        <img src="/assets/img/spinner.svg" class="overlay-img" alt="Loading" /><br/>
    </div> -->
    

    <section id="header-navbar">
      <!--== Top Navbar Area Start ==-->
      <section class="navbar-main-top">
         <div class="container">
          <div class="row">
            <div class="col-md-12">
              <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="/assets/img/logo.png" alt="logo"></a>
              <div class="brand-title">UNIVERSITY OF DHAKA</div>
            <div class="brand-subtitle">Department of Public Administration</div>
            </div>
          </div>
         </div>
      </section>
      <!--== Top Navbar Area End ==-->

      <!--== Main Navbar Area Start ==-->
      <section class="navbar-main-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <nav class="navbar navbar-expand-lg navbar-light">
            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php echo e(Request::path() == '/' ? 'active' : ''); ?>">
                      <a class="nav-link" href="<?php echo e(url('/')); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php echo e(Request::path() == 'about' ? 'active' : ''); ?>">
                      <a class="nav-link" href="<?php echo e(url('/about')); ?>">About</a>
                    </li>
                    <li class="nav-item dropdown <?php echo e(Request::path() == 'academic' ? 'active' : ''); ?>">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Academic
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(url('/academic')); ?>">Academic</a>
                        <a class="dropdown-item" href="<?php echo e(url('/event')); ?>">Event</a>
                        <a class="dropdown-item" href="<?php echo e(url('/notice')); ?>">Notice</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown <?php echo e(Request::path() == 'admission' ? 'active' : ''); ?>">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admission
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(url('/underGraduation')); ?>">Under Graduation</a>
                        <a class="dropdown-item" href="<?php echo e(url('/graduation')); ?>">Graduation</a>
                        <a class="dropdown-item" href="<?php echo e(url('/postGraduation')); ?>">Post-Graduation</a>
                        <a class="dropdown-item" href="<?php echo e(url('/mPhill')); ?>">M.Phill</a>
                        <a class="dropdown-item" href="<?php echo e(url('/phd')); ?>">PHD</a>
                      </div>
                    </li>
                    <li class="nav-item <?php echo e(Request::path() == 'alumni' ? 'active' : ''); ?>">
                      <a class="nav-link" href="<?php echo e(url('/alumni')); ?>">Alumni</a>
                    </li>
                    <li class="nav-item <?php echo e(Request::path() == 'publication' ? 'active' : ''); ?>">
                      <a class="nav-link" href="<?php echo e(url('/publication')); ?>">Publication</a>
                    </li>
                    <li class="nav-item <?php echo e(Request::path() == 'contact' ? 'active' : ''); ?>">
                      <a class="nav-link" href="<?php echo e(url('/contact')); ?>">Contact</a>
                    </li>



                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>

                  </ul>
                  <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                  </form> -->
                </div>
              </nav>

            </div>
          </div>
        </div>
      </section>
      <!--== Main Navbar Area End ==-->
    </section>


    <!-- Content Area Start -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- Content Area End -->


  	<!--== Main Footer Area Start ==-->
    <section class="section" id="footer-top">
      <div class="container">
        <div class="row">
          <!--== Single Footer Area ==-->
          <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
            <div class="single-footer-box">
              <h4 class="single-footer-title">Featured Links</h4>

              <ul class="footer-links">
                <li><a href="#">DU Website</a></li>
                <li><a href="#">Carrier</a></li>
                <li><a href="#">Library</a></li>
                <li><a href="#">Journal</a></li>
                <li><a href="#">Archive</a></li>
              </ul>
            </div>
          </div>
          <!--== Single Footer Area ==-->

          <!--== Single Footer Area ==-->
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="single-footer-box">
              <h4 class="single-footer-title">Social Media</h4>

              <ul class="social-links">
                <li><a href="#"><span><i class="fab fa-facebook-square"></i></span></a></li>
                <li><a href="#"><span><i class="fab fa-twitter-square"></i></span></a></li>
                <li><a href="#"><span><i class="fab fa-google-plus-square"></i></span></a></li>
                <li><a href="#"><span><i class="fab fa-linkedin"></i></span></a></li>
              </ul>
            </div>
          </div>
          <!--== Single Footer Area ==-->

          <!--== Single Footer Area ==-->
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="single-footer-box">
              <h4 class="single-footer-title">Contact Us</h4>

              <ul class="footer-address">
                <li>
                  <div class="address-icon"><div><i class="fas fa-home"></i></div></div>
                  <div class="address-details">Public Admin Buliding Location Name, Dhaka.</div>
                </li>
                <li>
                  <div class="address-icon"><div><i class="fas fa-phone-volume"></i></div></div>
                  <div class="address-details">+88-8615147 / 4010, 4011</div>
                </li>
                <li>
                  <div class="address-icon"><div><i class="fas fa-envelope-open"></i></div></div>
                  <div class="address-details">public.admin@du.ac.bd register.admin@du.ac.bd</div>
                </li>
              </ul>
            </div>
          </div>
          <!--== Single Footer Area ==-->

          <!--== Single Footer Area ==-->
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="single-footer-box">
              <div class="footer-google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.3752700752816!2d90.39059531452385!3d23.733993684597433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8e90a449e4f%3A0xb7092a9c25197fa4!2z4Kai4Ka-4KaV4Ka-IOCmrOCmv-CmtuCnjeCmrOCmrOCmv-CmpuCnjeCmr-CmvuCmsuCnnw!5e0!3m2!1sbn!2sbd!4v1546320246510" width="100%" height="" frameborder="0" style="border:0"></iframe>
              </div>
            </div>
          </div>
          <!--== Single Footer Area ==-->
        </div>
      </div>

      <!--== Footer Copywrite Area Start ==-->
      <div class="container" id="footer-bottom">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Webmail</a></li>
          </ul>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="copywrite">
              &copy; 2018 all copyright reserved.
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="poweredby">
              Developed by <a href="#">BIZIITECH</a>
            </div>
          </div>
        </div>
      </div>
      <!--== Footer Copywrite Area End ==-->

      <!-- Subscribe Section -->
      <!-- <div class="container subscribe">
        <div class="subscribe-box">
          <p class="subscribe-title">To get all update give your email address</p>

          <form class="subscribe-form">
            <div class="form-row align-items-center">

                <div class="input-group mb-2">
                  
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter Your Email Address....">
                  <div class="input-group-prepend">
                    <button type="submit" class="btn input-group-text"><i class="fas fa-location-arrow"></i></button>
                  </div>

                </div>

            </div>
          </form>

        </div>
      </div> -->
      <!-- Subscribe Section -->
    </section>
    <!--== Main Footer Area End ==-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <!-- Font Awesome JS -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/all.min.js')); ?>"></script>
    <!-- Fancybox JS -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.fancybox.min.js')); ?>"></script>
    <!-- Date Picker JS -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/gijgo.min.js')); ?>"></script>
    <!-- Owl Carousel JS -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
    <!-- Ckeditor JS -->
    <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

    <!-- Custom JS -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

    <script>
        CKEDITOR.replace( 'content' );
    </script>

    <script>
      jQuery(window).load(function(){
        jQuery('#overlay').fadeOut();
      });
    </script>

  </body>
</html>