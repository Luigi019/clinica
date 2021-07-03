
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recuperar Contraseña</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        
        </button>
      </div>
      <div class="modal-body">
      <form class="form-signin" method="post" action="{{ route ('SendLinkForgotPassword') }}">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address"  name="email" required autofocus>
                <label for="inputEmail"> Correo Electronico</label>
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
