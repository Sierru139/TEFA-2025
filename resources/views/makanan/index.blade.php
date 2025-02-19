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
        <h3>Daftar makanan :</h3>
        <img width="100px" src="/imgs/naspad.jpg" alt="">
        <h4>Nasi Padang</h4>
        <p>Rp30.000</p>

        @foreach ($makanans as $makanan)
        <img width="100px" src="{{ $makanan->gambar }}" alt="">
        <h4>{{ $makanan->nama }}</h4>
        <p>{{ $makanan->harga}}</p>
        @endforeach
    </div>
</body>
</html>
