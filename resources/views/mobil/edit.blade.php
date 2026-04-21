<!DOCTYPE html>
<html>
<head>
    <title>Edit Mobil</title>
</head>
<body>

<h1>Edit Mobil</h1>

<a href="/mobil">← Kembali</a>

<form action="/mobil/{{ $mobil->id }}" method="POST">
@csrf
@method('PUT')

<p>Nama Mobil</p>
<input type="text" name="nama_mobil" value="{{ $mobil->nama_mobil }}" required>

<p>Merk</p>
<input type="text" name="merk" value="{{ $mobil->merk }}" required>

<p>Tahun</p>
<input type="number" name="tahun" value="{{ $mobil->tahun }}" required>

<p>Harga</p>
<input type="number" name="harga" value="{{ $mobil->harga }}" required>

<br><br>
<button type="submit">Update</button>

</form>

</body>
</html>