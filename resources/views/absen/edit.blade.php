<!DOCTYPE html>
<html>
<head>
	<title>Data Absensi</title>
</head>
<body>

	<h2>Edit Absensi</h2>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		ID <input type="number" required="required" name="id" value="{{ $a->id }}"> <br/>
		ID Pegawai <input type="number" required="required" name="idp" value="{{ $a->id_pegawai }}"> <br/>
		Tanggal <input type="datetime-local" required="required" name="tanggal" value="{{ $a->tanggal }}"> <br/>
		Status <input type="text" required="required" name="status" value="{{ $a->status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>




