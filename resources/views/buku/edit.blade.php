<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Buku</h1>
    <form action="/buku/edit/{{$bukus->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nama">nama</label>
        <input type="text" value="{{$bukus->nama}}" name="nama" id="nama">

        <label for="harga">harga</label>
        <input type="text" value="{{ $bukus->harga }}" name="harga" id="harga">

        <img src="/storage/{{$bukus->gambar}}" alt="">
        <p>Gambar saat ini, jika ingin diubah upload gambar dibawah</p>

        <label for="gambar_new">gambar</label>
        <input type="file" name="gambar_new" id="gambar_new">

        <button>Simpan</button>
    </form>
</body>
</html>
