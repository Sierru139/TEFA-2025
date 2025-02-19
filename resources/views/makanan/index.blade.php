<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Makanan</title>
</head>
<body>
    <div>
        <a href="/makanan/buat">Tambahkan menu</a>

        <h3>Daftar makanan :</h3>

        @foreach ($makanans as $makanan)
        <p>--------------</p>
        <img width="100px" src="/storage/{{ $makanan->gambar }}" alt="">
        <h4>{{ $makanan->nama }}</h4>
        <p>{{ $makanan->harga}}</p>
        <a href="/makanan/edit/{{$makanan->id}}">Edit</a>
        <a href="/makanan/hapus/{{$makanan->id}}">Hapus</a>
        @endforeach

    </div>
</body>
</html>
