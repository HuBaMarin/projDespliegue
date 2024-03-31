@extends("layouts.layout")

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Breeze</title>

</head>
<body>
<div class="container">
    @if (Route::has('login'))
        <span class="dark">
            @auth
                <div class="text-white">
                    Hola, {{ Auth::user()->name }}!
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class=" btn  bg-red-500 hover:bg-red-700 text-dark font-bold py-2 px-4 rounded">
                        Cerrar sesión
                    </button>
                </form>
            @else
                <span class="relative float-right top-0">
                   <button href="{{ route('login') }}"
                           class=" btn bg-blue-500 hover:bg-black-700 text-black font-bold py-2 px-4 rounded">
                    Iniciar sesión
                </button>

                @if (Route::has('register'))
                        <button href="{{ route('register') }}"
                                class=" btn bg-green-500 hover:bg-green-700 text-dark font-bold py-2 px-4 rounded">
                        Registrarse
                    </button>
                    @endif
               </span>

            @endauth
        </span>

    @endif
</div>
</body>
</html>

@section("contenido")
    <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-600 break-after-auto bg-black text-white p-4 rounded">
        ¡Bienvenido a nuestro gimnasio de vanguardia! Aquí, cada gota de sudor es un paso más cerca de tu objetivo. Cada
        repetición es un grito de guerra contra tus límites. Cada gramo de esfuerzo es un ladrillo en la fortaleza de tu
        mejor versión.
        <br><br>
        No importa cuán lejos creas que estás de tu meta, recuerda: cada paso cuenta. No se trata de ser el más rápido o
        el más fuerte, se trata de ser un poco mejor que ayer.
        <br><br>
        Aquí, en nuestro gimnasio, no solo forjamos músculos, forjamos carácter, determinación y resiliencia. No importa
        tu nivel de condición física, tu edad o tus metas, estamos aquí para apoyarte en cada paso del camino.
        <br><br>
        Así que, ¿estás listo para desafiar tus límites y descubrir de lo que eres capaz? ¡Vamos a hacerlo juntos! ¡Es
        hora de sudar, esforzarte y superarte! ¡Es tu momento, es tu gimnasio! 💪
    </p>

@endsection
