<!doctype html>
<html lang="en">

  <head>
    <title>Barbershop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/barberz/fonts/icomoon/style.css") }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset("/barberz/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/barberz/css/bootstrap-datepicker.css") }}">
    <link rel="stylesheet" href="{{ asset("/barberz/css/jquery.fancybox.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/barberz/css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/barberz/css/owl.theme.default.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/barberz/fonts/flaticon/font/flaticon.css") }}">
    <link rel="stylesheet" href="{{ asset("/barberz/css/aos.css") }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset("/barberz/css/style.css") }}">


  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



     <header class="site-navbar site-navbar-target header" role="banner" id="myHeader">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                 <a href="{{url('/')}}">Barbershop</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

            <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto ">
                <li><a href="{{url('appointmentBooking')}}" class="nav-link">Book Appoitment</a></li>
                <li><a href="{{url('about')}}" class="nav-link">About Us</a></li>
                <li><a href="{{url('services-page')}}" class="nav-link">Services</a></li>
                <li><a href="{{url('Gallery')}}" class="nav-link">Gallery</a></li>
                <li class="active"><a href="{{url('contact')}}" class="nav-link">Contact Us</a></li>
              </ul>
            </nav>
          </div>

            
          </div>
      </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">Contact Us</h1>
              <p>If you have any question regarding offer and service then contact with us. We are here for you to help.</p>
             
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        
        </div>
        <div class="row">
         <div class="col-lg-8 mb-5">
                     <div class="mapouter"><div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.061037281332!2d175.2769541150021!3d-37.76516697976114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d6d1884f6c5c635%3A0x7d26e0eb9706c29e!2s174%20Clarkin%20Rd%2C%20Fairfield%2C%20Hamilton%203214!5e0!3m2!1sen!2snz!4v1570011198193!5m2!1sen!2snz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Address:</span>
                  <span>174 Clarkin Road, Fairfield, Hamilton 3791</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>(07) 855 6874 or 02102844736</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>bosscutshamilton@gmail.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>



   <footer class="site-footer">
<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <h2 class="footer-heading mb-3">About Us</h2>
      <img src="{{ asset("/barberz/images/img_11.jpg") }}" alt="Image" class="img-fluid mb-5">
          <p>We are the boss in hairstyling and haircuts for all your family members. We will be groomed you. Come to our shop you will be fall in love with us.</p>
    </div>
    <div class="col-lg-8 ml-auto">
      <div class="row">
        <div class="col-lg-6 ml-auto">
          <h2 class="footer-heading mb-4">Quick Links</h2>
          <ul class="list-unstyled">
            <li><a href="{{url('about')}}">About Us</a></li>
            <li><a href="{{url('services-page')}}">Services</a></li>
            <li><a href="{{url('Gallery')}}">Gallery</a></li>
            <li><a href="{{url('contact')}}">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-lg-6">
          <h2 class="footer-heading mb-4">Address</h2>
          <p>174 Clarkin Road, Fairfield,<br> Hamilton 3791</p>
          <p>Phone : (07) 855 6874 or 02102844736</p>
          <p>Email : bosscutshamilton@gmail.com</p>          
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
    
        </div>
        
      </div>
    </div>
  </div>
  <div class="row pt-5 mt-5 text-center">
    <div class="col-md-12">
      <div class="border-top pt-5">
        <p>
       <strong>Copyright &copy; 2019 <a href="#">Barbershop</a>.</strong> All rights
    reserved.
      </p>
      </div>
    </div>

  </div>
</div>
</footer>

    </div>

    <script src="{{ asset("/barberz/js/jquery-3.3.1.min.js") }}"></script>
    <script src="{{ asset("/barberz/js/jquery-migrate-3.0.0.js") }}"></script>
    <script src="{{ asset("/barberz/js/popper.min.js") }}"></script>
    <script src="{{ asset("/barberz/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("/barberz/js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("/barberz/js/jquery.sticky.js") }}"></script>
    <script src="{{ asset("/barberz/js/jquery.waypoints.min.js") }}"></script>
    <script src="{{ asset("/barberz/js/jquery.animateNumber.min.js") }}"></script>
    <script src="{{ asset("/barberz/js/jquery.fancybox.min.js") }}"></script>
    <script src="{{ asset("/barberz/js/jquery.stellar.min.js") }}"></script>
    <script src="{{ asset("/barberz/js/jquery.easing.1.3.js") }}"></script>
    <script src="{{ asset("/barberz/js/bootstrap-datepicker.min.js") }}"></script>
    <script src="{{ asset("/barberz/js/aos.js") }}"></script>

    <script src="{{ asset("/barberz/js/main.js") }}"></script>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

<script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"  async defer></script>

  </body>

</html>

