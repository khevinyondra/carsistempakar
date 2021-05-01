<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Safario Travel - Home</title>
    <link rel="icon" href="img/expert.png" type="image/png">



    <link rel="stylesheet" href="{{ asset('css/vendors/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/owl-carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="   {{ asset('css/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/flat-icon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/nice-select/nice-select.css') }}">

    <link rel="stylesheet" href="{{ asset('css/cssnew/style.css') }}">
</head>
<style>
    /* The container */
    .container1 {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default radio button */
    .container1 input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom radio button */
    .checkmark1 {
        position: absolute;
        top: 0;
        left: 0;
        height: 20px;
        width: 20px;
        background-color: #eee;
        border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .container1:hover input ~ .checkmark1 {
        background-color: #ccc;
    }

    /* When the radio button is checked, add a blue background */
    .container1 input:checked ~ .checkmark1 {
        background-color: #2196F3;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark1:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .container1 input:checked ~ .checkmark1:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .container1 .checkmark1:after {
        top: 7px;
        left: 7px;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: white;
    }

    /* The container */
    .container2 {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container2 input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 15px;
        width: 15px;
        background-color: #eee;
    }

    /* On mouse-over, add a grey background color */
    .container2:hover input ~ .checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container2 input:checked ~ .checkmark {
        background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container2 input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container2 .checkmark:after {
        left: 3px;
        top: 1px;
        width: 5px;
        height: 5px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
</style>
<body class="bg-shape">

<!--================ Header Menu Area start =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <a class="navbar-brand logo_h" href="index.html"><img src="img/expert.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item"><a class="nav-link" href="{{ asset('/') }}"><b>Home</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ asset('about') }}"><b>About</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ asset('contact') }}"><b>contact</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ asset('help') }}"><b>help</b></a></li>




                    </ul>


                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->


<!--================Hero Banner Area Start =================-->
<section class="hero-banner">
    <div class="container">

        <div class="row align-items-center text-center text-md-left">
            <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
                <form id="diagnosa" action="{{ url('/diagnosisresult') }}" method="post">
                <div class="tab-content" id="myTabContent">


                    <div class="home tab-pane fade show active" >

                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <h2 >Masukan data diri anda</h2>

                            <input class="form-control"  style="color:black" required="required" type="text" id="home" name="nama" placeholder="Nama">
                            <input class="form-control"  style="color:black" required="required" type="text"  id="home1" name="domisili" placeholder="Domisili">


                            <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="overflow-auto pertanyaan1 tab-pane fade" >

                        <h1 >Apakah Mobil mendadak mati?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="A1" name="pertanyaan1">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="tidak1" name="pertanyaan1">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>


                    </div>

                    <div class="overflow-auto tidak1 tab-pane fade" >

                        <h1 >Apakah idle kasar?</h1>

                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="B1" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="tidak2" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>

                    </div>
                    <div class="overflow-auto tidak2 tab-pane fade" >

                        <h1 >Apakah suara mesin menggelitik?</h1>

                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="C1" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="tidak3" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>

                    </div>

                    <div class="overflow-auto tidak3 tab-pane fade" >

                        <h1 >Apakah tidak ada hembusan angin pada AC?</h1>

                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="D1" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="tidak4" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>

                    </div>

                    <div class="overflow-auto tidak4 tab-pane fade" >

                        <h1 >Apakah rem bunyi saat diinjak?</h1>

                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="E1" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="tidak5" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>

                    </div>

                    <div class="overflow-auto tidak5 tab-pane fade" >

                        <h1 >Apakah mesin mogok?</h1>

                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="F1" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="tidak6" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>

                    </div>

                    <div class="overflow-auto tidak6 tab-pane fade" >

                        <h1 >Apakah terdengar bunyi dugdug saat melepas kopling?</h1>

                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="G1" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="tidak7" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>

                    </div>

                    <div class="overflow-auto tidak7 tab-pane fade" >

                        <h1 >Apakah Starter tidak berfungsi?</h1>

                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="H1" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="tidak8" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>

                    </div>

                    <div class="overflow-auto tidak8 tab-pane fade" >

                        <h1 >Apakah tercium bau bensin yang menyengat?</h1>

                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="I1" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="tidak9" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>

                    </div>

                    <div class="overflow-auto tidak9 tab-pane fade" >

                        <h1 >Apakah terdapat rembesan oli pada sambungan blok mesin?</h1>

                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="J1" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="tidak10" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>

                    </div>

                    <div class="overflow-auto tidak10 tab-pane fade" >

                        <h1 >Apakah jarum indikator temperature naik pada posisi “H”?</h1>

                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="K1" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="tidak11" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>

                    </div>

                    <div class="overflow-auto tidak11 tab-pane fade" >

                        <h1 >Apakah lampu CHG menyala saat mobil sedang berjalan?</h1>

                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="L1" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="tidak12" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>

                    </div>


                    <div class="overflow-auto tidak12 tab-pane fade" >

                        <h1 >Apakah mobil tidak bertenaga jika dalam tanjakan atau tarikan awal?</h1>

                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="M1" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="tidak13" name="pertanyaan1">

                            <span class="checkmark1"></span>
                        </label>
                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>

                    </div>
                    <div class="overflow-auto normal1 tab-pane fade" >

                        <h1 >Tidak terjadi kerusakan pada mobil anda</h1>

                    </div>


                    <div class="pertanyaan1-1 tab-pane fade " >

                        <h1 >Apakah terdapat sisa pelumas pada kepala busi??</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="A1"  name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio"  value="nullA1" name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan1-2 tab-pane fade " >

                        <h1 >Apakah terdapat kerak pada kepala busi?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="A2" name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullA2"  name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan1-3 tab-pane fade " >

                        <h1 >Apakah busi berwarna coklat / kemerahan?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="A3" name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullA3"  name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan1-4 tab-pane fade " >

                        <h1 >Apakah Apakah elektroda meleleh?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="A4" name="pertanyaanD">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullA4"  name="pertanyaanD">
                            <span class="checkmark1"></span>
                        </label>

                        <button class="btn btn-dark mr-2 mb-2" type="submit">KIRIM</button>
                    </div>



                    <div class="pertanyaan2-1 tab-pane fade " >

                        <h1 >Apakah mesin tersendat saat pedal gas di injak?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="B1"  name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio"  value="nullB1" name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan2-2 tab-pane fade " >

                        <h1 >Apakah tenaga melemah saat akselerasi?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="B2" name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullB2"  name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan2-3 tab-pane fade " >

                        <h1 >Apakah Apakah akselerasi buruk dan konsumsi bbm boros?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="B3" name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullB3"  name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan2-4 tab-pane fade " >

                        <h1 >Apakah lampu indicator cek engine berkedip?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="B4" name="pertanyaanD">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullB4"  name="pertanyaanD">
                            <span class="checkmark1"></span>
                        </label>

                        <button class="btn btn-dark mr-2 mb-2" type="submit">KIRIM</button>
                    </div>



                    <div class="pertanyaan3-1 tab-pane fade " >

                        <h1 >Apakah tenaga mesin loyo?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="C1"  name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio"  value="nullC1" name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan3-2 tab-pane fade " >

                        <h1 >Apakah suara mesin mendesis?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="C2" name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullC2"  name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan3-3 tab-pane fade " >

                        <h1 >Apakah terdengar bunyi gluduk saat lepas gas?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="C3" name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullC3"  name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan3-4 tab-pane fade " >

                        <h1 >Apakah tiba-tiba lost power?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="C4" name="pertanyaanD">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullC4"  name="pertanyaanD">
                            <span class="checkmark1"></span>
                        </label>

                        <button class="btn btn-dark mr-2 mb-2" type="submit">KIRIM</button>
                    </div>



                    <div class="pertanyaan4-1 tab-pane fade " >

                        <h1 >Apakah ekstra fan bekerja?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="D1"  name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio"  value="nullD1" name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan4-2 tab-pane fade " >

                        <h1 >Apakah kipas ac tidak berputar?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="D2" name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullD2"  name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan4-3 tab-pane fade " >

                        <h1 >Apakah ac tiba-tiba panas?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="D3" name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullD3"  name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan4-4 tab-pane fade " >

                        <h1 >Apakah indikator temperature naik?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="D4" name="pertanyaanD">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullD4"  name="pertanyaanD">
                            <span class="checkmark1"></span>
                        </label>

                        <button class="btn btn-dark mr-2 mb-2" type="submit">KIRIM</button>
                    </div>



                    <div class="pertanyaan5-1 tab-pane fade " >

                        <h1 >Apakah rem mobil keras?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="E1"  name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio"  value="nullE1" name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan5-2 tab-pane fade " >

                        <h1 >Apakah rem mobil dalam?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="E2" name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullE2"  name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan5-3 tab-pane fade " >

                        <h1 >Apakah rem mobil terasa bergetar?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="E3" name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullE3"  name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan5-4 tab-pane fade " >

                        <h1 >Apakah rem macet?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="E4" name="pertanyaanD">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullE4"  name="pertanyaanD">
                            <span class="checkmark1"></span>
                        </label>

                        <button class="btn btn-dark mr-2 mb-2" type="submit">KIRIM</button>
                    </div>



                    <div class="pertanyaan6-1 tab-pane fade " >

                        <h1 >Apakah oli bercampur air?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="F1"  name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio"  value="nullF1" name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan6-2 tab-pane fade " >

                        <h1 >Apakah bau terbakar di area transmisi?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="F2" name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullF2"  name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan6-3 tab-pane fade " >

                        <h1 >Apakah bau mesin menyengat?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="F3" name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullF3"  name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan6-4 tab-pane fade " >

                        <h1 >Apakah tenaga mesin mendadak berkurang?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="F4" name="pertanyaanD">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullF4"  name="pertanyaanD">
                            <span class="checkmark1"></span>
                        </label>

                        <button class="btn btn-dark mr-2 mb-2" type="submit">KIRIM</button>
                    </div>



                    <div class="pertanyaan7-1 tab-pane fade " >

                        <h1 >Apakah gigi seperti mengunci ke atas?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="G1"  name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio"  value="nullG1" name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan7-2 tab-pane fade " >

                        <h1 >Apakah tombol overdrive aktif?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="G2" name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullG2"  name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan7-3 tab-pane fade " >

                        <h1 >Apakah telah masuk gigi “R” mobil tidak mundur?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="G3" name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullG3"  name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan7-4 tab-pane fade " >

                        <h1 >Apakah sulit oper gigi?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="G4" name="pertanyaanD">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullG4"  name="pertanyaanD">
                            <span class="checkmark1"></span>
                        </label>

                        <button class="btn btn-dark mr-2 mb-2" type="submit">KIRIM</button>
                    </div>



                    <div class="pertanyaan8-1 tab-pane fade " >

                        <h1 >Apakah air aki keruh?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="H1"  name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio"  value="nullH1" name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan8-2 tab-pane fade " >

                        <h1 >Apakah cranking kurang dari 10 volt?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="H2" name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullH2"  name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan8-3 tab-pane fade " >

                        <h1 >Apakah terdengar bunyi kasar saat mesin di starter?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="H3" name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullH3"  name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan8-4 tab-pane fade " >

                        <h1 >Apakah mobil bergetar saat kecepatan tinggi?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="H4" name="pertanyaanD">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullH4"  name="pertanyaanD">
                            <span class="checkmark1"></span>
                        </label>

                        <button class="btn btn-dark mr-2 mb-2" type="submit">KIRIM</button>
                    </div>



                    <div class="pertanyaan9-1 tab-pane fade " >

                        <h1 >Apakah mesin tersendat-sendat saat akselerasi?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="I1"  name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio"  value="nullI1" name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan9-2 tab-pane fade " >

                        <h1 >Apakah laju kendaraan tidak normal?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="I2" name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullI2"  name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan9-3 tab-pane fade " >

                        <h1 >Apakah konsumsi bahan bakar terasa sangat boros?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="I3" name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullI3"  name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>
                        <button class="btn btn-dark mr-2 mb-2" type="submit">KIRIM</button>
                    </div>




                    <div class="pertanyaan10-1 tab-pane fade " >

                        <h1 >Apakah oli mesin cepat menetes jika mobil sedang parkir atau berhenti?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="J1"  name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio"  value="nullJ1" name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan10-2 tab-pane fade " >

                        <h1 >Apakah ada asap putih pada knalpot jika mobil di hidupkan?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="J2" name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullJ2"  name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan10-3 tab-pane fade " >

                        <h1 >Apakah volume oli selalu berkurang padahal tidak terjadi kebocoran?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="J3" name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullJ3"  name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>
                        <button class="btn btn-dark mr-2 mb-2" type="submit">KIRIM</button>
                    </div>




                    <div class="pertanyaan11-1 tab-pane fade " >

                        <h1 >Apakah terdapat rembesan air pendingin antara water pump dengan blok mesin?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="K1"  name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio"  value="nullK1" name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan11-2 tab-pane fade " >

                        <h1 >Apakah ruangan pada kabin terasa panas?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="K2" name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullK2"  name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan11-3 tab-pane fade " >

                        <h1 >Apakah terjadi tetesan air pada bawah mesin?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="K3" name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullK3"  name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>
                        <button class="btn btn-dark mr-2 mb-2" type="submit">KIRIM</button>
                    </div>




                    <div class="pertanyaan12-1 tab-pane fade " >

                        <h1 >Apakah lampu indikator kadang-kadang menyala dan padam?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="L1"  name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio"  value="nullL1" name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan12-2 tab-pane fade " >

                        <h1 >Apakah stroom aki lemah?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="L2" name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullL2"  name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan12-3 tab-pane fade " >

                        <h1 >Apakah aki sering tekor?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="L3" name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullL3"  name="pertanyaanC">
                            <span class="checkmark1"></span>
                        </label>
                        <button class="btn btn-dark mr-2 mb-2" type="submit">KIRIM</button>
                    </div>




                    <div class="pertanyaan13-1 tab-pane fade " >

                        <h1 >Apakah mobil berjalan tersendat-sendat?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="M1"  name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio"  value="nullM1" name="pertanyaanA">
                            <span class="checkmark1"></span>
                        </label>

                        <a class="cobadonk btn btn-dark mr-2 mb-2" style="color: white">NEXT</a>
                    </div>
                    <div class="pertanyaan13-2 tab-pane fade " >

                        <h1 >Apakah susah untuk memasukkan gigi transmisi?</h1>
                        <label style="color:black" class="container1"><h3>ya</h3>
                            <input type="radio" value="M2" name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>
                        <label style="color:black" class="container1"><h3>tidak</h3>
                            <input type="radio" value="nullM2"  name="pertanyaanB">
                            <span class="checkmark1"></span>
                        </label>

                        <button class="btn btn-dark mr-2 mb-2" type="submit">KIRIM</button>
                    </div>


                </div>
                </form>
            </div>
            <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
                <img class="img-fluid" src="img/home/agya3.png" alt="">
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</section>
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>



            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
                        &nbsp;&nbsp;
                        &nbsp;&nbsp;

                    </div>
                </div>
            </div>
        </div>
</footer>
<!--================Hero Banner Area End =================-->


<!--================Service Area Start =================-->

<!-- ================ End footer Area ================= -->




<script src="{{ asset('css/vendors/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('css/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('css/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('css/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/jsnew/jquery.ajaxchimp.min.js') }}"></script>
<script src="j{{ asset('js/jsnew/mail-script.js') }}"></script>
<script src="{{ asset('js/jsnew/skrollr.min.js') }}"></script>
<script src="{{ asset('js/jsnew/main.js') }}"></script>

<script type="text/javascript">
    function next(){
        $('html, body').animate({ scrollTop: 0 }, 'fast');
        var pertanyaan1 = $("input[name='pertanyaan1']:checked").val();
        var pertanyaanA = $("input[name='pertanyaanA']:checked").val();
        var pertanyaanB = $("input[name='pertanyaanB']:checked").val();
        var pertanyaanC = $("input[name='pertanyaanC']:checked").val();
        var pertanyaanD = $("input[name='pertanyaanD']:checked").val();

        if(document.getElementById("home").value.length == 0 ){
            alert("isi terlebih dahulu")
        }else if(document.getElementById("home1").value.length == 0 ){
            alert("isi terlebih dahulu")
        }else{
            $('.home').removeClass('show active');
            $('.pertanyaan1').addClass('show active');

            // password login nya : adminpakar
        }


        if(pertanyaan1 == "tidak1"){
            $('.pertanyaan1').removeClass('show active');
            $('.tidak1').addClass('show active');
        }
        if(pertanyaan1 == "tidak2"){
            $('.tidak1').removeClass('show active');
            $('.tidak2').addClass('show active');
        }

        if(pertanyaan1 == "tidak3"){
            $('.tidak2').removeClass('show active');
            $('.tidak3').addClass('show active');
        }

        if(pertanyaan1 == "tidak4"){
            $('.tidak3').removeClass('show active');
            $('.tidak4').addClass('show active');
        }

        if(pertanyaan1 == "tidak5"){
            $('.tidak4').removeClass('show active');
            $('.tidak5').addClass('show active');
        }

        if(pertanyaan1 == "tidak6"){
            $('.tidak5').removeClass('show active');
            $('.tidak6').addClass('show active');
        }

        if(pertanyaan1 == "tidak7"){
            $('.tidak6').removeClass('show active');
            $('.tidak7').addClass('show active');
        }

        if(pertanyaan1 == "tidak8"){
            $('.tidak7').removeClass('show active');
            $('.tidak8').addClass('show active');
        }

        if(pertanyaan1 == "tidak9"){
            $('.tidak8').removeClass('show active');
            $('.tidak9').addClass('show active');
        }

        if(pertanyaan1 == "tidak10"){
            $('.tidak9').removeClass('show active');
            $('.tidak10').addClass('show active');
        }

        if(pertanyaan1 == "tidak11"){
            $('.tidak10').removeClass('show active');
            $('.tidak11').addClass('show active');
        }

        if(pertanyaan1 == "tidak12"){
            $('.tidak11').removeClass('show active');
            $('.tidak12').addClass('show active');
        }
        if(pertanyaan1 == "tidak13"){
            $('.tidak12').removeClass('show active');
            $('.normal1').addClass('show active');
        }



        if(pertanyaan1 == "A1"){
            $('.pertanyaan1').removeClass('show active');
            $('.pertanyaan1-1').addClass('show active');
        } if(pertanyaan1 == "B1"){
            $('.tidak1').removeClass('show active');
            $('.pertanyaan2-1').addClass('show active');
        }
        if(pertanyaan1 == "C1"){
            $('.tidak2').removeClass('show active');
            $('.pertanyaan3-1').addClass('show active');
        }
        if(pertanyaan1 == "D1"){
            $('.tidak3').removeClass('show active');
            $('.pertanyaan4-1').addClass('show active');
        }
        if(pertanyaan1 == "E1"){
            $('.tidak4').removeClass('show active');
            $('.pertanyaan5-1').addClass('show active');
        }
        if(pertanyaan1 == "F1"){
            $('.tidak5').removeClass('show active');
            $('.pertanyaan6-1').addClass('show active');
        }
        if(pertanyaan1 == "G1"){
            $('.tidak6').removeClass('show active');
            $('.pertanyaan7-1').addClass('show active');
        }
        if(pertanyaan1 == "H1"){
            $('.tidak7').removeClass('show active');
            $('.pertanyaan8-1').addClass('show active');
        }
        if(pertanyaan1 == "I1"){
            $('.tidak8').removeClass('show active');
            $('.pertanyaan9-1').addClass('show active');
        }
        if(pertanyaan1 == "J1"){
            $('.tidak9').removeClass('show active');
            $('.pertanyaan10-1').addClass('show active');
        }
        if(pertanyaan1 == "K1"){
            $('.tidak10').removeClass('show active');
            $('.pertanyaan11-1').addClass('show active');
        }
        if(pertanyaan1 == "L1"){
            $('.tidak11').removeClass('show active');
            $('.pertanyaan12-1').addClass('show active');
        }
        if(pertanyaan1 == "M1"){
            $('.tidak12').removeClass('show active');
            $('.pertanyaan13-1').addClass('show active');
        }


        if(pertanyaanA == "A1"){
            $('.pertanyaan1-1').removeClass('show active');
            $('.pertanyaan1-2').addClass('show active');
        }
        if(pertanyaanA == "nullA1" ){
            $('.pertanyaan1-1').removeClass('show active');
            $('.pertanyaan1-2').addClass('show active');
        }
        if(pertanyaanB == "A2"){
            $('.pertanyaan1-2').removeClass('show active');
            $('.pertanyaan1-3').addClass('show active');
        }
        if(pertanyaanB == "nullA2" ){
            $('.pertanyaan1-2').removeClass('show active');
            $('.pertanyaan1-3').addClass('show active');
        }
        if(pertanyaanC == "A3"){
            $('.pertanyaan1-3').removeClass('show active');
            $('.pertanyaan1-4').addClass('show active');
        }
        if(pertanyaanC == "nullA3" ){
            $('.pertanyaan1-3').removeClass('show active');
            $('.pertanyaan1-4').addClass('show active');
        }



        if(pertanyaanA == "B1"){
            $('.pertanyaan2-1').removeClass('show active');
            $('.pertanyaan2-2').addClass('show active');
        }
        if(pertanyaanA == "nullB1" ){
            $('.pertanyaan2-1').removeClass('show active');
            $('.pertanyaan2-2').addClass('show active');
        }
        if(pertanyaanB == "B2"){
            $('.pertanyaan2-2').removeClass('show active');
            $('.pertanyaan2-3').addClass('show active');
        }
        if(pertanyaanB == "nullB2" ){
            $('.pertanyaan2-2').removeClass('show active');
            $('.pertanyaan2-3').addClass('show active');
        }
        if(pertanyaanC == "B3"){
            $('.pertanyaan2-3').removeClass('show active');
            $('.pertanyaan2-4').addClass('show active');
        }
        if(pertanyaanC == "nullB3" ){
            $('.pertanyaan2-3').removeClass('show active');
            $('.pertanyaan2-4').addClass('show active');
        }



        if(pertanyaanA == "C1"){
            $('.pertanyaan3-1').removeClass('show active');
            $('.pertanyaan3-2').addClass('show active');
        }
        if(pertanyaanA == "nullC1" ){
            $('.pertanyaan3-1').removeClass('show active');
            $('.pertanyaan3-2').addClass('show active');
        }
        if(pertanyaanB == "C2"){
            $('.pertanyaan3-2').removeClass('show active');
            $('.pertanyaan3-3').addClass('show active');
        }
        if(pertanyaanB == "nullC2" ){
            $('.pertanyaan3-2').removeClass('show active');
            $('.pertanyaan3-3').addClass('show active');
        }
        if(pertanyaanC == "C3"){
            $('.pertanyaan3-3').removeClass('show active');
            $('.pertanyaan3-4').addClass('show active');
        }
        if(pertanyaanC == "nullC3" ){
            $('.pertanyaan3-3').removeClass('show active');
            $('.pertanyaan3-4').addClass('show active');
        }



        if(pertanyaanA == "D1"){
            $('.pertanyaan4-1').removeClass('show active');
            $('.pertanyaan4-2').addClass('show active');
        }
        if(pertanyaanA == "nullD1" ){
            $('.pertanyaan4-1').removeClass('show active');
            $('.pertanyaan4-2').addClass('show active');
        }
        if(pertanyaanB == "D2"){
            $('.pertanyaan4-2').removeClass('show active');
            $('.pertanyaan4-3').addClass('show active');
        }
        if(pertanyaanB == "nullD2" ){
            $('.pertanyaan4-2').removeClass('show active');
            $('.pertanyaan4-3').addClass('show active');
        }
        if(pertanyaanC == "D3"){
            $('.pertanyaan4-3').removeClass('show active');
            $('.pertanyaan4-4').addClass('show active');
        }
        if(pertanyaanC == "nullD3" ){
            $('.pertanyaan4-3').removeClass('show active');
            $('.pertanyaan4-4').addClass('show active');
        }



        if(pertanyaanA == "E1"){
            $('.pertanyaan5-1').removeClass('show active');
            $('.pertanyaan5-2').addClass('show active');
        }
        if(pertanyaanA == "nullE1" ){
            $('.pertanyaan5-1').removeClass('show active');
            $('.pertanyaan5-2').addClass('show active');
        }
        if(pertanyaanB == "E2"){
            $('.pertanyaan5-2').removeClass('show active');
            $('.pertanyaan5-3').addClass('show active');
        }
        if(pertanyaanB == "nullE2" ){
            $('.pertanyaan5-2').removeClass('show active');
            $('.pertanyaan5-3').addClass('show active');
        }
        if(pertanyaanC == "E3"){
            $('.pertanyaan5-3').removeClass('show active');
            $('.pertanyaan5-4').addClass('show active');
        }
        if(pertanyaanC == "nullE3" ){
            $('.pertanyaan5-3').removeClass('show active');
            $('.pertanyaan5-4').addClass('show active');
        }



        if(pertanyaanA == "F1"){
            $('.pertanyaan6-1').removeClass('show active');
            $('.pertanyaan6-2').addClass('show active');
        }
        if(pertanyaanA == "nullF1" ){
            $('.pertanyaan6-1').removeClass('show active');
            $('.pertanyaan6-2').addClass('show active');
        }
        if(pertanyaanB == "F2"){
            $('.pertanyaan6-2').removeClass('show active');
            $('.pertanyaan6-3').addClass('show active');
        }
        if(pertanyaanB == "nullF2" ){
            $('.pertanyaan6-2').removeClass('show active');
            $('.pertanyaan6-3').addClass('show active');
        }
        if(pertanyaanC == "F3"){
            $('.pertanyaan6-3').removeClass('show active');
            $('.pertanyaan6-4').addClass('show active');
        }
        if(pertanyaanC == "nullF3" ){
            $('.pertanyaan6-3').removeClass('show active');
            $('.pertanyaan6-4').addClass('show active');
        }



        if(pertanyaanA == "G1"){
            $('.pertanyaan7-1').removeClass('show active');
            $('.pertanyaan7-2').addClass('show active');
        }
        if(pertanyaanA == "nullG1" ){
            $('.pertanyaan7-1').removeClass('show active');
            $('.pertanyaan7-2').addClass('show active');
        }
        if(pertanyaanB == "G2"){
            $('.pertanyaan7-2').removeClass('show active');
            $('.pertanyaan7-3').addClass('show active');
        }
        if(pertanyaanB == "nullG2" ){
            $('.pertanyaan7-2').removeClass('show active');
            $('.pertanyaan7-3').addClass('show active');
        }
        if(pertanyaanC == "G3"){
            $('.pertanyaan7-3').removeClass('show active');
            $('.pertanyaan7-4').addClass('show active');
        }
        if(pertanyaanC == "nullG3" ){
            $('.pertanyaan7-3').removeClass('show active');
            $('.pertanyaan7-4').addClass('show active');
        }



        if(pertanyaanA == "H1"){
            $('.pertanyaan8-1').removeClass('show active');
            $('.pertanyaan8-2').addClass('show active');
        }
        if(pertanyaanA == "nullH1" ){
            $('.pertanyaan8-1').removeClass('show active');
            $('.pertanyaan8-2').addClass('show active');
        }
        if(pertanyaanB == "H2"){
            $('.pertanyaan8-2').removeClass('show active');
            $('.pertanyaan8-3').addClass('show active');
        }
        if(pertanyaanB == "nullH2" ){
            $('.pertanyaan8-2').removeClass('show active');
            $('.pertanyaan8-3').addClass('show active');
        }
        if(pertanyaanC == "H3"){
            $('.pertanyaan8-3').removeClass('show active');
            $('.pertanyaan8-4').addClass('show active');
        }
        if(pertanyaanC == "nullH3" ){
            $('.pertanyaan8-3').removeClass('show active');
            $('.pertanyaan8-4').addClass('show active');
        }



        if(pertanyaanA == "I1"){
            $('.pertanyaan9-1').removeClass('show active');
            $('.pertanyaan9-2').addClass('show active');
        }
        if(pertanyaanA == "nullI1" ){
            $('.pertanyaan9-1').removeClass('show active');
            $('.pertanyaan9-2').addClass('show active');
        }
        if(pertanyaanB == "I2"){
            $('.pertanyaan9-2').removeClass('show active');
            $('.pertanyaan9-3').addClass('show active');
        }
        if(pertanyaanB == "nullI2" ){
            $('.pertanyaan9-2').removeClass('show active');
            $('.pertanyaan9-3').addClass('show active');
        }
        if(pertanyaanC == "I3"){
            $('.pertanyaan9-3').removeClass('show active');
            $('.pertanyaan9-4').addClass('show active');
        }
        if(pertanyaanC == "nullI3" ){
            $('.pertanyaan9-3').removeClass('show active');
            $('.pertanyaan9-4').addClass('show active');
        }



        if(pertanyaanA == "J1"){
            $('.pertanyaan10-1').removeClass('show active');
            $('.pertanyaan10-2').addClass('show active');
        }
        if(pertanyaanA == "nullJ1" ){
            $('.pertanyaan10-1').removeClass('show active');
            $('.pertanyaan10-2').addClass('show active');
        }
        if(pertanyaanB == "J2"){
            $('.pertanyaan10-2').removeClass('show active');
            $('.pertanyaan10-3').addClass('show active');
        }
        if(pertanyaanB == "nullJ2" ){
            $('.pertanyaan10-2').removeClass('show active');
            $('.pertanyaan10-3').addClass('show active');
        }
        if(pertanyaanC == "J3"){
            $('.pertanyaan10-3').removeClass('show active');
            $('.pertanyaan10-4').addClass('show active');
        }
        if(pertanyaanC == "nullJ3" ){
            $('.pertanyaan10-3').removeClass('show active');
            $('.pertanyaan10-4').addClass('show active');
        }



        if(pertanyaanA == "K1"){
            $('.pertanyaan11-1').removeClass('show active');
            $('.pertanyaan11-2').addClass('show active');
        }
        if(pertanyaanA == "nullK1" ){
            $('.pertanyaan11-1').removeClass('show active');
            $('.pertanyaan11-2').addClass('show active');
        }
        if(pertanyaanB == "K2"){
            $('.pertanyaan11-2').removeClass('show active');
            $('.pertanyaan11-3').addClass('show active');
        }
        if(pertanyaanB == "nullK2" ){
            $('.pertanyaan11-2').removeClass('show active');
            $('.pertanyaan11-3').addClass('show active');
        }
        if(pertanyaanC == "K3"){
            $('.pertanyaan11-3').removeClass('show active');
            $('.pertanyaan11-4').addClass('show active');
        }
        if(pertanyaanC == "nullK3" ){
            $('.pertanyaan11-3').removeClass('show active');
            $('.pertanyaan11-4').addClass('show active');
        }



        if(pertanyaanA == "L1"){
            $('.pertanyaan12-1').removeClass('show active');
            $('.pertanyaan12-2').addClass('show active');
        }
        if(pertanyaanA == "nullL1" ){
            $('.pertanyaan12-1').removeClass('show active');
            $('.pertanyaan12-2').addClass('show active');
        }
        if(pertanyaanB == "L2"){
            $('.pertanyaan12-2').removeClass('show active');
            $('.pertanyaan12-3').addClass('show active');
        }
        if(pertanyaanB == "nullL2" ){
            $('.pertanyaan12-2').removeClass('show active');
            $('.pertanyaan12-3').addClass('show active');
        }
        if(pertanyaanC == "L3"){
            $('.pertanyaan12-3').removeClass('show active');
            $('.pertanyaan12-4').addClass('show active');
        }
        if(pertanyaanC == "nullL3" ){
            $('.pertanyaan12-3').removeClass('show active');
            $('.pertanyaan12-4').addClass('show active');
        }



        if(pertanyaanA == "M1"){
            $('.pertanyaan13-1').removeClass('show active');
            $('.pertanyaan13-2').addClass('show active');
        }
        if(pertanyaanA == "nullM1" ){
            $('.pertanyaan13-1').removeClass('show active');
            $('.pertanyaan13-2').addClass('show active');
        }
        if(pertanyaanB == "M2"){
            $('.pertanyaan13-2').removeClass('show active');
            $('.pertanyaan13-3').addClass('show active');
        }
        if(pertanyaanB == "nullM2" ){
            $('.pertanyaan13-2').removeClass('show active');
            $('.pertanyaan13-3').addClass('show active');
        }
        if(pertanyaanC == "M3"){
            $('.pertanyaan13-3').removeClass('show active');
            $('.pertanyaan13-4').addClass('show active');
        }
        if(pertanyaanC == "nullM3" ){
            $('.pertanyaan13-3').removeClass('show active');
            $('.pertanyaan13-4').addClass('show active');
        }
    };
    $(document).ready(function(){

        $('#diagnosa').on('keyup keypress', function(e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) {
                e.preventDefault();
                next();
                return false;
            }
        });

        $('.cobadonk').on('click', function(){
            next();
        });

        $('.mulai').on('click', function(){

        });
    });
</script>

</body>
</html>