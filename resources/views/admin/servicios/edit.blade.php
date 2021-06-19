@extends('adminlte::page')

@section('title','Home')

@section('content_header')
@endsection

@section('content')
<x-card title='Editar los servicios de la base de datos'>
    <div class='form-responsive'>
<form action="{{ url('/admin/servicios/store' . $service->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    {{method_field('PUT')}}
    @include ('admin.servicios.form', ['modo'=>'Editar']);
</form>

<br>
    </div>
</x-card>
@endsection

@include('layout.inc.dataTable')