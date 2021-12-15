@extends('layout.bahagia')

@section('title', 'Data Keranjang Belanja')
@section('judulhalaman', 'Data Keranjang Belanja')

@section('konten')

<div class="p-2"><a href="/keranjangbelanja/tambah" class="btn btn-info float-right">Beli</a></div>

<br />
<br />

<table class="table table-hover table-bordered">
    <tr>
        <th>Kode Pembelian</th>
        <th>Kode Barang</th>
        <th>Jumlah Pembelian</th>
        <th>Harga per item</th>
        <th>Total</th>
        <th>Action</th>
    </tr>
    @foreach($keranjangbelanja as $k)
    <tr>
        <td>{{ $k->ID }}</td>
        <td>{{ $k->KodeBarang }}</td>
        <td>{{ $k->Jumlah }}</td>
        <td>{{ number_format($k->Harga) }}</td>
        <td>{{ number_format($k->Harga * $k->Jumlah) }}</td>
        <td>
            <a href="/keranjangbelanja/hapus/{{ $k->ID }}"  class="btn btn-danger">Batal</a>
        </td>
    </tr>
    @endforeach
</table>

@endsection
