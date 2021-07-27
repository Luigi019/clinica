@extends('adminlte::page')

@section('title','Home')

@section('content_header')
@endsection

@section('content')
<x-card title='Editar rol {{ $role->name }}'>
  <x-mesagge/>
<form action="{{ route('roles.update',['role'=>$role]) }}" method='POST'>
    @method('PUT')
    @csrf
    @include ('admin.roles.form')
</form>
    
</x-card>
@endsection

