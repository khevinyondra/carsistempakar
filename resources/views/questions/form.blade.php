@extends('layout/app')

@section('page-icon', 'fa fa-laptop')

@section('page-name', 'Questions')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2><strong>{{ isset($data) ? 'Ubah' : 'Tambah'}} Pertanyaan</strong></h2>
                </header>
                <!-- <div class="row"> -->
                    <div class="container">
                        <div class="row" style="padding: 20px 0">
                            <div class="col-xs-12">
                                <form action="{{ isset($data) ? route('questions.update', $data->id) : route('questions.store') }}" method="POST">
                                    @csrf
                                    @isset($data) 
                                        @method('PUT')
                                    @endisset
                                    <div class="form-group">
                                        <label for="inputCode">Kode</label>
                                        <input type="text" name="kode" class="form-control" id="inputCode" placeholder="Input kode" maxlength="3" 
                                                value="{{ old('kode') ?? $data->kode ?? '' }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSequence">Urutan</label>
                                        <input type="number" name="urutan" class="form-control" id="inputSequence" placeholder="Input urutan" inputmode="numeric" 
                                                value="{{ old('urutan') ?? $data->urutan ?? '' }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputQuestion">Pertanyaan</label>
                                        <textarea name="pertanyaan" class="form-control" id="inputQuestion" placeholder="Input pertanyaan" required>{{ old('pertanyaan') ?? $data->pertanyaan ?? '' }}</textarea>
                                    </div>
                                    <a href="{{ route('questions.index') }}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
                
            </section>
        </div>
    </div>
@endsection