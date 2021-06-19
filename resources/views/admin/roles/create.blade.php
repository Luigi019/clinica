@extends('adminlte::page')

@section('title','Crear rol')

@section('content_header')
@endsection

@section('content')

<x-card title='CREA UN NUEVO ROl' >
    <x-mesagge />
{!! Form::open(['route'=>'roles.store','method'=>'POST']) !!}
@include('admin.roles.form',['value_temporal_permisos_checkbox'=>null])
{!! Form::close() !!}
</x-card>
@endsection

@include('layout.inc.dataTable')