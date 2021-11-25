<!DOCTYPE html>
<html>
<head>
	<title>Data Absensi</title>
</head>
<body>

	<h2>Data Absensi</h2>

	<a href="/absen/tambah"> + Tambah Absensi Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->id }}</td>
			<td>{{ $a->id_pegawai }}</td>
			<td>{{ $a->tanggal }}</td>
			<td>{{ $a->status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->id }}">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
