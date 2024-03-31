<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sesiones</title>

</head>
<body>
<div class="container">
    @auth
        <div>
            Último inicio de sesión: {{ Auth::user()->last_login_at }}
        </div>
        <div>
            Todas las sesiones:
            <ul>
                @foreach ($sessions as $session)
                    <li>{{ $session->login_at }}</li>
                @endforeach
            </ul>
        </div>
    @endauth
</div>
</body>
</html>
