@extends('layout/app')

@section('page-icon', 'fa fa-laptop')

@section('page-name', 'Rules')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2><strong>{{ isset($data) ? 'Ubah' : 'Tambah'}} Aturan</strong></h2>
                </header>
                <!-- <div class="row"> -->
                    <div class="container">
                        <div class="row" style="padding: 20px 0">
                            <div class="col-xs-12">
                                <form action="{{ isset($data) ? route('rules.update', $data->id) : route('rules.store') }}" method="POST">
                                    @csrf
                                    @isset($data) 
                                        @method('PUT')
                                    @endisset
                                    <div class="form-group">
                                        <label for="inputQuestionCode">Kode Pertanyaan</label>
                                        <select name="kode_pertanyaan" class="form-control" id="inputQuestionCode" required>
                                            @foreach($question_code_list as $question_code)
                                            <option value="{{ $question_code }}" @if(old('kode_pertanyaan')==$question_code || (isset($data) && $data->kode_pertanyaan==$question_code)) selected @endif>
                                                {{ $question_code }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputConclusion">Kesimpulan</label>
                                        <textarea name="kesimpulan" class="form-control" id="inputConclusion" placeholder="Input kesimpulan" required>{{ old('kesimpulan') ?? $data->kesimpulan ?? '' }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSolution">Solusi</label>
                                        <textarea name="solusi" class="form-control" id="inputSolution" placeholder="Input solusi" required>{{ old('solusi') ?? $data->solusi ?? '' }}</textarea>
                                    </div>
                                    <a href="{{ route('rules.index') }}" class="btn btn-danger">Cancel</a>
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