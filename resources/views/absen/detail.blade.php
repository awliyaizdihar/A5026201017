@extends('layout.bahagia')

@section('title', 'Data Absensi')
@section('judulhalaman', 'Detail Absensi')

@section('konten')

<a href="/absen" class="btn btn-info float-left">Kembali</a>

<br />
<br />

@foreach($absen as $a)

<div class="form-group row">
    <label class="col-sm-6 text-right" for="idp">ID Pegawai :</label>
    <label class="col-sm-6 text-left" for="idp">{{ $a->IDPegawai }}</label>
    <label class="col-sm-6 text-right" for="nama">Nama Pegawai :</label>
    <label class="col-sm-6 text-left" for="nama">{{ $a->pegawai_nama }}</label>
    <label class="col-sm-6 text-right" for="tanggal">Tanggal :</label>
    <label class="col-sm-6 text-left" for="tanggal">{{ $a->Tanggal }}</label>
    <label class="col-sm-6 text-right" for="status">Status :</label>
    <label class="col-sm-6 text-left" for="status">
    @if ($a->Status === "H") Hadir @endif
    @if ($a->Status === "I") Izin  @endif
    @if ($a->Status === "S") Sakit @endif
    @if ($a->Status === "A") Alpha @endif
    </label>
</div>
@endforeach

@endsection
