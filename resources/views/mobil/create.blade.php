<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mobil</title>
</head>
<body>

<h1>Tambah Mobil</h1>

<a href="/mobil">← Kembali</a>

<form action="/mobil" method="POST">
@csrf

<p>Nama Mobil</p>
<input type="text" name="nama_mobil" required>

<p>Merk</p>
<input type="text" name="merk" required>

<p>Tahun</p>
<input type="number" name="tahun" required>

<p>Harga</p>
<input type="number" name="harga" required>

<br><br>
<button type="submit">Simpan</button>

</form>

</body>
</html>