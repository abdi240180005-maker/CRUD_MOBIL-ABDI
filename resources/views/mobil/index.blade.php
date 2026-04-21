<!DOCTYPE html>
<html>
<head>
    <title>Data Mobil</title>
</head>
<body>

<h1>Data Mobil</h1>
<a href="/mobil/create">+ Tambah Mobil</a>

@if(session('success'))
<p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Merk</th>
    <th>Tahun</th>
    <th>Harga</th>
    <th>Aksi</th>
</tr>

@foreach($mobils as $m)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $m->nama_mobil }}</td>
    <td>{{ $m->merk }}</td>
    <td>{{ $m->tahun }}</td>
    <td>{{ $m->harga }}</td>
    <td>
        <a href="/mobil/{{ $m->id }}/edit">Edit</a>

        <form action="/mobil/{{ $m->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button onclick="return confirm('Yakin hapus?')">Hapus</button>
        </form>
    </td>
</tr>
@endforeach

</table>

</body>
</html>