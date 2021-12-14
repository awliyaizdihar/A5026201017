@extends('layout.bahagia')

@section('title', 'Data Mouse')
@section('judulhalaman', 'Data Mouse')

@section('konten')

<div class="d-flex align-items-center">
    <div class="p-2">
        <form action="/mouse/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Merk Mouse" value="{{ old('cari') }}">
    </div>
    <div class="p-2"><input type="submit" class="btn btn-info" value="Cari">
        </form>
    </div>
    <div class="p-2  ml-auto"><a href="/mouse/tambah" class="btn btn-info float-right">+ Tambah Mouse Baru</a></div>
</div>

<br />
<br />

<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>Merk</th>
            <th>Stock</th>
            <th>Ketersediaan</th>
            <th>Opsi</th>
        </tr>
    </thead>
    @foreach($mouse as $m)
    <tr>
        <td>{{ $m->merkmouse }}</td>
        <td>{{ $m->stockmouse }}</td>
        <td>{{ $m->tersedia }}</td>
        <td>
            <a href="/mouse/view/{{ $m->kodemouse }}">View Detail</a>
            |
            <a href="/mouse/edit/{{ $m->kodemouse }}">Edit</a>
            |
            <a href="/mouse/hapus/{{ $m->kodemouse }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

{{ $mouse->links() }}

<p>
    Keterangan Ketersediaan: <br>
    Y : Stok Tersedia <br>
    N : Stok Habis <br>
</p>

@endsection
