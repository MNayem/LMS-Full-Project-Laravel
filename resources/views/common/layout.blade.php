<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>P2C- Plan2Career</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicons -->
  <link href="assets/img/p2c new.png" rel="icon" sizes="192x192">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!--<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">-->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!--<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">-->
  

    <!--====== Slick css ======-->
    <!--<link rel="stylesheet" href="css/slick.css">
    
     <link rel="stylesheet" href="css/main.css">-->

    <!--====== Animate css ======-->
    <!--<link rel="stylesheet" href="css/animate.css">-->
    
    <!--====== Nice Select css ======-->
    <!--<link rel="stylesheet" href="css/nice-select.css">-->
    
    <!--====== Nice Number css ======-->
    <!--<link rel="stylesheet" href="css/jquery.nice-number.min.css">-->

    <!--====== Magnific Popup css ======-->
    <!--<link rel="stylesheet" href="css/magnific-popup.css">-->

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <!--<link rel="stylesheet" href="css/default.css">-->
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
     <script>
        /*addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }*/
    </script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400i,700i" rel="stylesheet">

    <!--//webfonts-->
  

  <!-- Template Main CSS File -->
  <!--<link href="assets/css/style.css" rel="stylesheet">-->
  
  <style>
    .dropdown-item.active, .dropdown-item:active {background-color: white;}
  </style>

</head>

<body>
    
    <header class="bg-white sticky-top">
        <style>
            .nav-link{font-size: 1.3rem;font-weight: bold;}
            .nav-link:hover{color: #03A84E !important;}
            .dropdown-item:hover{color: #03A84E !important;}
            .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .show>.nav-link {color: #03A84E !important;}
            .dropdown-item.active, .dropdown-item:active {color: #03A84E !important;}
        </style>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="/">
                      <img src="assets/img/p2c new.png" alt="Logo" class="img-fluid" width="85" height="">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                      <li class="nav-item"><a class="nav-link {{'/'==request()->path()?'active':''}}" aria-current="page" href="/">Home</a></li>

                       <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Grade
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item {{'hsc'==request()->path() ? 'active' : ''}}" href="/hsc">HSC</a></li>
                          <li><a class="dropdown-item {{'addmission'==request()->path() ? 'active' : ''}}" href="/addmission">Addmission</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Subject
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Math</a></li>
                          <li><a class="dropdown-item {{'english'==request()->path() ? 'active' : ''}}" href="/english">English</a></li>
                          <li><a class="dropdown-item" href="#">Analytical Ability</a></li>
                          <li><a class="dropdown-item" href="#">Coding</a></li>
                        </ul>
                      </li>
                      <!--<li class="nav-item"><a class="nav-link {{'freelancing'==request()->path() ? 'active' : ''}}" href="/freelancing">Freelancing</a></li>-->
                      <li class="nav-item"><a class="nav-link {{'freelancing'==request()->path() ? 'active' : ''}}" href="/freelancingRegistration">Freelancing</a></li>
                      <li class="nav-item"><a class="nav-link {{'login'==request()->path() ? 'active' : ''}}" href="/login">Login</a></li>
                      <!--<li class="nav-item"><a class="nav-link {{'register'==request()->path() ? 'active' : ''}}" href="/register">Register</a></li>-->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Register
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="/trainerRegistration">Accademic Student</a></li>
                          <li><a class="dropdown-item" href="/trainerRegistration">Carrer Student</a></li>
                          <li><a class="dropdown-item" href="/trainerRegistration">Trainer</a></li>
                        </ul>
                      </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/carts">
                              <button class="btn btn-danger">
                              <span class="mt-1">Cart: </span>
                              <span class="badge badge-warning" id="totalItems">
                                 {{ App\Models\Cart::totalItems() }}
                              </span>
                              </button>
                            </a>
                        </li>

                    </ul>
                  </div>
                </div>
            </nav>
        </div>
    </header>    

  <!-- ======= Header ======= -->
  
  
  <!--<header id="header" class="sticky-top">-->
  <!--  <div class="container-fluid d-flex align-items-center">-->
  <!--    <h1 class="logo me-auto"><a href="/"><img src="assets/img/p2c new.png" alt="Logo" class="img-fluid" width="85" height=""></a></h1>-->
  <!--    <nav id="navbar" class="navbar order-last order-lg-0">-->
  <!--      <ul>-->
  <!--        <li><a style="font-size:1.1rem" class="{{'/'==request()->path()?'active':''}}" href="/">Home</a></li>-->
          
  <!--        <li class="nav-item dropdown">-->
  <!--          <a style="font-size:1.1rem" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
  <!--          Grade-->
  <!--          </a>-->
  <!--          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
  <!--            <li><a style="font-size:1.1rem" class="dropdown-item" href="#">HSC</a></li>-->
  <!--            <li><a style="font-size:1.1rem" class="dropdown-item" href="#">Addmission</a></li>-->
  <!--          </ul>-->
  <!--        </li>-->
          
  <!--        <li class="nav-item dropdown">-->
  <!--          <a style="font-size:1.1rem" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
  <!--          Subject-->
  <!--          </a>-->
  <!--          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
  <!--            <li><a style="font-size:1.1rem" class="dropdown-item" href="#">Math</a></li>-->
  <!--            <li><a style="font-size:1.1rem" class="dropdown-item {{'english'==request()->path() ? 'active' : ''}}" href="/english">English</a></li>-->
  <!--            <li><a style="font-size:1.1rem" class="dropdown-item" href="#">Analytical Ability</a></li>-->
  <!--            <li><a style="font-size:1.1rem" class="dropdown-item" href="#">Coding</a></li>-->
  <!--          </ul>-->
  <!--        </li>-->
          
          
  <!--        <li><a style="font-size:1.1rem" class="{{'freelancing'==request()->path() ? 'active' : ''}}" href="">Freelancing</a></li>-->
  <!--        <li><a style="font-size:1.1rem" class="{{'login'==request()->path() ? 'active' : ''}}" href="/login">Login</a></li>-->
          
  <!--        <li class="nav-item dropdown">-->
  <!--          <a style="font-size:1.1rem" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
  <!--          Register-->
  <!--          </a>-->
  <!--          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
  <!--            <li><a style="font-size:1.1rem" class="dropdown-item" href="#">Accademic Student</a></li>-->
  <!--            <li><a style="font-size:1.1rem" class="dropdown-item" href="#">Carrer Student</a></li>-->
  <!--            <li><a style="font-size:1.1rem" class="dropdown-item" href="#">Trainer</a></li>-->
  <!--          </ul>-->
  <!--        </li>-->
          
  <!--        <li><a style="font-size:1.3rem" class="{{'register'==request()->path() ? 'active' : ''}}" href="/register">Register</a></li>-->
          
          
  <!--      <li class="nav-item">-->
  <!--          <a class="nav-link" href="/carts">-->
  <!--            <button class="btn btn-danger">-->
  <!--            <span class="mt-1">Cart: </span>-->
  <!--            <span class="badge badge-warning" id="totalItems">-->
  <!--               {{ App\Models\Cart::totalItems() }}-->
  <!--            </span>-->
  <!--            </button>-->
  <!--          </a>-->
  <!--      </li>-->
         
  <!--      </ul>-->
  <!--      <i class="bi bi-list mobile-nav-toggle"></i>-->
  <!--    </nav>-->


  <!--  </div>-->
  <!--</header>-->


  <main id="main">
    @yield('content')
  </main>


  <footer id="footer">
    <div class="footer-top mt-5 py-5" style="background-color: #F9FAF9;">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Plan2Career</h3>
            <p>
             41 (3rd floor), Ibrahim Mia Road, Shibbari Mor, Khulna, Bangladesh <br><br>
              <strong>Phone:</strong>  +8801819769000, +8801701655233 <br>
              <strong>Email:</strong> info@plan2career.com<br>
              <strong>Web:</strong> www.plan2career.com <br>
              <strong>Facebook:</strong> www.facebook.com/plan2career <br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/courses">Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/trainers">Trainers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/contact">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms & Conditions</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">FAQ</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to join our Newsletter and get latest news easily</p>
            <form action="/contact" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe" style="background-color:#5FCF80;border:2px solid #5FCF80;color:white;">
            </form>
          </div>

        </div>
      </div>
    </div>
    
  <div style="background-color: #EEF0EF;">
      <style>
          a{color:black;}
      </style>
    <div class="container pt-4 text-center">
      <div class="">
        <div class="copyright">
          &copy; Copyright <strong><span>Plan2Career</span></strong>. All Rights Reserved by <i>Plan2Career</i>
        </div>
        <div class="credits">
          Designed by <a href="https://digitalvai.com/"><i>Digital Vai</i></a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </div>
  </footer>

  <div id="preloader"></div>
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <!--<script src="assets/vendor/aos/aos.js"></script>-->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!--<script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>-->
  
  
   <!--====== jquery js ======-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <!--<script src="js/slick.min.js"></script>-->
    
    <!--====== Magnific Popup js ======-->
    <!--<script src="js/jquery.magnific-popup.min.js"></script>-->
    
    <!--====== Counter Up js ======-->
    <!--<script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>-->
    
    <!--====== Nice Select js ======-->
    <!--<script src="js/jquery.nice-select.min.js"></script>-->
    
    <!--====== Nice Number js ======-->
    <!--<script src="js/jquery.nice-number.min.js"></script>-->
    
    <!--====== Count Down js ======-->
    <!--<script src="js/jquery.countdown.min.js"></script>-->
    
    <!--====== Validator js ======-->
    <!--<script src="js/validator.min.js"></script>-->
    
    <!--====== Ajax Contact js ======-->
    <!--<script src="js/ajax-contact.js"></script>-->
    
    <!--====== Main js ======-->
    <script src="js/main.js"></script>
   
    
    <!--====== Map js ======-->
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>-->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            autoplayTimeout:5000,
            // stagePadding:100,
            dots:true,
            responsive:{
                0:{items:1},
                600:{items:2},
                1000:{items:3}
            }
        })
    </script>
    
<!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/61b9b98ac82c976b71c18ca3/1fmunpia4';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
<!--End of Tawk.to Script-->


</body>

</html>
