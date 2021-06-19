@extends('adminlte::page')

@section('title','Home')

@section('content_header')
@endsection

@section('content')

<x-card title='Todos los servicios de la base de datos' btnTxt='CREAR SERVICIO' showBtn="Crear servicios" url="{{route('servicios.create')}}">
	@if (Session::has('mensaje'))
	{{	Session::get('mensaje')}}

	@endif
    <div class='table-responsive'>
    <table id="example" class="table table-responsive table-hover" >
				<thead class="thead-dark">
					<th class="text-center">#</th>
					<th class="text-center"width='25%'>Nombre</th>
					<th class="text-center"width='25%'>Descripción</th>
					<th class="text-center"width='25%'>Foto</th>
					{{-- <th class="text-center"width='25%'>Permisos</th> --}}
					{{-- <th  class="text-center"width='25%'>Fecha de creaci&oacute;n</th>
					<th  class="text-center"width='25%'>Fecha de actualizaci&oacute;n</th> --}}
					<th  class="text-center"width='25%'>Opciones</th>
				</thead>
				<tbody>

					@foreach ($Services as $service)
					<tr>
						<td class="text-center">{{ $service->id }}</td>
						<td width='25%' class="text-center">{{ $service->name }}</td>
						<td width='25%' class="text-center">{{ $service->description }}</td>
						<td width='25%' class="text-center"><img src="{{ asset('storage'). '/' .$service->photo}}" alt="Foto de {{ $service->name }}" style="max-height: 150px; max-width: 150px;"></td>
						{{-- <td width='25%'>{{ $rol->created_at }}</td>
						<td width='25%'>{{ $rol->updated_at }}</td> --}}
						<td class="text-center" width='25%'>
							@can('Eliminar servicios')
								<a href="{{ route('servicios.delete',$service->id) }}" class="btn btn-danger font-weight-bold" title="">Eliminar</a>
							@endcan
							@can('Editar servicios')
							<a href="{{ route('servicios.edit',$service->id)}}" class="btn btn-warning font-weight-bold" title="">Editar</a>
							@endcan
							@can('Crear servicios')
							<a href="{{ route('servicios.show',$service->id)}}" class="btn btn-secondary font-weight-bold" title="">Ver</a>
							@endcan
						</td>
					</tr>
					@endforeach

				</tbody>

                <tfoot class="thead-dark">
            <tr>
				<th class="text-center">#</th>
				<th class="text-center"width='25%'>Nombre</th>
				<th class="text-center"width='25%'>Descripción</th>
				<th class="text-center"width='25%'>Foto</th>
				{{-- <th class="text-center"width='25%'>Permisos</th> --}}
				{{-- <th  class="text-center"width='25%'>Fecha de creaci&oacute;n</th>
				<th  class="text-center"width='25%'>Fecha de actualizaci&oacute;n</th> --}}
				<th  class="text-center"width='25%'>Opciones</th>
            </tr>
        </tfoot>
			</table>
    </div>
</x-card>
@endsection

@include('layout.inc.dataTable')
