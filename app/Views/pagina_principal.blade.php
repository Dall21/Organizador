@extends('layouts.dashboard_layout')

@section('content')
<h1>Bienvenido {{ session()->get('name') }} a la pagina principal de tu organizador</h1>
@endsection 

<body>
    <!-- Header -->
    <div class="bg-primary text-white py-4 mb-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                 <h1>Bienvenido {{ session()->get('name') }} a la pagina principal de tu organizador</h1>   
                </div>
                <div class="col-md-4 text-end">
                    <div class="dropdown">
                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Mi Cuenta
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Estadísticas -->
        <div class="row mb-4">
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h4 class="text-primary">24</h4>
                        <p class="mb-0">Estudiantes</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h4 class="text-success">15</h4>
                        <p class="mb-0">Tareas</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h4 class="text-warning">3</h4>
                        <p class="mb-0">Exámenes</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h4 class="text-info">87%</h4>
                        <p class="mb-0">Asistencia</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Navegación Principal -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-light">
                        <h5 class="card-title mb-0">Acciones Principales</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <a href="alumnos.html" class="btn btn-outline-primary btn-lg">
                                Ver Lista de Alumnos
                            </a>
                            <a href="tareas.html" class="btn btn-outline-success btn-lg">
                                Gestionar Tareas
                            </a>
                            <button class="btn btn-outline-warning btn-lg">
                                Programar Examen
                            </button>
                            <button class="btn btn-outline-info btn-lg">
                                Ver Calificaciones
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Próximos Eventos -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-light">
                        <h5 class="card-title mb-0">Próximos Eventos</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <strong>Examen Matemáticas</strong>
                                    <br>
                                    <small class="text-muted">Mañana - 10:00 AM</small>
                                </div>
                                <span class="badge bg-danger">Urgente</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <strong>Reunión de Padres</strong>
                                    <br>
                                    <small class="text-muted">2 días - 4:00 PM</small>
                                </div>
                                <span class="badge bg-warning">Importante</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <strong>Entrega Proyectos</strong>
                                    <br>
                                    <small class="text-muted">5 días</small>
                                </div>
                                <span class="badge bg-info">Pendiente</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tareas Pendientes -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <h5 class="card-title mb-0">Tareas por Revisar</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Tarea</th>
                                        <th>Curso</th>
                                        <th>Entregas Pendientes</th>
                                        <th>Fecha Límite</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ensayo Literario</td>
                                        <td>Literatura</td>
                                        <td>15</td>
                                        <td>20/05/2023</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">Revisar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Problemas de Física</td>
                                        <td>Ciencias</td>
                                        <td>22</td>
                                        <td>18/05/2023</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">Revisar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Informe de Historia</td>
                                        <td>Historia</td>
                                        <td>8</td>
                                        <td>25/05/2023</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">Revisar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notas Rápidas -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <h5 class="card-title mb-0">Notas Rápidas</h5>
                    </div>
                    <div class="card-body">
                        <textarea class="form-control" rows="3" placeholder="Escribe tus notas aquí..."></textarea>
                        <div class="mt-2 text-end">
                            <button class="btn btn-primary btn-sm">Guardar Nota</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light mt-5 py-3">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0 text-muted small">&copy; 2023 Organizador del Maestro</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
