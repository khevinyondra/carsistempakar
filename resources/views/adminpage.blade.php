<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/admin/bootstrap.min.css') }}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{ asset('css/admin/bootstrap-theme.css') }}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{ asset('css/admin/elegant-icons-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/admin/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="{{ asset('css/admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/admin/assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="{{ asset('css/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('css/admin/owl.carousel.css') }}" type="text/css">
    <link href=" {{ asset('css/admin/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('css/admin/fullcalendar.css') }}">
    <link href="{{ asset('css/admin/widgets.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/style-responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/admin/xcharts.min.css') }}" rel=" stylesheet">
    <link href="{{ asset('css/admin/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">
    <!-- =======================================================

      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>


<body>
<!-- container section start -->
<section id="container" class="">


    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="index.html" class="logo">Admin <span class="lite">Pakar</span></a>
        <!--logo end-->

        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
                <li>
                    <form class="navbar-form">
                        <input class="form-control" placeholder="Search" type="text">
                    </form>
                </li>
            </ul>
            <!--  search form end -->
        </div>

        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">

                <!-- task notificatoin start -->

                <!-- task notificatoin end -->
                <!-- inbox notificatoin start-->

                <!-- inbox notificatoin end -->
                <!-- alert notification start-->

                <!-- alert notification end-->
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                        <span class="username">Admin pakar</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>

                        <li>
                            <a href="{{asset('/logout')}}"><i class="icon_key_alt"></i> Log Out</a>
                        </li>

                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="index.html">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>


            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Dashboard</li>
                    </ol>
                </div>
            </div>

            <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Advanced Table
                    </header>

                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                        <tr>
                            <th> Nama</th>
                            <th> Plat Nomor</th>
                            <th>pertanyaan1 </th>
                            <th> pertanyaan_a</th>
                            <th> pertanyaan_b</th>
                            <th> pertanyaan_c</th>
                            <th> pertanyaan_d</th>
                            <th> kesimpulan</th>
                        </tr>

                        @foreach ($items as $item)

                        <tr>
                            <td>{{ $item->Nama}}</td>
                            <td>{{ $item->Plat_Nomor}}</td>
                            <td>{{ $item->pertanyaan1}}</td>
                            <td>{{ $item->pertanyaan_a}}</td>
                            <td>{{ $item->pertanyaan_b}}</td>
                            <td>{{ $item->pertanyaan_c}}</td>
                            <td>{{ $item->pertanyaan_d}}</td>
                            <td>{{ $item->kesimpulan}}</td>
                            <td>
                                <div class="btn-group">
                                    <form action="{{ url("/hapusdata") }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{($item->id)}}">

                                        <button class="btn btn-danger" type="submit" onclick="return confirm('data berhasil dihapus')"><i class="icon_close_alt"></i>  delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>
            </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box blue-bg">
                        <div class="count">{{($kerusakan1)}}</div>
                        <div class="title">hasil diagnosis</div>

                        <div class="title">Kerusakan pada busi</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box brown-bg">

                        <div class="count">{{($kerusakan2)}}</div>
                        <div class="title">hasil diagnosis Injektor Bermasalah</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box dark-bg">

                        <div class="count">{{($kerusakan3)}}</div>
                        <div class="title">hasil diagnosis Premature Ignition</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box green-bg">

                        <div class="count">{{($kerusakan4)}}</div>
                        <div class="title">hasil diagnosis Kerusakan pada AC dan Freon AC habis</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

            </div>

            <!--/.row--><div class="row">
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box blue-bg">
                        <div class="count">{{($kerusakan5)}}</div>
                        <div class="title">hasil diagnosis</div>

                        <div class="title">Kerusakan Rem</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box brown-bg">

                        <div class="count">{{($kerusakan6)}}</div>
                        <div class="title">hasil diagnosis Mesin Overheat</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box dark-bg">

                        <div class="count">{{($kerusakan7)}}</div>
                        <div class="title">hasil diagnosis Kerusakan Transmisi</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box green-bg">

                        <div class="count">{{($kerusakan8)}}</div>
                        <div class="title">hasil diagnosis Kerusakan Accu dan Engine mounting</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

            </div>

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box blue-bg">
                        <div class="count">{{($kerusakan9)}}</div>
                        <div class="title">hasil diagnosis Tangki bahan bakar mengalami kerusakan</div>


                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box brown-bg">

                        <div class="count">{{($kerusakan10)}}</div>
                        <div class="title">hasil diagnosis Pompa Oli Mengalami Kerusakan</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box dark-bg">

                        <div class="count">{{($kerusakan11)}}</div>
                        <div class="title">hasil diagnosis Radiator mengalami kebocoran</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box green-bg">

                        <div class="count">{{($kerusakan12)}}</div>
                        <div class="title">hasil diagnosis Alternator rusak</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

            </div>

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box blue-bg">
                        <div class="count">{{($kerusakan13)}}</div>
                        <div class="title">hasil diagnosis Kopling rusak dan kampas kopling sudah aus</div>


                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box brown-bg">
                        <i class="fa fa-shopping-cart"></i>
                        <div class="count">{{($total)}}</div>
                        <div class="title">Total hasil diagnosis</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->


                <!--/.col-->


                <!--/.col-->

            </div>


            <div class="row">
                <div class="col-lg-9 col-md-12">

                </div>

            </div>


                            <div class="widget-foot">
                                <!-- Footer goes here -->
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- project team & activity end -->

        </section>
        <div class="text-right">


        </div>
    </section>
    <!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->
<script src="{{ asset('js/admin/jquery.js') }}"></script>
<script src="{{ asset('js/admin/jquery-ui-1.10.4.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery-1.8.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/jquery-ui-1.9.2.custom.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>
<!-- nice scroll -->
<script src="{{ asset('js/admin/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.nicescroll.js') }}" type="text/javascript"></script>
<!-- charts scripts -->
<script src="{{ asset('css/admin/assets/jquery-knob/js/jquery.knob.js') }}"></script>
<script src="{{ asset('js/admin/jquery.sparkline.js') }}" type="text/javascript"></script>
<script src="{{ asset('css/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
<script src=" {{ asset('js/admin/owl.carousel.js') }}"></script>
<!-- jQuery full calendar -->
<<script src="{{ asset('js/admin/fullcalendar.min.js') }}"></script>
<!-- Full Google Calendar - Calendar -->
<script src="{{ asset('css/admin/assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
<!--script for this page only-->
<script src="{{ asset('js/admin/calendar-custom.js') }}"></script>
<script src="{{ asset('js/admin/jquery.rateit.min.js') }}"></script>
<!-- custom select -->
<script src="{{ asset('js/admin/jquery.customSelect.min.js') }}"></script>
<script src=" {{ asset('css/admin/assets/chart-master/Chart.js') }}"></script>

<!--custome script for all page-->
<script src=" {{ asset('js/admin/scripts.js') }}"></script>
<!-- custom script for this page-->
<script src="{{ asset('js/admin/sparkline-chart.js') }}"></script>
<script src="{{ asset('js/admin/easy-pie-chart.js') }}"></script>
<script src="{{ asset('js/admin/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src=" {{ asset('js/admin/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('js/admin/xcharts.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.autosize.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('js/admin/gdp-data.js') }}"></script>
<script src="{{ asset('js/morris.min.js') }}"></script>
<script src="{{ asset('js/admin/sparklines.js') }}"></script>
<script src=" {{ asset('js/admin/charts.js') }}"></script>
<script src="{{ asset('js/admin/jquery.slimscroll.min.js') }}"></script>
<script>

    //knob
    $(function() {
        $(".knob").knob({
            'draw': function() {
                $(this.i).val(this.cv + '%')
            }
        })
    });

    //carousel
    $(document).ready(function() {
        $("#owl-slider").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true

        });
    });

    //custom select box

    $(function() {
        $('select.styled').customSelect();
    });

    /* ---------- Map ---------- */
    $(function() {
        $('#map').vectorMap({
            map: 'world_mill_en',
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#000', '#000'],
                    normalizeFunction: 'polynomial'
                }]
            },
            backgroundColor: '#eef3f7',
            onLabelShow: function(e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
            }
        });
    });
</script>

</body>

</html>
