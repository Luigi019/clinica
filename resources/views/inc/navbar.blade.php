      <!-- barra de navegación-->
        <!-- Navigation-->
        <div id="preloader"></div>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-flex" id="mainNav">
        <div class="container px-4 px-lg-5 ">
              <img class="rounded-circle" src="{{ asset('img/clinica-ico.ico') }}" alt="logo" height="100%" width="10%">
              <a class="navbar-brand" href="#page-top">{{ config('app.name') }}</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#equipo">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contactanos">Contactanos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Iniciar sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
          <br><br><br>

          @include('inc.login')

        <!-- Inicio del header-->
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5"><div id="typed">

                            </div></h1>
                            <!-- Signup form-->
                            {{--     <a class="btn btn-info transition">Hay que cambiar este boton por un boton mas bonito que rediriga a la seccion de servicios</a> --}}
                        </div>
                    </div>
                </div>
                <div class="social" style="position: fixed; top: 200px; left: 0; z-index: 10!important; list-style: none!important;">
                    <ul style="list-style-type: none;">
                        <li>
                            <a href="https://www.facebook.com/Drayessiponce" target="_blank"><i class="bi-facebook fs-3" style="color: #385b9d;"></i></a><br>
                        </li>
                        <li>
                            <a href="https://wa.me/send?phone=593963168166&text=Hola%20dra,%20quiero%20una%20consulta" target="_blank"><i class="bi-whatsapp fs-3" style="color: green;"></i></a><br>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/drayessiponc/" target="_blank"><i class="bi-instagram fs-3" style="color: #fff; border-radius: 1px; background: #f9ed32; background: -webkit-linear-gradient(to right, #f9ed32, #ee2a7b, #002aff);
                                background: linear-gradient(to right, #f9ed32, #ee2a7b, #002aff);   -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;"></i></a><br>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
  
        <!--Termina el header-->
