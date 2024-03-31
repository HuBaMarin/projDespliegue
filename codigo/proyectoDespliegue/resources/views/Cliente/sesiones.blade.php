
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<table>
    <tr>
        <th>Usuarios registrados</th>
    </tr>
    <tr>
        <td>{{count($todos)}}</td>
    </tr>
</table>
<br>
<br>
<table class="table-auto table-responsive border-solid border-2 border-black">
    <thead class="border-solid border-2 border-black">
    <tr>
        <th>Usuario actual</th>
        <th>Fecha y hora</th>
    </tr>
    </thead>
    <tr>
      <td class="border-r-2 border-solid text-center">{{$usuarioActual->name}}</td>
        <td class="border-r-2 border-solid text-center">{{$usuarioActual->last_login_at}}</td>
    </tr>
</table>
</body>
</html>


@extends("layouts.layout")

@section("contenido")
@endsection
@section("titulo")
    proyecto laravel
@endsection
@section("descripcion")
    Proyecto de aprendizaje de laravel. usamos los diferentes elementos
@endsection


