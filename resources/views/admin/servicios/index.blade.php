@extends('adminlte::page')

@section('title','Home')

@section('content_header')
@endsection

@section('content')

<x-card title='Todos los servicios de la base de datos' btnTxt='CREAR SERVICIO' showBtn="{{true}}" url="{{route('servicios.create')}}">

    <div class='table-responsive'>
    <table id="example" class="table table-responsive table-hover" >
				<thead>
					<th class="text-center">#</th>
					<th class="text-center"width='50%'>Nombre</th>
					{{-- <th class="text-center"width='25%'>Permisos</th> --}}
					{{-- <th  class="text-center"width='25%'>Fecha de creaci&oacute;n</th>
					<th  class="text-center"width='25%'>Fecha de actualizaci&oacute;n</th> --}}
					<th  class="text-center"width='50%'>Opciones</th>
				</thead>
				<tbody>

					@foreach ($roles as $rol)
					<tr>
						<td class="text-center">{{ $rol->id }}</td>
						<td width='50%' class="text-center">{{ $rol->name }}</td>
						
						{{-- <td width='25%'>{{ $rol->created_at }}</td>
						<td width='25%'>{{ $rol->updated_at }}</td> --}}
						<td class="text-center" width='50%'>
							{{-- @can('eliminar rol') --}}
								<a href="{{ route('roles.destroy',$rol->id) }}" class="btn btn-danger font-weight-bold" title="">Eliminar</a>
							{{-- @endcan --}}
							{{-- @can('modificar rol') --}}
							<a href="{{ route('roles.edit',$rol->id)}}" class="btn btn-warning font-weight-bold" title="">Editar</a>
							{{-- @endcan --}}
							{{-- @can('ver rol') --}}
							<a href="{{ route('roles.show',$rol->id)}}" class="btn btn-secondary font-weight-bold" title="">Ver</a>
							{{-- @endcan --}}
						</td>
					</tr>
					@endforeach
					
				</tbody>

                <tfoot>
            <tr>
               <th class="text-center">#</th>
					<th class="text-center"width='50%'>Nombre</th>
					{{-- <th class="text-center"width='25%'>Permisos</th> --}}
					{{-- <th  class="text-center"width='25%'>Fecha de creaci&oacute;n</th>
					<th  class="text-center"width='25%'>Fecha de actualizaci&oacute;n</th> --}}
					<th  class="text-center"width='50%'>Opciones</th>
            </tr>
        </tfoot>
			</table>
    </div>
</x-card>
@endsection

@include('layout.inc.dataTable')