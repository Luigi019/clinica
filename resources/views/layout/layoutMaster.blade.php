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
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#!"><img src="{{ asset('img/clinica-ico.ico') }}" alt="logo" heigth="25%" width="25%"></a>
                <a class="btn btn-primary" href="#signup">Crear Cuenta</a>
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
                            <form>
                                <div class="input-group input-group-lg">
                                    <input class="form-control" type="text" placeholder="Ingrese su correo..." aria-label="Enter your email..." aria-describedby="button-submit" />
                                    <button class="btn btn-primary" id="button-submit" type="button">¡Crear Cuenta!</button>
                                </div>
                            </form>
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
