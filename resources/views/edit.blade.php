<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<h3>Edit Data Siswa</h3>
 
	<a href="/siswa"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($siswa as $s)
	<form action="/siswa/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $s->id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $s->nama }}"> <br/>
		Kelas <input type="text" required="required" name="kelas" value="{{ $s->kelas }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $s->alamat }}</textarea> <br/>
		Jenis Kelamin <input type="text" required="required" name="jk" value="{{ $s->jk }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>