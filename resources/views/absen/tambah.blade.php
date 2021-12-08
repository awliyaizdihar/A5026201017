@extends('layout.bahagia')

@section('title', 'Data Absensi')
@section('judulhalaman', 'Data Absensi')

@section('konten')

<a href="/absen" class="btn btn-info float-left"> Kembali</a>

<br />
<br />

<form action="/absen/store" method="post">
    {{ csrf_field() }}
    <div class="form-group row">
        <label class="col-sm-3 text-right" for="idp">IDPegawai :</label>
        <select class="col-sm-7" id="idp" name="idp">
            @foreach($pegawai as $p)
            <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
            @endforeach
        </select><br><br>
        <label class="col-sm-3 text-right" for="dtpickerdemo">Tanggal :</label>
        <div class='input-group date col-sm-7' id='dtpickerdemo'>
            <input type='text' class="form-control" name="tanggal" required="required" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#dtpickerdemo').datetimepicker({
                    format: 'YYYY-MM-DD hh:mm:ss',
                    showTodayButton: true,
                    locale: 'id',
                    "defaultDate": new Date(),
                });
            });
        </script>
        <label class="col-sm-3 text-right" for="status">Status :</label>
        <div class="col-sm-7 text-left">
            <input type="radio" id="hadir" name="status" value="H" checked>
            <label for="hadir">Hadir</label><br>
            <input type="radio" id="izin" name="status" value="I">
            <label for="izin">Izin</label><br>
            <input type="radio" id="sakit" name="status" value="S">
            <label for="sakit">Sakit</label><br>
            <input type="radio" id="alpha" name="status" value="A">
            <label for="alpha">Alpha</label><br>
        </div>
    </div>

    <input type="submit" class="btn btn-info" value="Simpan Data">
</form>

@endsection
