@extends('layout.bahagia')

@section('title', 'Data Absensi')
@section('judulhalaman', 'Data Absensi')

@section('konten')

<a href="/absen/tambah" class="btn btn-info" float-right> + Tambah Absensi Baru</a>

<br />
<br />

<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>ID Pegawai</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
    </thead>
    @foreach($absen as $a)
    <tr>
        <td>{{ $a->IDPegawai }}</td>
        <td>{{ $a->Tanggal }}</td>
        <td>{{ $a->Status }}</td>
        <td>
            <a href="/absen/edit/{{ $a->ID }}">Edit</a>
            |
            <a href="/absen/hapus/{{ $a->ID }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

<p>
    Keterangan Status: <br>
    H : Hadir <br>
    I : Izin <br>
    S : Sakit <br>
    A : Alpha <br>
</p>

@endsection
