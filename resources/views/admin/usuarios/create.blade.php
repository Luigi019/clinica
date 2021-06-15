@extends('adminlte::page')

@section('title','Home')

@section('content_header')
@endsection

@section('content')
<x-card title='Crear los usuarios de la base de datos'>
    <div class='form-responsive'>
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="Nombre" id="Nombre" >
    <input type="text" name="Apellido" id="Apellido" >
    <input type="email" name="Correo" id="Correo" >
    <input type="password" name="password" id="password" >
    <input type="password" name="password2" id="password2" >
    <input type="file" name="Foto" id="Foto" >

</form>
    </div>
</x-card>
@endsection

@include('layout.inc.dataTable')