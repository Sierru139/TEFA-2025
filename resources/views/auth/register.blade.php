<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    h1 {
    }
    label {
        font-size: 30px;
    }
    input {
        padding: 10px;
        margin: 10px 0;
    }
    button {
        padding: 10px;
    }
</style>
<body>
    <h1>Registrasi Cuy</h1>
        <form action="" method="POST">
            @csrf

            <label for="name">name:</label>
            <input type="text" id="name" name="name">
            <br>

            <label for="email">email:</label>
            <input type="email" id="email" name="email">

            <br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <button>KIRIM!</button>
        </form>
</body>
</html>
