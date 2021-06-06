@extends('layout/app')

@section('page-icon', 'fa fa-laptop')

@section('page-name', 'Questions')

@section('content')
    
<div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <!-- <div class="d-flex justify-content-between">
                        <div>Daftar Pertanyaan</div>
                        <div><button class="btn btn-danger">Add</button></div>
                    </div> -->
                    <h2><strong>Daftar Pertanyaan</strong></h2>
                    <div class="panel-actions">
                        <a href="{{ route('questions.create') }}">
                            <button class="btn btn-primary"><i class="icon_plus_alt"></i> Add</button>
                        </a>
                    </div>
                    
                </header>

                <table class="table table-striped table-advance table-hover">
                    <tbody>
                    <tr>
                        <th>#</th>
                        <th>Kode</th>
                        <th>Urutan</th>
                        <th>pertanyaan</th>
                        <th></th>
                    </tr>

                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->urutan }}</td>
                        <td>{{ $item->pertanyaan }}</td>
                        <td>
                            <form action="{{ route('questions.destroy', $item->id) }}" class="form-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('questions.edit', $item->id) }}" class="btn btn-success"><i class="icon_pencil_alt"></i>&nbsp; Edit</a>
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin untuk menghapus data ini?')">
                                    <i class="icon_close_alt"></i>&nbsp; Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </div>
@endsection