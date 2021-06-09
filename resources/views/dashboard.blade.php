@extends('layout/app')

@section('page-icon', 'fa fa-laptop')

@section('page-name', 'Dashboard')

@section('content')
    <div class="row">
        @foreach($rules as $rule)
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
                <div class="count">{{ $rule->hasil->count() }}</div>
                <div class="title">hasil diagnosis</div>

                <div class="title">{{ Str::limit($rule->kesimpulan, 32, $end='...') }}</div>
            </div>
            <!--/.info-box-->
        </div>
        <!--/.col-->
        @endforeach

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
                <i class="fa fa-shopping-cart"></i>
                <div class="count">{{($total)}}</div>
                <div class="title">Total hasil diagnosis</div>
            </div>
            <!--/.info-box-->
        </div>
        <!--/.col-->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Hasil
                </header>

                <table class="table table-striped table-advance table-hover">
                    <tbody>
                    <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Plat Nomor</th>
                        <th>Jawaban </th>
                        <th>Kesimpulan</th>
                        <th>Solusi</th>
                        <th></th>
                    </tr>

                    @forelse($items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->created_at->format('d M Y') }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->plat_nomor }}</td>
                        <td>@foreach($item->jawaban as $jawaban) {{ $item->rules->kode_pertanyaan.$loop->iteration.'='.($jawaban? 'true':'false') }}, @endforeach</td>
                        <td>{{ $item->rules->kesimpulan}}</td>
                        <td>{{ $item->rules->solusi}}</td>
                        <td>
                            <div class="btn-group">
                                <form action="{{ url("/hapusdata") }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{($item->id)}}">

                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="icon_close_alt"></i> delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="10" class="text-muted text-center">Tidak ada data</td>
                    </tr>
                    @endforelse
                    </tbody>
                </table>
            </section>
        </div>
    </div>
@endsection