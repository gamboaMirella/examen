<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="bg-blue-800 text-white p-4">
        <nav class="container mx-auto">
            <ul class="flex space-x-4">
                <li>
                    <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'text-orange-500' : '' }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('servicios') }}" class="{{ request()->is('servicios') ? 'text-orange-500' : '' }}">
                        Servicios
                    </a>
                </li>
                <li>
                    <a href="{{ route('proyectos') }}" class="{{ request()->is('proyectos') ? 'text-orange-500' : '' }}">
                        Proyectos
                    </a>
                </li>
                <li>
                    <a href="{{ route('clientes.index') }}" class="{{ request()->is('clientes*') ? 'text-orange-500' : '' }}">
                        Clientes
                    </a>
                </li>
                <li>
                    <a href="{{ route('blog') }}" class="{{ request()->is('blog') ? 'text-orange-500' : '' }}">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="{{ route('contacto') }}" class="{{ request()->is('contacto') ? 'text-orange-500' : '' }}">
                        Contacto
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="container mx-auto mt-8">
        @yield('content')
    </main>
</body>
</html>
