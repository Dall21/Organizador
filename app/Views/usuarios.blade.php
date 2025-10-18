@extends('layouts.dashboard_layout')

@section('content')
<h1>Hola {{ session()->get('name') }} aqui podras visualizar tus Alumnos</h1>
@endsection 

<body>
    <div class="header-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1>Hola {{ session()->get('name') }} aqui podras visualizar tus Alumnos</h1>
                    <p class="lead">Visualización de alumnos y sus tareas pendientes</p>
                </div>
                <div class="col-md-4 text-end">
                    <a href="tareas.html" class="btn btn-light btn-lg">Ver Gestor de Tareas</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-text">Filtrar</span>
                    <input type="text" class="form-control" placeholder="Buscar alumno..." id="searchInput">
                </div>
            </div>
            <div class="col-md-4">
                <select class="form-select" id="courseFilter">
                    <option value="">Todos los cursos</option>
                    <option value="Matemáticas">Matemáticas</option>
                    <option value="Ciencias">Ciencias</option>
                    <option value="Historia">Historia</option>
                    <option value="Literatura">Literatura</option>
                </select>
            </div>
            <div class="col-md-4">
                <button class="btn btn-outline-secondary w-100" id="resetFilters">Restablecer filtros</button>
            </div>
        </div>
        <div class="row" id="studentsContainer">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card student-card h-100">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Jason Herrera</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Curso:</strong> Matemáticas Avanzadas</p>
                        <p class="card-text"><strong>Tareas Pendientes:</strong> 3</p>
                        <div class="mb-3">
                            <span class="badge bg-warning">Ejercicios álgebra</span>
                            <span class="badge bg-info">Proyecto final</span>
                            <span class="badge bg-secondary">Estudio examen</span>
                        </div>
                        <p class="card-text"><small class="text-muted">Última actualización: 15/05/2023</small></p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-sm btn-outline-primary">Ver detalles</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card student-card h-100">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">Amos Reyes</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Curso:</strong> Ciencias Naturales</p>
                        <p class="card-text"><strong>Tareas Pendientes:</strong> 2</p>
                        <div class="mb-3">
                            <span class="badge bg-danger">Informe laboratorio</span>
                            <span class="badge bg-info">Presentación ecosistemas</span>
                        </div>
                        <p class="card-text"><small class="text-muted">Última actualización: 14/05/2023</small></p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-sm btn-outline-primary">Ver detalles</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card student-card h-100">
                    <div class="card-header bg-info text-white">
                        <h5 class="card-title mb-0">Adrian Cortave</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Curso:</strong> Historia Universal</p>
                        <p class="card-text"><strong>Tareas Pendientes:</strong> 1</p>
                        <div class="mb-3">
                            <span class="badge bg-warning">Ensayo revolución industrial</span>
                        </div>
                        <p class="card-text"><small class="text-muted">Última actualización: 16/05/2023</small></p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-sm btn-outline-primary">Ver detalles</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card student-card h-100">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="card-title mb-0">David Estrada</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Curso:</strong> Literatura Contemporánea</p>
                        <p class="card-text"><strong>Tareas Pendientes:</strong> 4</p>
                        <div class="mb-3">
                            <span class="badge bg-primary">Análisis poema</span>
                            <span class="badge bg-success">Lectura novela</span>
                            <span class="badge bg-danger">Reseña crítica</span>
                            <span class="badge bg-info">Presentación autor</span>
                        </div>
                        <p class="card-text"><small class="text-muted">Última actualización: 13/05/2023</small></p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-sm btn-outline-primary">Ver detalles</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card student-card h-100">
                    <div class="card-header bg-danger text-white">
                        <h5 class="card-title mb-0">Mario Cuxil</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Curso:</strong> Matemáticas Avanzadas</p>
                        <p class="card-text"><strong>Tareas Pendientes:</strong> 2</p>
                        <div class="mb-3">
                            <span class="badge bg-warning">Problemas cálculo</span>
                            <span class="badge bg-info">Estudio examen parcial</span>
                        </div>
                        <p class="card-text"><small class="text-muted">Última actualización: 15/05/2023</small></p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-sm btn-outline-primary">Ver detalles</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card student-card h-100">
                    <div class="card-header bg-secondary text-white">
                        <h5 class="card-title mb-0">Diego Lopez</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Curso:</strong> Ciencias Naturales</p>
                        <p class="card-text"><strong>Tareas Pendientes:</strong> 3</p>
                        <div class="mb-3">
                            <span class="badge bg-primary">Experimento química</span>
                            <span class="badge bg-success">Informe biología</span>
                            <span class="badge bg-warning">Estudio células</span>
                        </div>
                        <p class="card-text"><small class="text-muted">Última actualización: 14/05/2023</small></p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-sm btn-outline-primary">Ver detalles</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Resumen de Tareas Pendientes</h5>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-md-3">
                                <div class="p-3 border rounded bg-light">
                                    <h3>15</h3>
                                    <p class="mb-0">Total Tareas</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="p-3 border rounded bg-primary text-white">
                                    <h3>6</h3>
                                    <p class="mb-0">Matemáticas</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="p-3 border rounded bg-success text-white">
                                    <h3>5</h3>
                                    <p class="mb-0">Ciencias</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="p-3 border rounded bg-info text-white">
                                    <h3>4</h3>
                                    <p class="mb-0">Humanidades</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>