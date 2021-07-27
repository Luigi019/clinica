@extends('adminlte::page')

@section('title','Home')

@section('content_header')
@endsection

@section('content')

<x-card title='Todos los servicios de la base de datos' btnTxt='CREAR SERVICIO' showBtn="Crear servicios" url="{{route('servicios.create')}}">
	@if (Session::has('mensaje'))
	<div class="alert alert-success alert-dismissible" role="alert">

	{{	Session::get('mensaje')}}


	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
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
						<td width='25%' class="text-center"><img class="img-thumbnail img-fluid" src="{{ asset('storage'). '/' .$service->photo}}" alt="Foto de {{ $service->name }}" style="max-height: 150px; max-width: 150px;"></td>
						{{-- <td width='25%'>{{ $rol->created_at }}</td>
						<td width='25%'>{{ $rol->updated_at }}</td> --}}
						<td class="text-center" width='25%'>
							@can('Eliminar servicios')
								<a href="{{ route('servicios.delete',$service->id) }}" class="btn btn-danger font-weight-bold" title="">Eliminar</a>
							@endcan
							@can('Editar servicios')
							<a href="{{ route('servicios.edit',$service->id)}}" class="btn btn-warning font-weight-bold" title="">Editar</a>
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
			<div class="float-right">
				{!! $Services->links() !!}
		</div>

    </div>
</x-card>
@endsection

@include('layout.inc.dataTable')
