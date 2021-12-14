@extends('layout.bahagia')

@section('title', 'Data Pegawai')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

<div class="d-flex align-items-center">
    <div class="p-2">
        <form action="/pegawai/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai" value="{{ old('cari') }}">
    </div>
    <div class="p-2"><input type="submit" class="btn btn-info" value="Cari">
        </form>
    </div>
    <div class="p-2  ml-auto"><a href="/pegawai/tambah" class="btn btn-info float-right">+ Tambah Pegawai Baru</a></div>
</div>

<br />
<br />

<table class="table table-hover table-bordered">
    <tr>
        <th>Nama</th>
        <!-- <th>Jabatan</th>
            <th>Umur</th> -->
        <th>Alamat</th>
        <th>Opsi</th>
    </tr>
    @foreach($pegawai as $p)
    <tr>
        <td>{{ $p->pegawai_nama }}</td>
        <!-- <td>{{ $p->pegawai_jabatan }}</td>
        <td>{{ $p->pegawai_umur }}</td> -->
        <td>{{ $p->pegawai_alamat }}</td>
        <td>
            <a href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>
            |
            <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
            |
            <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

{{ $pegawai->links() }}

@endsection
