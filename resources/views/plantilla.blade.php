<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EcoTrack')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <header class="bg-success text-white py-3">
        <div class="container text-center">
            <h1>EcoTrack</h1>
        </div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('plantacion_vista') }}">Plantaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('plantacion.create') }}">Nueva Plantación</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </header>

    <main class="container my-5">


        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">EcoTrack © 2025 - Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
