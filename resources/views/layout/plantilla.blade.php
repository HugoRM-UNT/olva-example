<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OLVA COURIER</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            .object-fit-cover { object-fit: cover; }
        </style>
</head>
<body>
        <nav class="bg-white sticky top-0 shadow z-50">
            <div class="container mx-auto px-4 flex items-center justify-between h-16">
                <a href="{{ route('inicio') }}" class="flex items-center">
                    <img src="logo-olva.svg" alt="Olva" class="w-24">
                </a>
                <div class="md:hidden">
                    <button id="menuButton" aria-label="Abrir menú" class="p-2 rounded-md focus:outline-none focus:ring">
                        <svg id="menuOpenIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                </div>
                <div id="navMenu" class="hidden md:flex md:items-center md:space-x-6">
                    <a class="text-gray-700 hover:text-olva-600" href="{{ route('inicio') }}#inicio">Inicio</a>
                    <a class="text-gray-700 hover:text-olva-600" href="{{ route('acercade') }}">Acerca de</a>
                </div>
            </div>
        </nav>
        @yield('contenido')
        <script src="scripts.js"></script>
</body>
</html>