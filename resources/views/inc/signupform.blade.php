
        <!-- Call to Action-->
        <section class=" text-center" id="signup">
            <div class="contactanos">
                <form method="post" id="contactForm" action="{{ route('sendMail') }}">
                    @csrf 
                    <div class="input-group">
                    <div class="form">
                      
                        <h1> ¡Contactanos!</h1>
                        <div class="grupo">
                            <input type="text" name="inputName" id="inputName" required onkeydown="return sololetras(event)"><span class="barra" ></span>
                            <label>Nombre Completo</label>
                        </div>
                        <div class="grupo">
                            <input type="email" name="inputEmail" id="inputEmail" required><span class="barra"></span>
                            <label>Email</label>
                        </div>
                        <div class="grupo">
                            <input type="number" name="inputPhone" id="inputPhone" required><span class="barra"></span>
                            <label>Número de Contacto</label>
                        </div>
                        <div class="grupo">
                            <textarea name="inputMessage" id="inputMessage" rows="3" required placeholder="Mensaje"></textarea><span class="barra"></span>
                        </div>
                        <button type="submit">Enviar Email</button>
                    </div>
                </div>
                </form>
            </div>
          
        </section>
        @section("js")




                                <script> 



                                    @if(session('swal'))

                                    swal({
                                      title: "Gracias por contactarnos!",
                                      text: "¡Nos pondremos en contacto con usted lo antes posible!",
                                      icon: "success",
                                      button: "Aceptar",
                                  });

                                    @endif

                                </script>



                                @endsection