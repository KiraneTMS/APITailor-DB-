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
    <link rel="stylesheet" href="{{ URL::asset('css/history.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/input.css') }}">
   </head>

   <!-- body -->
   <body class="main-layout">
    <!-- code begins here -->

    <a href="/home" class="float">
        {{-- <i class="fa fa-window-close" aria-hidden="true"></i> --}}
    </a>
    <div class="label-container">
        <div class="label-text">Close</div>
        <i class="fa fa-play label-arrow"></i>
    </div>
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

