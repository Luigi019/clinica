@extends('adminlte::page')

@section('title','Home')

@section('content_header')
@endsection

@section('content')

<x-card title='Todos los empleados de la base de datos' btnTxt='CREAR EMPLEADO' showBtn="{{true}}" url="{{route('empleados.create')}}">
@if (Session::has('mensaje'))
{{	Session::get('mensaje')}}
	
@endif
    <div class='table-responsive'>
    <table id="example" class="table table-responsive table-hover table-light" >
				<thead class="thead-dark">
					<th class="text-center">#</th>
					<th class="text-center"width='20%'>Nombre</th>
					<th class="text-center"width='20%'>Apellido</th>
					<th class="text-center"width='20%'>Correo</th>
					<th class="text-center"width='20%'>Foto</th>
					{{-- <th class="text-center"width='25%'>Permisos</th> --}}
					{{-- <th  class="text-center"width='25%'>Fecha de creaci&oacute;n</th>
					<th  class="text-center"width='25%'>Fecha de actualizaci&oacute;n</th> --}}
					<th  class="text-center"width='20%'>Opciones</th>
				</thead>
				<tbody>

					@foreach ($employees as $employee)
					<tr>
						<td class="text-center">{{ $employee->id }}</td>
						<td width='20%' class="text-center">{{ $employee->name }}</td>
						<td width='20%' class="text-center">{{ $employee->lastname }}</td>
						<td width='20%' class="text-center">{{ $employee->email }}</td>
						<td width='20%' class="text-center"><img class="img-thumbnail img-fluid" src="{{ asset('storage'). '/' .$employee->photo}}" alt="Foto de {{ $employee->name }}" style="max-height: 150px; max-width: 150px;"></td>
						{{-- <td width='25%'>{{ $rol->created_at }}</td>
						<td width='25%'>{{ $rol->updated_at }}</td> --}}
						<td class="text-center" width='20%'>
							{{-- @can('eliminar rol') --}}
							<form action="{{ route('empleados.destroy',$employee->id) }}" method="GET">
								@csrf
								<input class="btn btn-danger font-weight-bold" type="submit" onclick="return confirm('¿Quieres eliminar este registro?')"
								 value="Borrar">
							</form>
								
							{{-- @endcan --}}
							{{-- @can('modificar rol') --}}
							<a href="{{ route('empleados.edit',$employee->id)}}" width="33%" class="btn btn-warning font-weight-bold" title="">Editar</a>
							{{-- @endcan --}}
							{{-- @can('ver rol') --}}
							{{-- @endcan --}}
						</td>
					</tr>
					@endforeach
					
				</tbody>

                <tfoot class="thead-dark">
            <tr>
				<th class="text-center">#</th>
				<th class="text-center"width='20%'>Nombre</th>
				<th class="text-center"width='20%'>Apellido</th>
				<th class="text-center"width='20%'>Correo</th>
				<th class="text-center"width='20%'>Foto</th>
				{{-- <th class="text-center"width='25%'>Permisos</th> --}}
				{{-- <th  class="text-center"width='25%'>Fecha de creaci&oacute;n</th>
				<th  class="text-center"width='25%'>Fecha de actualizaci&oacute;n</th> --}}
				<th  class="text-center"width='20%'>Opciones</th>
            </tr>
        </tfoot>
			</table>
    </div>
</x-card>
@endsection

@include('layout.inc.dataTable')
