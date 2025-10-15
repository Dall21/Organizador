<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Inicio</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .hero {
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                  url('https://dical.es/modules/ph_simpleblog/covers/78.jpg') center/cover no-repeat;
      height: 100vh;
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
      padding: 0 15px;
    }
    .hero h1 {
      font-size: 3rem;
      font-weight: bold;
    }
    .hero p {
      font-size: 1.2rem;
      margin-top: 1rem;
    }
  </style>
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
            <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              🌐 Idioma
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="{{ base_url("idioma/es") }}">Español</a></li>
              <li><a class="dropdown-item" href="{{ base_url("idioma/en") }}">ingles</a></li>
            </ul>
          </div>

          <a href= "{{ base_url("auth/login") }}" class="btn btn-outline-light me-2">Iniciar sesión</a>
          <a href= "{{ base_url("auth/register") }}" class="btn btn-primary">Registrarse</a>
        </div>
      </div>
    </div>
  </nav>

  <section class="hero">
    <div class="container">
      <h1>{{ lang('App.home.greeting') }}</h1>
      <p>{{ lang('App.home.description') }}</p>
      <a href="#" class="btn btn-primary btn-lg mt-4">Comenzar ahora</a>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
