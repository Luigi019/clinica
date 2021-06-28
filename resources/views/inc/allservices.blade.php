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
                        <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Iniciar sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
          <br><br><br>

          @include('inc.login');

<section id="portfolio" class="showcase">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <br><br>
          <h2 class="service-title pad-bt15">Servicios</h2>
<br><br>
        </div>
        <table>
         @foreach ($services as $service)
        <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
          <figure>
            <img src="{{ asset('storage'). '/' .$service->photo}}" alt="Foto de {{ $service->name }}" class="img-responsive" style="max-height: 120%; max-width: 120%;">
            <figcaption>
              <h2 style="color: #5d2877;">{{ $service->name }}</h2>
              <p><b>{{ $service->description }}</b></p>
            </figcaption>
          </figure>
        </div>
         @endforeach 
        </table>
         <div class="justify-content-center">
            {!! $services->links() !!}
    </div>
      </div>
      
    </div>
   
  </section>
