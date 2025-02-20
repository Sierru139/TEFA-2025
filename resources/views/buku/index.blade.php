<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Buku</title>
</head>
<body>
    <div>
        <a href="/buku/buat">Tambahkan</a>

        <h3>Daftar buku :</h3>

        @foreach ($bukus as $buku)
        <p>--------------</p>
        <img width="100px" src="/storage/{{ $buku->gambar }}" alt="">
        <h4>{{ $buku->nama }}</h4>
        <p>{{ $buku->harga}}</p>
        <a href="/buku/edit/{{$buku->id}}">Edit</a>
        <a href="/buku/hapus/{{$buku->id}}">Hapus</a>
        @endforeach

    </div>
</body>
</html>
