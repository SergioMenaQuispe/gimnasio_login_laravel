<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login</title>
    
</head>
<body>
    <form action="/api/check_login" method="post">
        <h2>Login</h2>
        <input type="text" name="nombres" placeholder="Nombre...">
        <input type="text" name="p_apellido" placeholder="Primer Apellido">
        <button type="submit">Ingresar</button>
    </form>

    <div id="message">
        @isset($message)
            {{$message}}
        @endisset
    </div>
</body>
</html>