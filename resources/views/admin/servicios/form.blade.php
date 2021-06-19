
<a class="btn btn-primary" href="{{route("servicios.listar")}} ">Volver al menu anterior</a><br><br>
<div class="form-group justify-content-center">
<div class="form-group justify-content-center">
<label for="Nombre">Nombre del Servicio: </label>
<input type="text" class="form-control" name="name" value="{{  isset($service->name)?$service->name:'' }}" id="name" required>  
<small>Ejemplo: Medicina Interna</small>
</div>
<div class="form-group justify-content-center">
<label for="Descripción">Descripción del Servicio: </label> 
<textarea class="form-control form-control-lg" name="description" id="description" cols="3" rows="3">{{  isset($service->description)?$service->description:'' }}</textarea>
<small>Ejemplo: Consultas médicas y teleconsultas al alcance de la mano</small>
</div>
<div class="form-group justify-content-center">
<label class="mt-3 mb-3" for="Foto">Foto: </label>
@if (isset($service->photo))
<img class="img-thumbnail img-fluid mt-3 mb-3" src="{{ asset('storage'). '/' .$service->photo}}" alt="" style="max-height: 150px; max-width: 150px;">
@endif
<input type="file" class="form-control-file" value="" name="photo" id="photo"> 
</div>
</div>
<input  class="btn btn-success" type="submit" value="{{$modo}} datos" >
<input  class="btn btn-secondary" type="reset" value="Restablecer"> 