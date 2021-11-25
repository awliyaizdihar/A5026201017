<!DOCTYPE html>
<html>
<head>
	<title>Data Absensi</title>
</head>
<body>

	<h2>Data Absensi</h2>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		ID <input type="number" name="id" required="required"> <br/>
		ID Pegawai <input type="number" name="idp" required="required"> <br/>
		Tanggal <input type="datetime-local" name="tanggal" required="required"> <br/>
		Status <input type="text" name="status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
