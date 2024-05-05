<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - Panificadora "El Triunfo"</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- FontAwesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body, html {
            font-family: 'Nunito', sans-serif;
            height: 100%;
            margin: 0;
        }
        /* Este estilo es más específico */
        body {
            background-image: url('{{ asset("img/background.jpg") }}'); /* Agregar la imagen de fondo */
            background-size: cover; /* Ajustar la imagen de fondo para cubrir toda la pantalla */
            background-repeat: no-repeat; /* Evitar que la imagen de fondo se repita */
            background-position: center; /* Posicionar la imagen de fondo en el centro */
        }
        .hover:transform {
            transition: transform .2s ease-in-out;
        }
        .card {
            transition: box-shadow .3s;
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
        }
        .card:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,.3);
        }
        .background-image {
            background-image: url('{{ asset("img/pans.png") }}');
            background-size: contain;
            background-repeat: no-repeat;
            width: 450px; /* Ajusta el tamaño según lo necesites */
            height: 450px; /* Ajusta el tamaño según lo necesites */
            margin-bottom: 20px;
        }
        .login-button {
            background-color: #8B4513; /* Color café */
        }
    </style>
</head>
<body style="background-color: #EAD8C0;"> <!-- Añadido el estilo inline al cuerpo de la página -->
    <nav class="bg-[#D1BB9E] text-white shadow-lg"> <!-- Corregido el color de fondo de la barra de navegación -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <a href="{{ url('/') }}" class="flex items-center gap-2">
                    <img src="{{ asset('img/pans.png') }}" alt="Logo" class="h-20 w-20">
                    <span class="font-semibold text-xl">Panificadora "El Triunfo"</span>
                </a>
                <div>
                    @auth
                        <a href="{{ url('/home') }}" class="px-4 py-2 rounded-md text-base font-medium hover:bg-brown-600 transition ease-in-out duration-150">Inicio</a> <!-- Cambiado el color de fondo del enlace al hacer hover -->
                    @else
                        <a href="{{ route('login') }}" class="px-4 py-2 rounded-md text-base font-medium hover:bg-brown-600 transition ease-in-out duration-150 login-button">Iniciar Sesión</a> <!-- Cambiado el color de fondo del enlace al hacer hover -->
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 px-4 py-2 rounded-md text-base font-medium hover:bg-brown-600 transition ease-in-out duration-150 login-button">Registrarse</a> <!-- Cambiado el color de fondo del enlace al hacer hover -->
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <header class="w-full h-screen flex items-center justify-center">
        <div class="text-center">
            <div class="background-image mx-auto"></div>
            <h1 class="text-4xl font-extrabold sm:text-5xl text-white">
                Bienvenido a la panificadora "El Triunfo"
            </h1>
            <p class="mt-4 text-lg sm:text-xl text-white">
                Por favor iniciar sesión o registrarse para acceder.
            </p>
            <div class="mt-8">
                <a href="{{ route('register') }}" class="px-8 py-3 bg-white text-indigo-600 font-semibold rounded-lg shadow-md hover:bg-gray-100 transition ease-in-out duration-150">
                    Registrarse
                </a>
                <a href="{{ route('login') }}" class="ml-4 px-8 py-3 bg-white border border-white text-indigo-600 font-semibold rounded-lg hover:bg-gray-100 hover:text-indigo-600 transition ease-in-out duration-150">
                    Iniciar Sesión
                </a>
            </div>
        </div>
    </header>
</body>
</html>