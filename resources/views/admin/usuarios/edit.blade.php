@extends('adminlte::page')

@section('title','Crear usuario')

@section('content_header')
<a href='{{route("user.list")}}'>Volver al listdo</a>
@endsection

@section('content')
<x-card title='Editar usuario {{$user->name}}'>
   <x-mesagge/>
<form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
    @csrf
@include('admin.usuarios.inc.form')
<div class='form-group'>
    <label for='password'>Clave secreta</label>
    <input required class='form-control' type="password" name="password" id="password" >
    <small>Debe ser mayor a 6 caracteres</small>

</div>



    <div class='form-group'>
       
        <input  type='submit' value='Aceptar' class='font-weigth-bold btn btn-outline-primary'>

    </div>

    

</form>
 
</x-card>
@endsection

@include('layout.inc.dataTable')