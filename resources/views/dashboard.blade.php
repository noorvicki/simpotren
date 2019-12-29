<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>

 <h1>Ini halaman dashboard</h1>

 <h3>Selamat datang {{auth()->user()->nama}}</h3>

<a href="/logout" class="btn btn-primary">Kembali</a>

</body>
</html>