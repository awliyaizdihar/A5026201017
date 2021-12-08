@extends('layout.bahagia')

@section('title', 'Data Pegawai')
@section('judulhalaman', 'Edit Pegawai')

@section('konten')

<a href="/pegawai" class="btn btn-info float-left">Kembali</a>

<br />
<br />

@foreach($pegawai as $p)
<form action="/pegawai/update" method="post">
    {{ csrf_field() }}
    <div class="form-group row">
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
        <label class="col-sm-3 text-right" for="nama">Nama :</label>
        <input type="text" id="nama" name="nama" class="form-control col-sm-7" value="{{ $p->pegawai_nama }}"
            required="required"><br><br>
        <label class="col-sm-3 text-right" for="jabatan">Jabatan :</label>
        <input type="text" id="jabatan" name="jabatan" class="form-control col-sm-7" value="{{ $p->pegawai_jabatan }}"
            required="required"><br><br>
        <label class="col-sm-3 text-right" for="umur">Umur :</label>
        <input type="text" id="umur" name="umur" class="form-control col-sm-7" value="{{ $p->pegawai_umur }}"
            required="required"><br><br>
        <label class="col-sm-3 text-right" for="alamat">Alamat :</label>
        <textarea id="alamat" name="alamat" class="col-sm-7" style="height:200px">{{ $p->pegawai_alamat }}</textarea>
    </div>
    <input type="submit" class="btn btn-info" value="Simpan Data">
</form>
@endforeach

@endsection
