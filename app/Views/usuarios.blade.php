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

                            <div class="container mt-5">
                                <h2 class="text-center mb-4">Usuarios Registrados</h2>

                                <div class="table-responsive">
                                    <table class="table table-striped table-hover align-middle shadow-sm">
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nombre del Estudiante</th>
                                                <th scope="col">Correo</th>
                                                <th scope="col">Activo</th>
                                                <th scope="col">Administrador</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Juan Pérez</td>
                                                <td>juan@example.com</td>
                                                <td><span class="badge bg-success">Sí</span></td>
                                                <td><span class="badge bg-secondary">No</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Ana Gómez</td>
                                                <td>ana@example.com</td>
                                                <td><span class="badge bg-success">Sí</span></td>
                                                <td><span class="badge bg-warning text-dark">Sí</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Carlos López</td>
                                                <td>carlos@example.com</td>
                                                <td><span class="badge bg-danger">No</span></td>
                                                <td><span class="badge bg-secondary">No</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Botón de regreso -->
                                <div class="text-center mt-4">
                                    <a href="#" class="btn btn-secondary">⬅ Regresar al Perfil</a>
                                </div>
                            </div>

                            <script
                                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
                        </body>

</html>