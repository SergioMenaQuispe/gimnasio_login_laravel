<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/reporte.css') }}">
    <title>{{ $nombre_cliente }}</title>
</head>
<body>
    <table>
        <tr>
            <th>Código de Entrenador</th>
            <th>Nombre de Entrenador</th>
            <th>Código de Cliente</th>
            <th>Nombre de Cliente</th>
            <th>Edad del Cliente</th>
            <th>Validacion</th>
        </tr>
        <tr>
            <th> {{ $codigo_entrenador }} </th>
            <th> {{ $nombre_entrenador }} </th>
            <th> {{ $codigo_cliente }} </th>
            <th> {{ $nombre_cliente }} </th>
            <th> {{ $edad_cliente }} </th>
            <th> {{ $validacion }} </th>
        </tr>
    </table>
</body>
</html>