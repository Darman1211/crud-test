<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h3>Tambah Data Siswa</h3>
 
	<a href="/siswa"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/siswa/input" method="post">
		{{ csrf_field() }}
		ID <input type="text" name="id" required="required"> <br/>
		Nama <input type="text" name="nama" required="required"> <br/>
		Kelas <input type="text" name="kelas" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		Jenis Kelamin <input type="text" name="jk" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>