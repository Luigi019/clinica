<!doctype html>
<html class="no-js" lang="en">

<head>
<title> @yield("title")  </title>
    @include('layout.inc.linksMeta')
    @include('layout.inc.linksCss')
</head>
<body id="page-top">
        <!-- barra de navegación-->
     <!-- Navigation-->
        <nav class="navbar navbar-light bg-light sticky-top">
            <div class="container">
                <a class="navbar-brand img-circle" href="#!"><img class="rounded-circle" src="{{ asset('img/clinica-ico.ico') }}" alt="logo" heigth="25%" width="25%"></a>
                <a class="btn btn-sm btn-outline-primary font-weight-bold transition" href="#signup">Iniciar sesion</a>
            </div>
        </nav>
   
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
                            <a class="btn btn-info transition">Hay que cambiar este boton por un boton mas bonito que rediriga a la seccion de servicios</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<!--Termina el header-->
  @yield("content")


    @include('layout.inc.contact')
    @include('layout.inc.linksJs')

</body>
</html>
