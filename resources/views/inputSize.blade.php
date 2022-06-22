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


    <link rel="stylesheet" href="{{ URL::asset('css/careo/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/input.css') }}">
</head>
<body>
    <!-- code begins here -->

    <a href="/home" class="float">
        {{-- <i class="fa fa-window-close" aria-hidden="true"></i> --}}
    </a>
    <div class="label-container">
        <div class="label-text">Close</div>
        <i class="fa fa-play label-arrow"></i>
    </div>
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
