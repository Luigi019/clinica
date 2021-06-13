@extends('adminlte::page')

@section('title','Home')

@section('content_header')
@endsection

@section('content')

<x-card title='Todos los roles de la base de datos' btnTxt='CREAR ROL' showBtn="{{true}}" url="{{route('roles.create')}}">

    <div class='table-responsive'>
      <table id="datatable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th colspan='2'>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>
                <a>Eliminar</a>
                 <a>Editar</a>
                  <a>Detalle</a>
                
                </td>
            </tr>
           
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Opciones</th>
            </tr>
        </tfoot>
    </table>
    </div>
</x-card>
@endsection

@include('layout.inc.dataTable')