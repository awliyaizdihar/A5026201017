@extends('layout.bahagia')

@section('title', 'Data Keranjang Belanja')
@section('judulhalaman', 'Data Keranjang Belanja')

@section('konten')

<a href="/keranjangbelanja" class="btn btn-info float-left">Kembali</a>

<br />
<br />

<form action="/keranjangbelanja/store" method="post">
    {{ csrf_field() }}
    <div class="form-group row">
        <label class="col-sm-3 text-right" for="kodebarang">Kode Barang :</label>
        <input type="text" id="kodebarang" name="kodebarang" class="form-control col-sm-7" required="required"><br><br>
        <label class="col-sm-3 text-right" for="jumlah">Jumlah :</label>
        <input type="text" id="jumlah" name="jumlah" class="form-control col-sm-7" required="required"><br><br>
        <label class="col-sm-3 text-right" for="harga">Harga :</label>
        <input type="text" id="harga" name="harga" class="form-control col-sm-7" required="required"><br><br>
    </div>
    <input type="submit" class="btn btn-info" value="Beli">
</form>

@endsection
