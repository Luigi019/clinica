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
    <input type="text" name="Nombre" id="Nombre" maxlength="25" onkeydown="return sololetras(event)" required>  <br>
    <label for="Apellido">Apellido: </label>
    <input type="text" name="Apellido" id="Apellido" required>    <br>
    <label for="Correo">Correo: </label>
    <input type="email" name="Correo" id="Correo" required><br>
    <label for="Foto">Foto: </label>
    <input type="file" name="Foto" id="Foto" > <br>
    <input type="submit" value="Agregar" name="Agregar">
    <input type="reset" value="Restablecer" name="Restablecer"> <br>
</form>
    </div>
</x-card>
@endsection

@include('layout.inc.dataTable')