@extends('adminlte::page')

@section('title','Home')

@section('content_header')
@endsection

@section('content')
<x-card title='Editar empleado de la base de datos'>
    <div class='form-responsive'>
<form action="{{route('empleados.update' , $employee->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
   {{method_field('PUT')}}
    @include ('admin.empleados.form', ['modo'=>'Editar'])
</form>

<br>
    </div>
</x-card>
@endsection

@include('layout.inc.dataTable')