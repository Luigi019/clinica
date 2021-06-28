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
         <br>
         <div class="justify-content-center">
          <a href="{{ route('service') }}" target="_blank" class="btn btn" style=" background: #5d2877;
            background: -webkit-linear-gradient(to right, #029bd8, #5d2877);
            background: linear-gradient(to right, #029bd8, #5d2877);
            display: block;
            width: 100px;
            height: 40px;
            border:none;
            color:#fff; 
            border-radius: 4px;
            font-size: 16px;
            margin: 10px auto;
            cursor: pointer; text-align: center;">
            <strong>Ver más</strong>
            
          </a>
    </div>
      </div>
      
    </div>
   
  </section>
