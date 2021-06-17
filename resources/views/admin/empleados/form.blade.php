<label for="Nombre">Nombre: </label>
<input type="text" name="name" id="name" value="{{ $employee->name }}" maxlength="25" onkeydown="return sololetras(event)" required>  <br>
<label for="Apellido">Apellido: </label>
<input type="text" name="lastname" value="{{ $employee->lastname }}" id="lastname" required>    <br>
<label for="Correo">Correo: </label>
<input type="email" name="email" value="{{ $employee->email }}" id="email" required><br>
<label for="Foto">Foto: </label>
{{ $employee->photo }}
<input type="file" name="photo" value="" id="photo" > <br>
<input type="submit" value="Agregar" >
<input type="reset" value="Restablecer"> 