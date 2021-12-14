@extends('layout.bahagia')

@section('title', 'Data Pegawai')
@section('judulhalaman', 'Detail Pegawai')

@section('konten')

<a href="/pegawai" class="btn btn-info float-left">Kembali</a>

<br />
<br />

@foreach($pegawai as $p)

<!-- <table>
    <tr>
        <td>Nama :</td>
        <td>{{ $p->pegawai_nama }}</td>
    </tr>
    <tr>
        <td>Jabatan :</td>
        <td>{{ $p->pegawai_jabatan }}</td>
    </tr>
    <tr>
        <td>Umur :</td>
        <td>{{ $p->pegawai_umur }}</td>
    </tr>
    <tr>
        <td>>Alamat :</td>
        <td>{{ $p->pegawai_alamat }}</td>
    </tr>
</table> -->

<div class="form-group row">
    <!-- <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br /> -->
    <label class="col-sm-6 text-right" for="nama">Nama :</label>
    <label class="col-sm-6 text-left" for="nama">{{ $p->pegawai_nama }}</label>
    <!-- <input type="text" id="nama" name="nama" class="form-control col-sm-7" value="{{ $p->pegawai_nama }}"
        required="required"><br><br> -->
    <label class="col-sm-6 text-right" for="jabatan">Jabatan :</label>
    <label class="col-sm-6 text-left" for="jabatan">{{ $p->pegawai_jabatan }}</label>
    <!-- <input type="text" id="jabatan" name="jabatan" class="form-control col-sm-7" value="{{ $p->pegawai_jabatan }}"
        required="required"><br><br> -->
    <label class="col-sm-6 text-right" for="umur">Umur :</label>
    <label class="col-sm-6 text-left" for="umur">{{ $p->pegawai_umur }}</label>
    <!-- <input type="text" id="umur" name="umur" class="form-control col-sm-7" value="{{ $p->pegawai_umur }}"
        required="required"><br><br> -->
    <label class="col-sm-6 text-right" for="alamat">Alamat :</label>
    <label class="col-sm-6 text-left" for="alamat">{{ $p->pegawai_alamat }}</label>
    <!-- <textarea id="alamat" name="alamat" class="col-sm-7" style="height:200px">{{ $p->pegawai_alamat }}</textarea> -->
</div>
@endforeach

@endsection
