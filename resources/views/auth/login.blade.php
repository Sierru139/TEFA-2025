<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Registrasi Cuy</h2>
        <form action="" method="POST">
            @csrf
            <label for="email">email:</label>
            <input type="email" id="email" name="email">

            <br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <button>KIRIM!</button>
        </form>
</body>
</html>
