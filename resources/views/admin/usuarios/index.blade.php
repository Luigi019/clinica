@extends('adminlte::page')

@section('title','Home')

@section('content_header')
@endsection

@section('content')

<x-card title='Todos los usuarios de la base de datos' btnTxt='CREAR USUARIO' showBtn="{{true}}" url="{{route('user.create')}}">
<x-mesagge/>
    <div class='table-'>
    <table id="example" class="table  table-hover" width='100%' >
				<thead class="thead-dark">
					<th class="text-center">#</th>
					<th class="text-center">Nombre</th>
					<th class="text-center">Correo</th>
                    <th class="text-center">Roles</th>
					{{-- <th class="text-center"width='25%'>Permisos</th> --}}
					{{-- <th  class="text-center"width='25%'>Fecha de creaci&oacute;n</th>
					<th  class="text-center"width='25%'>Fecha de actualizaci&oacute;n</th> --}}
                    <th class="text-center">Fecha de creacion</th>
						@if(Auth::user()->can('user.delete') || Auth::user()->can('user.update'))
					<th  class="text-center">Opciones</th>
	@endif
				</thead>
				<tbody>

					@foreach ($users as $user)
					<tr>
						<td class="text-center">{{ $user->id }}</td>
						<td  class="text-center">{{ $user->name }}</td>
						<td  class="text-center">{{ $user->email }}</td>
						<td  class="text-center ">
							@foreach($user->roles as $role)
							
							<span class='bg-dark p-2 font-weight-bold'>{{ $role->name }}</span>
						
							@endforeach
						</td>
                        <td  class="text-center">{{ \Carbon\Carbon::parse($user->created_at)->format('d-m-Y') }}</td>

						{{-- <td width='25%'>{{ $usercreated_at }}</td>
						<td width='25%'>{{ $userupdated_at }}</td> --}}
						@if(Auth::user()->can('user.delete') || Auth::user()->can('user.update'))
                    <td class="text-center" >
							@can('user.delete')
								<a href="{{ route('user.destroy',['user'=>$user->id]) }}" class="btn btn-danger font-weight-bold" title="">Eliminar</a>
							@endcan
							@can('user.update')
							<a href="{{ route('user.edit',['user'=>$user->id])}}" class="btn btn-warning font-weight-bold" title="">Editar</a>
							@endcan
						
						</td>
						@endif
					</tr>
					@endforeach

				</tbody>

                <tfoot class="thead-dark">
            <tr>

                <th class="text-center">#</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Correo</th>
                <th class="text-center">Roles</th>
                {{-- <th class="text-center"width='25%'>Permisos</th> --}}
                {{-- <th  class="text-center"width='25%'>Fecha de creaci&oacute;n</th>
                <th  class="text-center"width='25%'>Fecha de actualizaci&oacute;n</th> --}}
                <th class="text-center">Fecha de creacion</th>
	@if(Auth::user()->can('user.delete') || Auth::user()->can('user.update'))
                <th  class="text-center">Opciones</th>
					@endif
            </tr>
        </tfoot>
			</table>
    </div>
</x-card>
@endsection

@include('layout.inc.dataTable')
