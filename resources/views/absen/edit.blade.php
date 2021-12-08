@extends('layout.bahagia')

@section('title', 'Data Absensi')
@section('judulhalaman', 'Edit Absensi')

@section('konten')

<a href="/absen" class="btn btn-info float-left"> Kembali</a>

<br />
<br />

@foreach($absen as $a)
<form action="/absen/update" method="post">
    {{ csrf_field() }}
    <div class="form-group row">
        <input type="hidden" name="ida" value="{{ $a->ID }}"> <br />
        <label class="col-sm-3 text-right" for="idp">IDPegawai :</label>
        <select class="col-sm-7" id="idp" name="idp">
            @foreach($pegawai as $p)
            <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai ) selected="selected" @endif>{{
                $p->pegawai_nama }}</option>
            @endforeach
        </select><br><br>
        <label class="col-sm-3 text-right" for="dtpickerdemo">Tanggal :</label>
        <div class='input-group date col-sm-7' id='dtpickerdemo'>
            <input type='text' class="form-control" name="tanggal" value="{{ $a->Tanggal }}" required="required" />
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
            <input type="radio" id="hadir" name="status" value="H" @if ($a->Status === "H") checked="checked" @endif>
            <label for="hadir">Hadir</label><br>
            <input type="radio" id="izin" name="status" value="I" @if ($a->Status === "I") checked="checked" @endif>
            <label for="izin">Izin</label><br>
            <input type="radio" id="sakit" name="status" value="S" @if ($a->Status === "S") checked="checked" @endif>
            <label for="sakit">Sakit</label><br>
            <input type="radio" id="alpha" name="status" value="A" @if ($a->Status === "A") checked="checked" @endif>
            <label for="alpha">Alpha</label><br>
        </div>
    </div>
    <input type="submit" class="btn btn-info" value="Simpan Data">
</form>
@endforeach

@endsection
