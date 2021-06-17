<label for="Nombre">Nombre del Servicio: </label>
<input type="text" name="name" value="{{  $service->name }}" id="name" required>  <br>
<label for="Descripción">Descripción del Servicio: </label> <br>
<textarea class="form-control" value="{{  $service->description }}" name="description" id="description" rows="3"></textarea>
<label for="Foto">Foto: </label>
{{ $service->photo }}
<input type="file" value="" name="photo" id="photo" > <br>
<input type="submit" value="Agregar" >
<input type="reset" value="Restablecer"> 