@extends('layout.bahagia')

@section('title', 'Data Absensi')
@section('judulhalaman', 'Data Absensi')

@section('konten')

<div class="d-flex align-items-center">
    <div class="p-2">
        <form action="/absen/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Absensi" value="{{ old('cari') }}">
    </div>
    <div class="p-2"><input type="submit" class="btn btn-info" value="Cari">
        </form>
    </div>
    <div class="p-2  ml-auto"><a href="/absen/tambah" class="btn btn-info float-right">+ Tambah Absensi Baru</a></div>
</div>

<!-- <a href="/absen/tambah" class="btn btn-info float-right"> + Tambah Absensi Baru</a> -->

<br />
<br />

<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>Nama Pegawai</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
    </thead>
    @foreach($absen as $a)
    <tr>
        <td>{{ $a->pegawai_nama }}</td>
        <td>{{ $a->Tanggal }}</td>
        <td>{{ $a->Status }}</td>
        <td>
            <a href="/absen/view/{{ $a->ID }}">View Detail</a>
            |
            <a href="/absen/edit/{{ $a->ID }}">Edit</a>
            |
            <a href="/absen/hapus/{{ $a->ID }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

{{ $absen->links() }}

<p>
    Keterangan Status: <br>
    H : Hadir <br>
    I : Izin <br>
    S : Sakit <br>
    A : Alpha <br>
</p>

@endsection
