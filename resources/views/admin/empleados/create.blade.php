@extends('adminlte::page')

@section('title','Home')

@section('content_header')
@endsection

@section('content')
<x-card title='Crear los empleados de la base de datos'>
    <div class='form-responsive'>
<form action="{{ url('/admin/empleados/store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @include ('admin.empleados.form', ['modo'=>'Crear'])
</form>

<br>
    </div>
</x-card>
@endsection

@include('layout.inc.dataTable')