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
            <a class="navbar-brand fw-bold" href="/">Organizador</a>
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
                    </div>

                    <a href="{{ base_url("auth/login") }}" class="btn btn-outline-light me-2">Iniciar sesión</a>
                    <a href="{{ base_url("auth/register") }}" class="btn btn-primary">Registrarse</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="text-center mb-4">Ingresar cuenta</h3>
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if (session('errors'))
                            <div class="alert alert-warning mb-3">
                                <ul class="mb-0">
                                    @foreach (session('errors') as $e)
                                        <li>{{ $e }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <form method="post" action="{{base_url('auth/login_attempt') }}">
                          
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="ejemplo@correo.com" required>
                            </div>

                            <!-- Contraseña -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Ingresa una contraseña" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Registrarse</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>