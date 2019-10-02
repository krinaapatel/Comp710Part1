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
                 <a href="#">Barbershop</a>
              </div>
            </div>

            <div class="col-9  text-right">


              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>



               <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
          <ul class="site-menu main-menu js-clone-nav ml-auto ">
            <li><a href="{{url('appointmentBooking')}}" class="nav-link">Book Appoitment</a></li>
            <li><a href="{{url('about')}}" class="nav-link">About Us</a></li>
           <li><a href="{{url('services-page')}}" class="nav-link">Services</a></li>
              <li  class="active"><a href="{{url('Gallery')}}" class="nav-link">Gallery</a></li>

            <li><a href="{{url('contact')}}" class="nav-link">Contact Us</a></li>
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
              <h1 class="mb-3">Gallery</h1>
              <p> Discover here our some of the great work and Offers</p>

            </div>
          </div>
        </div>
      </div>
    </div>


        <div class="site-section bg-light">
	<div class="row justify-content-center  mb-5">
          <div class="col-md-7 text-center">
            <h3 class="scissors text-center">Offers</h3>

			 <table class="table">
				<thead>
				  <tr>
					<th>Id</th>
					<th>Offer</th>
					<th>Percentage</th>
					<th>Condition</th>
					<th>Age</th>
					<th>From</th>
					<th>To</th>
				  </tr>
				</thead>
				<tbody class="offer">


				</tbody>
			  </table>

          </div>

        </div>

      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 text-center">
            <h3 class="scissors text-center">Gallery</h3>
            <p class="mb-5 lead">Some of few pictures of showing our dedication towards our customers</p>

            <p class="text-center">
              <a href="#" class="btn btn-primary custom-prev">Prev</a>
              <a href="#" class="btn btn-primary custom-next">Next</a>
            </p>
          </div>

        </div>
        <div class="row">
          <div class="col-12">

            <div class="nonloop-block-13 owl-carousel d-flex">

              <div class="item-1 h">
                <img src="{{ asset("/barberz/images/img_13.jpg") }}" alt="Image" class="img-fluid">
              </div>

              <div class="item-1 h">
                <img src="{{ asset("/barberz/images/img_14.jpg") }}" alt="Image" class="img-fluid">
              </div>

              <div class="item-1 h">
                <img src="{{ asset("/barberz/images/img_16.jpg") }}" alt="Image" class="img-fluid">
              </div>
				 <div class="item-1 h">
                <img src="{{ asset("/barberz/images/img_17.jpg") }}" alt="Image" class="img-fluid">
              </div>

              <div class="item-1 h">
                <img src="{{ asset("/barberz/images/img_18.jpg") }}" alt="Image" class="img-fluid">
              </div>

              <div class="item-1 h">
                <img src="{{ asset("/barberz/images/img_19.jpg") }}" alt="Image" class="img-fluid">
              </div>

            </div>

          </div>
        </div>
      </div>

    </div>




  <footer class="site-footer">
<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <img src="{{ asset("/barberz/images/img_11.jpg") }}" alt="Image" class="img-fluid mb-5">
      <h2 class="footer-heading mb-3">About Us</h2>
          <p>We are the boss in hairstyling and haircuts for all your family members. We will be groomed you. Come to our shop you will be fall in love with us. </p>
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

          </ul>

        </div>

      </div>
    </div>
  </div>
  <div class="row pt-5 mt-5 text-center">
    <div class="col-md-12">
      <div class="border-top pt-5">
        <p>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
       <strong>Copyright &copy; 2019 <a href="#">Barbershop</a>.</strong> All rights
    reserved.
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
      </div>
    </div>

  </div>
</div>
</footer>

    </div>

   <script src='{{ asset("/barberz/js/jquery-3.3.1.min.js") }}'></script>
    <script src='{{ asset("/barberz/js/jquery-migrate-3.0.0.js") }}'></script>
    <script src='{{ asset("/barberz/js/popper.min.js") }}'></script>
    <script src='{{ asset("/barberz/js/bootstrap.min.js") }}'></script>
    <script src='{{ asset("/barberz/js/owl.carousel.min.js") }}'></script>
    <script src='{{ asset("/barberz/js/jquery.sticky.js") }}'></script>
    <script src='{{ asset("/barberz/js/jquery.waypoints.min.js") }}'></script>
    <script src='{{ asset("/barberz/js/jquery.animateNumber.min.js") }}'></script>
    <script src='{{ asset("/barberz/js/jquery.fancybox.min.js") }}'></script>
    <script src='{{ asset("/barberz/js/jquery.stellar.min.js") }}'></script>
    <script src='{{ asset("/barberz/js/jquery.easing.1.3.js") }}'></script>
    <script src='{{ asset("/barberz/js/bootstrap-datepicker.min.js") }}'></script>
    <script src='{{ asset("/barberz/js/aos.js") }}'></script>

    <script src='{{ asset("/barberz/js/main.js") }}'></script>
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
 jQuery(document).ready(function() {
      var offer = $(".offer");
	    $(".offer").empty();
	 $.ajax({
		url: '{{ url('/getAge') }}',
		type: "get",
		success: function(response) { // What to do if we succeed

	//$(offer).append('<tr>'); //add input box
          for (var i = 0; i <= response.length; i++) {

            var select = '';
		 $(offer).append('<tr><td>' + response[i].id + '</td><td>' + response[i].title + '</td><td>' + response[i].percentage + '</td><td>' + response[i].condition + '</td><td>' + response[i].age + '</td><td>' + response[i].from + '</td><td>' + response[i].to + '</td> </tr>');

          }
		console.log(response);

				  }
	 });
 });


</script>

  </body>

</html>
