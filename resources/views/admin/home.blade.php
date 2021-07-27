@extends('adminlte::page')

@section('title','Home')

@section('content_header')
<h1>Panel Administrativo <small>Centro médico Diagnóstico Clínico</small> </h1>
@endsection

@section('content')

<x-card>
    
    <div class="row">
        <div class="col-12">
        
			<!-- Small Boxes (Stats Boxes) -->
			<div class="row">
		<div class="col-lg-3 col-xs-6">
		
		<div class="card bg-purple rounded shadow">
			<div class="card-body">
				<div class="d-flex no-block align-items-center">
					<div class="text-white">
						<h2 class="text-white font-weight-bold">
							<a href="{{route('roles.listar')}}" class="text-white" style="font-weight: bold;">
								{{$role->count()}}
							</a>
						</h2>
						<h6 class="text-white">
							<a href="{{route('roles.listar')}}" class="text-white">
							Roles activos
							</a>
						</h6>
					</div>
					<div class="ml-auto">
						<span class="text-white display-6">
							<a href="{{route('roles.listar')}}" class="text-white">
							<i class="fa fa-edit"></i>
							</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		
	</div>
		
		<div class="col-lg-3 col-xs-6">
		
		<div class="card bg-success rounded shadow">
			<div class="card-body">
				<div class="d-flex no-block align-items-center">
					<div class="text-white">
						<h2 class="text-white font-weight-bold">
							<a href="{{route("servicios.listar")}}" class="text-white" style="font-weight: bold;">
							{{$service->count()}}
							</a>
						</h2>
						<h6 class="text-white">
							<a href="{{route("servicios.listar")}}" class="text-white">
							Servicios
							</a>
						</h6>
					</div>
					<div class="ml-auto">
						<span class="text-white display-6">
							<a href="{{route("servicios.listar")}}" class="text-white">
							<i class="far fa-check-circle"></i>
							</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		
	</div>
		
		<div class="col-lg-3 col-xs-6">
		
		<div class="card bg-info rounded shadow">
			<div class="card-body">
				<div class="d-flex no-block align-items-center">
					<div class="text-white">
						<h2 class="text-white font-weight-bold">
							<a href="{{route("user.list")}}" class="text-white" style="font-weight: bold;">
							{{ $user->count()}}
							</a>
						</h2>
						<h6 class="text-white">
							<a href="{{route("user.list")}}" class="text-white">
							Usuarios
							</a>
						</h6>
					</div>
					<div class="ml-auto">
						<span class="text-white display-6">
							<a href="{{route("user.list")}}" class="text-white">
							<i class="far fa-user-circle"></i>
							</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		
	</div>
		
    <div class="card bg-inverse text-white rounded shadow">
        <div class="card-body">
            <div class="d-flex no-block align-items-center">
                <div class="text-white">
                    <h2 class="text-white font-weight-bold">
                        <a href="{{route("empleados.listar")}}" class="text-black" style="font-weight: bold;">
							{{$employee->count()}}
                        </a>
                    </h2>
                    <h6 class="text-white">
                        <a href="{{route("empleados.listar")}}" class="text-black">
                        Empleados
                        </a>
                    </h6>
                </div>
                <div class="ml-auto">
                    <span class="text-white display-6">
                        <a href="{{route("empleados.listar")}}" class="text-black">
                            <i class="fas fa-user-nurse"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    
            </div>
    


	
		
        
<footer>
    <div>
        <div class="row gx-4 gx-lg-5 justify-content-center d-flex">
            <div class="col-lg-8 text-center ">
                <p class="text-white-75 mb-4"><i><b>Panel elaborado por  <a href="http://funnywebs.herokuapp.com/#page-top" target="_blank">Funny Webs</a></b></i></p>
               
            </div>
        </div>
    </div>
</footer>
    </div>
</div>
</x-card>
@endsection

@section('css')

@endsection

@section('js')

@endsection
