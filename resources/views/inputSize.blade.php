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
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ URL::asset('css/careo/responsive.css') }}">
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



    <link rel="stylesheet" href="{{ URL::asset('css/input.css') }}">
</head>
<body>
    <!-- header -->
    <header class="navbar">
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
                             <li class="nav-item active">
                                <a class="nav-link" href="index.html"> Home  </a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#service">Service</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#customer">History</a>
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
                       <li><a href="#">Call: {{session('konsumen')->no_hp}}</a></li>
                       <li><a href="#">Email: {{session('konsumen')->email}}</a></li>
                       <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
     </header>
     <!-- end header inner -->
     <!-- end header -->
    <div class="row">
        <form action="inputPesanan" method="POST">
            <div class="container">
                @csrf
                <h2>Isi Data</h2>
                <div class="col-3">
                    <input class="effect-1" type="text" name="lingkar_dada" placeholder="Lingkar Dada (cm)">
                    <span class="focus-border"></span>
                </div>
                <div class="col-3">
                    <input class="effect-2" type="text" name="lingkar_pinggul" placeholder="Lingkar Pinggul (cm)">
                    <span class="focus-border"></span>
                </div>
                <div class="col-3">
                    <input class="effect-3" type="text" name="lingkar_pinggang" placeholder="Lingkar Pinggang (cm)">
                    <span class="focus-border"></span>
                </div>
                <div class="col-3">
                    <input class="effect-4" type="text" name="panjang_baju" placeholder="Panjang Baju (cm)">
                    <span class="focus-border"></span>
                </div>

                <div class="col-3">
                    <input class="effect-5" type="text" name="panjang_lengan" placeholder="Panjang Lengan (cm)">
                    <span class="focus-border"></span>
                </div>
                <div class="col-3">
                    <input class="effect-6" type="text" name="panjang_celana" placeholder="Panjang Celana (cm)">
                    <span class="focus-border"></span>
                </div>
                <div class="col-3">
                    <input class="effect-7" type="text" name="keterangan" placeholder="Keterangan">
                    <span class="focus-border">
                        <i></i>
                    </span>
                </div>
            </div>
            <input type="text" style="display: none;" name="id_konsumen" value=" {{session('konsumen')->id_konsumen}} ">
            <input class="submit" type="submit" value="Submit">
        </form>
    </div>
    <script src="{{ URL::asset('js/input.js') }}"></script>
</body>
</html>
