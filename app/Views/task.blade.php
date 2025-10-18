@extends('layouts.dashboard_layout')

@section('content')
<h1>Hola {{ session()->get('name') }} aqui podras visualizar tus tareas</h1>
@endsection 
<body>
    <div class="header-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <p class="lead">Organiza y gestiona tus tareas pendientes</p>
                </div>
                <h1>Hola {{ session()->get('name') }} aqui podras visualizar tus tareas</h1>
                <div class="col-md-4 text-end">
                    <a href="index.html" class="btn btn-light btn-lg">Ver Lista de Alumnos</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header bg-light d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tareas Pendientes</h5>
                        <div>
                            <button class="btn btn-sm btn-outline-secondary" id="filterAll">Todas</button>
                            <button class="btn btn-sm btn-outline-danger" id="filterHigh">Alta</button>
                            <button class="btn btn-sm btn-outline-warning" id="filterMedium">Media</button>
                            <button class="btn btn-sm btn-outline-info" id="filterLow">Baja</button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush" id="tasksList">
                            <li class="list-group-item task-item priority-high">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label">
                                            <h6 class="mb-1">Estudiar para examen de Matemáticas</h6>
                                            <p class="mb-1">Repasar capítulos 5-8 sobre álgebra lineal y cálculo diferencial</p>
                                            <small class="text-muted">Curso: Matemáticas Avanzadas • Fecha límite: 20/05/2023</small>
                                        </label>
                                    </div>
                                    <div class="text-end">
                                        <span class="badge bg-danger">Alta Prioridad</span>
                                        <div class="mt-2">
                                            <button class="btn btn-sm btn-outline-primary">Editar</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="list-group-item task-item priority-medium">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label">
                                            <h6 class="mb-1">Preparar presentación sobre ecosistemas</h6>
                                            <p class="mb-1">Investigar y crear diapositivas sobre los principales ecosistemas mundiales</p>
                                            <small class="text-muted">Curso: Ciencias Naturales • Fecha límite: 22/05/2023</small>
                                        </label>
                                    </div>
                                    <div class="text-end">
                                        <span class="badge bg-warning">Media Prioridad</span>
                                        <div class="mt-2">
                                            <button class="btn btn-sm btn-outline-primary">Editar</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="list-group-item task-item priority-high">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label">
                                            <h6 class="mb-1">Entregar informe de laboratorio de química</h6>
                                            <p class="mb-1">Completar análisis de resultados y conclusiones del experimento</p>
                                            <small class="text-muted">Curso: Ciencias Naturales • Fecha límite: 18/05/2023</small>
                                        </label>
                                    </div>
                                    <div class="text-end">
                                        <span class="badge bg-danger">Alta Prioridad</span>
                                        <div class="mt-2">
                                            <button class="btn btn-sm btn-outline-primary">Editar</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="list-group-item task-item priority-low">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label">
                                            <h6 class="mb-1">Leer novela "Cien años de soledad"</h6>
                                            <p class="mb-1">Leer capítulos 1-5 y preparar resumen para discusión en clase</p>
                                            <small class="text-muted">Curso: Literatura Contemporánea • Fecha límite: 25/05/2023</small>
                                        </label>
                                    </div>
                                    <div class="text-end">
                                        <span class="badge bg-info">Baja Prioridad</span>
                                        <div class="mt-2">
                                            <button class="btn btn-sm btn-outline-primary">Editar</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="list-group-item task-item priority-medium">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label">
                                            <h6 class="mb-1">Resolver problemas de física</h6>
                                            <p class="mb-1">Completar serie de ejercicios sobre cinemática y dinámica</p>
                                            <small class="text-muted">Curso: Ciencias Naturales • Fecha límite: 21/05/2023</small>
                                        </label>
                                    </div>
                                    <div class="text-end">
                                        <span class="badge bg-warning">Media Prioridad</span>
                                        <div class="mt-2">
                                            <button class="btn btn-sm btn-outline-primary">Editar</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header bg-light">
                        <h5 class="mb-0">Tareas Completadas <span class="badge bg-success">2</span></h5>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item task-item completed">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <label class="form-check-label">
                                        <h6 class="mb-1">Ensayo sobre Revolución Industrial</h6>
                                        <p class="mb-1 text-muted">Completado el 14/05/2023</p>
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item task-item completed">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <label class="form-check-label">
                                        <h6 class="mb-1">Ejercicios de álgebra básica</h6>
                                        <p class="mb-1 text-muted">Completado el 12/05/2023</p>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Agregar Nueva Tarea</h5>
                    </div>
                    <div class="card-body">
                        <form id="taskForm">
                            <div class="mb-3">
                                <label for="taskTitle" class="form-label">Título de la tarea</label>
                                <input type="text" class="form-control" id="taskTitle" placeholder="Ej: Estudiar para...">
                            </div>
                            <div class="mb-3">
                                <label for="taskDescription" class="form-label">Descripción</label>
                                <textarea class="form-control" id="taskDescription" rows="2"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="taskCourse" class="form-label">Curso</label>
                                <select class="form-select" id="taskCourse">
                                    <option value="Matemáticas">Matemáticas</option>
                                    <option value="Ciencias">Ciencias</option>
                                    <option value="Historia">Historia</option>
                                    <option value="Literatura">Literatura</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="taskDueDate" class="form-label">Fecha límite</label>
                                <input type="date" class="form-control" id="taskDueDate">
                            </div>
                            <div class="mb-3">
                                <label for="taskPriority" class="form-label">Prioridad</label>
                                <select class="form-select" id="taskPriority">
                                    <option value="low">Baja</option>
                                    <option value="medium" selected>Media</option>
                                    <option value="high">Alta</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Agregar Tarea</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-light">
                        <h5 class="mb-0">Resumen de Progreso</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tareas completadas:</span>
                            <span class="fw-bold">2/7</span>
                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 28%">28%</div>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Próxima fecha límite:</span>
                            <span class="fw-bold">18/05/2023</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tareas de alta prioridad:</span>
                            <span class="fw-bold">2</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Tareas este mes:</span>
                            <span class="fw-bold">7</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>