@extends('layouts.dashboard_layout')

@section('content')
<h1>Hola {{ session()->get('name') }} aqui podras visualizar tus tareas</h1>
@endsection 