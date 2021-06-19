@extends('adminlte::page')

@section('title','Home')

@section('content_header')
@endsection

@section('content')
<x-card title='Crear los servicioss de la base de datos'>
    <div class='form-responsive'>
<form action="{{ url('/admin/servicios/store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @include ('admin.servicios.form', ['modo'=>'Crear']);
</form>

<br>
    </div>
</x-card>
@endsection

@include('layout.inc.dataTable')