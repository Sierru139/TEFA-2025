<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>Home</h1>
        @guest
        <p>SAYA BELUM LOGIN</p>
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        @endguest
        @auth
            <p>Halo {{auth()->user()->name}}</p>
            <p>SAYA SUDAH LOGIN</p>
            <a href="/buku">Lihat Buku</a>
            <a href="/logout">Log Out</a>
        @endauth
    </body>
</html>
