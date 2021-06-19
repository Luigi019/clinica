<a href="{{route("servicios.listar")}}">Volver al menu anterior</a><br>
<label for="Nombre">Nombre del Servicio: </label>
<input type="text" name="name" value="{{  isset($service->name)?$service->name:'' }}" id="name" required>  <br>
<label for="Descripción">Descripción del Servicio: </label> <br>
<input type="text" class="form-control" value="{{  isset($service->description)?$service->description:'' }}" name="description" id="description" rows="3" required> <br>
<label for="Foto">Foto: </label>
@if (isset($service->photo))
<img src="{{ asset('storage'). '/' .$service->photo}}" alt="" style="max-height: 150px; max-width: 150px;"><br>
@endif
<input type="file" value="" name="photo" id="photo" rquired> <br>
<input type="submit" value="{{$modo}} datos" >
<input type="reset" value="Restablecer"> 