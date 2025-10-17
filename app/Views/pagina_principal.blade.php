<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Organizador</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>

                <div class="d-flex align-items-center">
                    <div class="dropdown me-3">
                        <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            🌐 Idioma
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ base_url("idioma/es") }}">Español</a></li>
                            <li><a class="dropdown-item" href="{{ base_url("idioma/en") }}">ingles</a></li>
                        </ul>

                        <body class="bg-light">

                            <!-- Navbar -->
                            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                                <div class="container">
                                    <a class="navbar-brand fw-bold" href="#">MiPanel</a>
                                    <div class="collapse navbar-collapse">
                                        <ul class="navbar-nav ms-auto">
                                            <li class="nav-item"><a class="nav-link" href="#">Perfil</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Tareas</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Editar Perfil</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>

                            <!-- Contenido principal -->
                            <div class="container mt-5 text-center">
                                <h2 class="mb-4">Bienvenido, <span class="text-primary"
                                        id="nombre-perfil">Usuario</span> 👋</h2>
                                <p class="lead">Desde aquí puedes acceder a tus tareas o editar tu información de
                                    perfil.</p>

                                <div class="mt-4">
                                    <a href="#" class="btn btn-primary me-2">Ir a Tareas</a>
                                    <a href="#" class="btn btn-outline-secondary">Editar Perfil</a>
                                </div>
                            </div>

                            <script
                                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
                        </body>

</html>