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


    @include('flash-message')

    <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <h2 class="text-white primary-color-icon text-center">Appoitment Booking</h2>
            <form method="post" action="{{action('AppointmentController@store')}}" enctype='multipart/form-data'>

              {{csrf_field()}}

              <!--select2 example -->

              <div class="box box-default">

                <div class="box-body">

                  <div class="row">

                    <div class="col-md-4">

                      <div class="form-group">

                        <label>Name</label><br>

                        <input type="text" name="name" required class="form-control" style="width:100%;">

                      </div>

                    </div>
                    <div class="col-md-4">

                      <div class="form-group">

                        <label>Age</label><br>

                        <input type="number" id='age' min="1" max="100" name="age" class="form-control" style="width:100%;">

                      </div>

                    </div>
                    <div class="col-md-4">

                      <div class="form-group">

                        <label>Phone</label><br>

                        <input type="text" name="contact" id="contact" required class="form-control" style="width:100%;">

                      </div>

                    </div>
                    <div class="col-md-4">

                      <div class="form-group">

                        <label>Address</label><br>

                        <input type="text" name="address1" required class="form-control" style="width:100%;">

                      </div>

                    </div>


                    <div class="col-md-4">

                      <div class="form-group">

                        <label>City</label><br>

                        <input type="text" required name="city" class="form-control" style="width:100%;">

                      </div>

                    </div>
                    <div class="col-md-4">

                      <div class="form-group">

                        <label>State</label><br>

                        <input type="text" required name="state" class="form-control" style="width:100%;">

                      </div>

                    </div>

                    <div class="col-md-4">

                      <div class="form-group">

                        <label>Postcode</label><br>

                        <input type="text" required name="pincode" class="form-control" style="width:100%;">

                      </div>

                    </div>
                    <div class="col-md-4">

                      <div class="form-group">

                        <label>Date</label><br>

                        <input type="date" required id="date" name="date" class="form-control" style="width:100%;">

                      </div>

                    </div>
                    <div class="col-md-4">

                      <div class="form-group">

                        <label>Time</label><br>

                        <input type="time" required name="time" class="form-control" style="width:100%;">

                      </div>

                    </div>
                    <div class="col-md-4">

                      <div class="form-group">

                        <label>Service</label><br>
                        <select name="services" class="servicesOption form-control" style="width:100%;">
                        </select>

                      </div>

                    </div>

                    <div class="col-md-4">

                      <div class="form-group">

                        <label>Price</label><br>

                        <input type="text" readonly id="price" required name="price" class="form-control" style="width:100%;">

                      </div>

                    </div>
                    <div class="col-md-4">

                      <div class="form-group">

                        <label>Discount</label><br>

                        <input type="text" required name="discount" id="discount" readonly class="form-control" style="width:100%;">

                      </div>

                    </div>
                    <div class="col-md-4">

                      <div class="form-group">

                        <label>Total Price</label><br>

                        <input type="text" required name="totalPrice" id="totalPrice" readonly class="form-control" style="width:100%;">

                      </div>

                    </div>




                  </div>

                </div>

                <div class="box-body">

                  <div class="row">

                    <div class="col-lg-3">

                      <input type="submit" value="Booking" class="btn btn-primary btn-block btn-flat">

                    </div>



                    <div class="col-lg-3">

                      <button type="remove" class="btn btn-success btn-block btn-flat"><a href="{{ URL::previous() }}">Cancel</a></button>

                    </div>

                  </div>

                </div>

              </div>

            </form>

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
    window.onscroll = function() {
      myFunction()
    };

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
      var servicesOption = $(".servicesOption");
      $.ajax({
        url: '{{ url('/allServices') }}',
        type: "get",
        success: function(response) { // What to do if we succeed
          //if(data == "success")
          console.log(response);
          //add input box
          for (var i = 0; i <= response.length; i++) {

            var select = '';

            $(servicesOption).append('<option value="' + response[i].servicesId + '">' + response[i].services + '</option>'); //add input box
          }

        }
      });
      var percentage = 0;
      var checkCustomer = 0;
      jQuery(".servicesOption").change(function() {


       // alert(finaldate);
        var price = $("#price");


        //var serviceId = $(".servicesOption");
        $("#price").empty();

        var serviceId = this.value;
        $.ajax({
          url: '{{ url('/getPrice') }}',
          type: "get",
          data: {
            serviceId: serviceId
          },
          success: function(response) { // What to do if we succeed

            for (var i = 0; i < response.length; i++) {
              $(price).val(response[i].price);

            }
          }
        });
        var contact = $("#contact").val();
        $.ajax({
                  url: '{{ url('/checkCustomer') }}',
                  type: "get",
                  data: {
                    contact: contact
                  },
                  success: function(contactData) { // What to do if we succeed
                    if (contactData.length >= 1) {
                      checkCustomer = 1;

                    } else {
                      checkCustomer = 2;
                    }
                  }

              });

        var ageText = $("#age").val();

        $.ajax({
          url: '{{ url('/getAge') }}',
          type: "get",
          success: function(response) { // What to do if we succeed

            for (var i = 0; i <= response.length-1; i++) {

              if (response[i].age >= 60 && ageText >= 60) {
                percentage = response[i].percentage;
              } else if (response[i].age <= 12 && ageText <= 12) {
                percentage = response[i].percentage;
              } else {

                   if (checkCustomer == 1) {
                      if (response[i].from) {
                        var fromDate = new Date($("#date").val());

                           var fromDate = new Date($("#date").val());
                        var dd = fromDate.getDate();
                        var finalmm = fromDate.getMonth() + 1;

                        var mm = ("0" + finalmm).slice(-2);
                        var yyyy = fromDate.getFullYear();
                        var finalDate=yyyy+'-'+mm +'-'+dd;

                        

                        if (finalDate >= response[i].from && finalDate <= response[i].to ){
                        
                          percentage = response[i].percentage;
                          console.log(percentage);
                         // alert(percentage);
                        }

                      }

                    }
                    if (checkCustomer == 2) {
                         if(response[i].from ==null && response[i].age==null){
                           percentage = response[i].percentage;
                         }
                    }

                  }

              }
             // alert(percentage);
             console.log(percentage);
              var price=$("#price").val();
              var discount=0;
              discount=price*percentage/100;
              $("#discount").val(discount);
              var total=price-discount;
              $("#totalPrice").val(total);
            }

        });

      });

    });
  </script>
</body>

</html>
