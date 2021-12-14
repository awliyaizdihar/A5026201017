@extends('layout.bahagia')

@section('title', 'Data Mouse')
@section('judulhalaman', 'Detail Mouse')

@section('konten')

<a href="/mouse" class="btn btn-info float-left">Kembali</a>

<br />
<br />

@foreach($mouse as $m)

<div class="form-group row">
    <label class="col-sm-6 text-right" for="merkm">Merk :</label>
    <label class="col-sm-6 text-left" for="merkm">{{ $m->merkmouse }}</label>
    <label class="col-sm-6 text-right" for="stockm">Stock :</label>
    <label class="col-sm-6 text-left" for="stockm">{{ $m->stockmouse }}</label>
    <label class="col-sm-6 text-right" for="tersedia">Ketersediaan :</label>
    <label class="col-sm-6 text-left" for="tersedia">
    @if ($m->tersedia === "Y") Tersedia @endif
    @if ($m->tersedia === "N") Habis  @endif
    </label>
</div>
@endforeach

@endsection
