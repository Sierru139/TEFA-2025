<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tambahkan Buku</h1>
    <form action="/buku" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nama">nama</label>
        <input type="text" name="nama" id="nama">

        <label for="harga">harga</label>
        <input type="text" name="harga" id="harga">

        <label for="gambar">gambar</label>
        <input type="file" name="gambar" id="gambar">

        <button>Simpan</button>
    </form>
</body>
</html>
