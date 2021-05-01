<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Safario Travel - Home</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">



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
                <h2  style="color:black"> {{ ($kesimpulan->kesimpulan) }} </h2>
                <h3 style="color:black">Solusi : {{ ($kesimpulan->Solusi) }}</h3>
                <a class="button button-hero mt-4" href="{{url("/diagnosis")}}">mulai diagnosis lagi</a>
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

<!--================Search Package section End =================-->


<!--================Blog section Start =================-->

<!-- ================ End footer Area ================= -->




<script src="{{ asset('css/vendors/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('css/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('css/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('css/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/jsnew/jquery.ajaxchimp.min.js') }}"></script>
<script src="j{{ asset('js/jsnew/mail-script.js') }}"></script>
<script src="{{ asset('js/jsnew/skrollr.min.js') }}"></script>
<script src="{{ asset('js/jsnew/main.js') }}"></script>
</body>
</html>