@extends('adminlte::page')

@section('title','Home')

@section('content_header')
@endsection

@section('content')
<x-card title='Editar el Servicio de la base de datos'>
    <x-mesagge />
    <div class='form-responsive'>
<form action="{{route('servicios.update' , $service->id)}}" method="POST" enctype="multipart/form-data" class="form">
    @csrf
    {{method_field('PUT')}}
    @include ('admin.servicios.form', ['modo'=>'Editar'])
</form>

<br>
    </div>
</x-card>
@endsection

@include('layout.inc.dataTable')