@extends('adminlte::page')

@section('title' , 'Perfil')

@section('content')
<x-card title='<h3>Mi perfil</h3>'>
    <x-mesagge/>
   <form method='POST' action='{{ route("update.data.user") }}'>
    @csrf
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Su nombre..." aria-describedby="name" value='{{Auth::user()->name}}'>
        <small id="name" class="text-muted">Solo letras.</small>
      </div>

      <div class="form-group">
        <label for="email">Correo electronico</label>
        <input type="text" name="email" id="email" class="form-control" placeholder="Correo..." aria-describedby="email" value='{{Auth::user()->email}}'>
        <small id="email" class="text-muted">Ejemplo: funnywebs@gmail.com</small>
      </div>
      <input type='submit' value='Actualizar' class='btn btn-primary'/>
   </form>

<form class='mt-3' action='{{route("updatePassword")}}' method='POST'>
    @csrf
    <h3>Actualizar credenciales</h3>
    <div class="form-group">
        <label for="password" class=''>Confirme su clave</label>
        <input type="password" name="confirm" id="" class="form-control" placeholder="Confirme su clave..." aria-describedby="">
      </div>
      <div class="form-group">
        <label for="password" class=''>Nueva clave</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Clave secreta..." aria-describedby="password">
        <small id="password" class="text-muted">Debe de tener mas de 6 caracteres</small>
      </div>
      <input type='submit' value='Actualizar' class='btn btn-danger'/>
</form>
</x-card>
@endsection
