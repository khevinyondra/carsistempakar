@extends('layout/app')

@section('page-icon', 'fa fa-laptop')

@section('page-name', 'Dashboard')

@section('content')
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
@endsection