@extends('layout.bahagia')

@section('title', 'Data Mouse')
@section('judulhalaman', 'Data Mouse')

@section('konten')

<a href="/mouse" class="btn btn-info float-left">Kembali</a>

<br />
<br />

<form action="/mouse/store" method="post">
    {{ csrf_field() }}
    <div class="form-group row">
        <label class="col-sm-3 text-right" for="merkm">Merk :</label>
        <input type="text" id="merkm" name="merkm" class="form-control col-sm-7" required="required"><br><br>
        <label class="col-sm-3 text-right" for="stockm">Stock :</label>
        <input type="number" id="stockm" name="stockm" class="form-control col-sm-7" required="required"><br><br>
        <label class="col-sm-3 text-right" for="tersedia">Ketersediaan :</label>
        <div class="col-sm-7 text-left">
            <input type="radio" id="yes" name="tersedia" value="Y" checked>
            <label for="yes">Tersedia</label><br>
            <input type="radio" id="no" name="tersedia" value="N">
            <label for="no">Habis</label><br>
        </div>
    </div>

    <input type="submit" class="btn btn-info" value="Simpan Data">
</form>

@endsection
