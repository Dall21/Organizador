@extends('layouts.dashboard_layout')

@section('content')
<h1>Hola {{ session()->get('name') }} aqui podras editar tu perfil</h1>
<h1>Name:</h1>
<h2>{{ session()->get(key: 'name') }}</h2>
<h1>Email:</h1>
<h2>{{ session()->get('email') }}</h2>
<div class="column">
    <input type="image" src="{{ session()->get('image_path') ?? base_url('assets/default_avatar.jpg') }}" alt="">
<button onclick="">Edit Photo</button>
<button>Delte Photo</button>
</div>
<hr>
<button >Edit Profile</button>
<button>Change password</button>
@endsection 