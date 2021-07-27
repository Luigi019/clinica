<fieldset class="form-group">
	{!! Form::label('nombreName', 'Nombre', ['class'=>'font-weight-bold']) !!}
	{!! Form::text('name', $role->name, ['placeholder'=>'Nombre del rol...','class'=>'form-control','required'=>'required']) !!}

</fieldset>
<fieldset class="form-group">
	<hr>
	<h3>Permisos</h3>
	@foreach ($roles as $key=>$permiso)

	<ul>
		<li>
            {!! Form::checkbox('permission[]', $permiso['id'], $permiso['check'],['class'=>'font-weight-bold','id'=>$permiso['id']]) !!}
			{!! Form::label($permiso["id"], $key, ['class'=>'font-weight-bold']) !!}
			
		</li>
	</ul>

	@endforeach

</fieldset>
{!! Form::submit('Guardar', ["class"=>"btn btn-primary font-weight-bold"]) !!}