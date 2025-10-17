@extends('layouts.dashboard_layout')

@section('content')
<h1>Bienvenido {{ session()->get('name') }} a la pagina principal de tu organizador</h1>
@endsection 


