<section id="portfolio" class="showcase">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="service-title pad-bt15">Servicios</h2>
<br><br>
        </div>
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
         <div class="justify-content-center">
            {!! $services->links() !!}
    </div>
      </div>
      
    </div>
   
  </section>
