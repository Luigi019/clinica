<a class="btn btn-primary" href="{{route("empleados.listar")}}">Volver al menu anterior</a><br><br>
<div class="form-group justify-content-center">
<div class="form-group justify-content-center">
<label for="Nombre">Nombre: </label>
<input type="text" class="form-control" name="name" id="name" value="{{ isset($employee->name)?$employee->name:'' }}" maxlength="25" onkeydown="return sololetras(event)" required>  
<small>Ejemplo: Luigi José</small>
</div>
<div class="form-group justify-content-center">
<label for="Apellido">Apellido: </label>
<input type="text" class="form-control" name="lastname" value="{{ isset($employee->lastname)?$employee->lastname:'' }}" id="lastname" required>   
<small>Ejemplo: Hernández</small>
</div>
<div class="form-group justify-content-center">
<label for="Correo">Correo: </label>
<input type="email" class="form-control" name="email" value="{{ isset($employee->email)?$employee->email:'' }}" id="email" required>
<small>Ejemplo: funnywebs0@gmail.com</small>
</div>
<div class="form-group justify-content-center">
<label class="mt-3 mb-3" for="Foto">Foto: </label>
@if (isset($employee->photo))
    <img class="img-thumbnail img-fluid mt-3 mb-3" src="{{ asset('storage'). '/' .$employee->photo}}" alt="" style="max-height: 150px; max-width: 150px;"> 
@endif
<input type="file" class="form-control-file" name="photo" value="" id="photo" > 
</div>
</div>
<input class="btn btn-success" type="submit" value="{{$modo}} datos" >
<input class="btn btn-secondary" type="reset" value="Restablecer"> 
