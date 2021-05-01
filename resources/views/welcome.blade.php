<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicons -->
        <link href="img/favicon.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="/lib/animate/animate.min.css" rel="stylesheet">
        <link href="/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="css/style.css" rel="stylesheet">
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
        <script type="text/javascript"src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
        <script type="text/javascript">
        (function() {
        emailjs.init("user_Rs0pWSqP4rX2SDcnHt86g");
        })();
        </script>

        <title>PORTFOLIO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    
  </head>

  <body id="page-top">
  
    <!--/ Nav Star /-->
   @include('partials.navbar')
    <!--/ Nav End /-->
  
    <!--/ Intro Skew Star /-->
   
    <!--/ Intro Skew End /-->
  
   @include('pages.about')
  
    <!--/ Section Services Star /-->
  {{-- @include('pages.services') --}}
    <!--/ Section Services End /-->
  
    {{-- <div class="section-counter paralax-mf bg-image" style="background-image: url(img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">450</p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">15</p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-people"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">550</p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">36</p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  
    <!--/ Section Portfolio Star /-->
 @include('pages.portfolio')
    <!--/ Section Portfolio End /-->
  
    <!--/ Section Testimonials Star /-->
 {{-- @include('pages.testimonial') --}}
  
    <!--/ Section Blog Star /-->
    @include('pages.blog')
    <!--/ Section Blog End /-->
  
    <!--/ Section Contact-Footer Star /-->
  @include('pages.contact')
    <!--/ Section Contact-footer End /-->
  
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>
  
    <!-- JavaScript Libraries -->
    <script src="/lib/jquery/jquery.min.js"></script>
    <script src="/lib/jquery/jquery-migrate.min.js"></script>
    <script src="/lib/popper/popper.min.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/counterup/jquery.waypoints.min.js"></script>
    <script src="/lib/counterup/jquery.counterup.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/lightbox/js/lightbox.min.js"></script>
    <script src="/lib/typed/typed.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- Contact Form JavaScript File -->
 <!-- Contact Form JavaScript File -->
 <script src="/contactform/contactform.js"></script>
    <!-- Template Main Javascript File -->
    <script src="/js/main.js"></script>
  
  </body>
  </html>
  
</html>
