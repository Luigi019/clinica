@extends('adminlte::page')

@section('title','Home')

@section('content_header')
@endsection

@section('content')
<x-card title='Crear los empleados de la base de datos'>
    <div class='form-responsive'>
<form action="{{ url('/admin/empleados/store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="Nombre">Nombre: </label>
    <input type="text" name="name" id="name" maxlength="25" onkeydown="return sololetras(event)" required>  <br>
    <label for="Apellido">Apellido: </label>
    <input type="text" name="lastname" id="lastname" required>    <br>
    <label for="Correo">Correo: </label>
    <input type="email" name="email" id="email" required><br>
    <label for="Foto">Foto: </label>
    <input type="file" name="photo" id="photo" > <br>
    <input type="submit" value="Agregar" >
    <input type="reset" value="Restablecer"> 
</form>

<br>
    </div>
</x-card>
@endsection

@include('layout.inc.dataTable')