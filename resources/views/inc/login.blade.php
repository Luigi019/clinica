<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesion</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        
        </button>
      </div>
      <div class="modal-body">
      <form class="form-signin" method="post" action="{{ route ('login') }}">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address"  name="email" required autofocus>
                <label for="inputEmail">Correo Electronico</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password"  required>
                <label for="inputPassword">Contraseña</label>
              </div>

              <div class="custom-control custom-checkbox mb-3" d-flex>
                <input type="checkbox" class="custom-control-input" id="customCheck1" name="token">
                <label class="custom-control-label" for="customCheck1">Recordar Contraseña</label>
                <a class="custom-control-label" text-style="none" href="#" data-toggle="modal" data-target="#exampleModal2">¿Olvidaste la contraseña?</a>
              </div>
         
             
      </div>
      <div class="modal-footer justify-content-center" d-flex>
 <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>-->
           <button class="btn btn-primary" type="submit">Aceptar</button>
           @csrf 
        </form>
      </div>
    </div>
  </div>
</div>
@include('inc.forgotpassword')