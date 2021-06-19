<a href="{{route("empleados.listar")}}">Volver al menu anterior</a><br>
<label for="Nombre">Nombre: </label>
<input type="text" name="name" id="name" value="{{ isset($employee->name)?$employee->name:'' }}" maxlength="25" onkeydown="return sololetras(event)" required>  <br>
<label for="Apellido">Apellido: </label>
<input type="text" name="lastname" value="{{ isset($employee->lastname)?$employee->lastname:'' }}" id="lastname" required>    <br>
<label for="Correo">Correo: </label>
<input type="email" name="email" value="{{ isset($employee->email)?$employee->email:'' }}" id="email" required><br>
<label for="Foto">Foto: </label>
@if (isset($employee->photo))
    <img src="{{ asset('storage'). '/' .$employee->photo}}" alt="" style="max-height: 150px; max-width: 150px;"><br>  
@endif
<input type="file" name="photo" value="" id="photo" required> <br>
<input type="submit" value="{{$modo}} datos" >
<input type="reset" value="Restablecer"> 