<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss'])
</head>

<body class="bg-light">

    <header>
        <!-- Navbar de Bootstrap -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand font-weight-bold text-primary" href="#">
                    Departamento de Turismo de la Diputación Foral de Álava
                </a>

                <!-- Toggler/Collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupported" aria-controls="navbarSupported" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="navbarSupported">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <!-- Más elementos del menú aquí -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-4">
        @yield('content')
    </main>

    <footer class="bg-white text-center text-dark py-4">
        <div class="container">
            @yield('footer')
        </div>
    </footer>

    @vite(['resources/js/app.js'])
</body>

</html>
