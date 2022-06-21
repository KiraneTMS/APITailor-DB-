<!DOCTYPE html>
<html lang="en">
   <head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>S-Tailor</title>
    <link rel="icon" href="{{ URL::to('/') }}/images/logo.png">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ URL::asset('css/careo/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ URL::asset('css/careo/style.css') }}">
    <!-- Responsive -->
    <link rel="stylesheet" href="{{ URL::asset('css/careo/responsive.css') }}">
    <!-- table -->
    <link rel="stylesheet" href="{{ URL::asset('css/history.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/careo/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ URL::to('/') }}/images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="index.html"> Home  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#about">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#service">Service</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="#history">History</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contact">Contact Us</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="{{ URL::to('/') }}/images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                     <ul class="email">
                        <li><a href="#">Call: (+71) 1234567890</a></li>
                        <li><a href="#">Email: demo@gmail.com</a></li>
                        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- body -->
      <section class="container-header">

        <!-- Header Bar -->
        <header class="history">
            <div class="user-col">
                <label> User </label>
            </div>

            <div class="status-col">
                <label> Payment Status </label>
            </div>

            <div class="dates-col">
                <label> Tailor </label>
            </div>

            <div class="priority-col">
                <label> Address </label>
            </div>

        </header>

        <!-- List Items -->
        <ul class="task-items">

            @foreach ($result as $item)

            <!-- List Item -->
            <li class="item type1">
                <div class="task">
                    <div class="name" style="width:150px"> &nbsp;&nbsp;&nbsp;&nbsp;{{ $item->nama }}</div>
                </div>

                <div class="status">
                    <div class="icon off"> </div>
                    <div class="text"> false </div>
                </div>

                <div class="dates">
                    <div class="bar"> &nbsp;&nbsp;&nbsp;&nbsp;{{ $item->nama_penjahit}} </div>
                </div>

                <div class="address">
                    <div class="bar"> &nbsp;&nbsp;&nbsp;&nbsp;{{ $item->alamat }}</div>
                </div>

                <div class="priority">
                    <div class="bar"> &nbsp;&nbsp;&nbsp;&nbsp;See Details </div>
                </div>
            </li>
            @endforeach


            </li>

        </ul>

    </section>
      <!-- end body -->
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ URL::asset('js/careo/jquery.min.js') }}"></script>
      <script src="{{ URL::asset('js/careo/popper.min.js') }}"></script>
      <script src="{{ URL::asset('js/careo/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ URL::asset('js/careo/jquery-3.0.0.min.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ URL::asset('js/careo/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ URL::asset('js/careo/custom.js') }}"></script>
      <script>
         $('a[href^="#"]').on('click', function(event) {

          var target = $(this.getAttribute('href'));

          if( target.length ) {
              event.preventDefault();
              $('html, body').stop().animate({
                  scrollTop: target.offset().top
              }, 2000);
          }

         });
      </script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             });

         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
   </body>
</html>

