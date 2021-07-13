<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Data Siswa</title>
</head>
<body>
	<h3>Data Siswa</h3>
 
	<a href="/siswa/tambah">Tambah Data Siswa</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Opsi</th>
		</tr>
		@foreach($siswa as $s)
		<tr>
			<td>{{ $s->id }}</td>
			<td>{{ $s->nama }}</td>
			<td>{{ $s->kelas }}</td>
			<td>{{ $s->alamat }}</td>
			<td>{{ $s->jk }}</td>
			<td>
				<a href="/siswa/edit/{{ $s->id }}">Edit</a>
				|
				<a href="/siswa/hapus/{{ $s->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>