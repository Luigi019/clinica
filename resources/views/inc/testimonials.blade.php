
<!-- Testimonials-->
<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5">Equipo de primera linea</h2>

    </div>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        {{-- RECORRER ARREGLO DE PERSONAS --}}
        <div class="carousel-item active">
          <div class="row">
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="{{ asset ('img/testimonials-1.jpg') }}" alt="..." />
                    <h5>Dra. Yesenia Ponce <i>Medico Internista</i> </h5>
                    <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="{{ asset ('img/testimonials-2.jpg') }}" alt="..." />
                    <h5>Fred S.</h5>
                    <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="{{ asset ('img/testimonials-3.jpg') }}" alt="..." />
                    <h5>Sarah W.</h5>
                    <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                </div>
            </div>
        </div>
    </div>

{{-- FIN CARRUSEL --}}
    <div class="carousel-item ">
          <div class="row">
          
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="{{ asset ('img/testimonials-2.jpg') }}" alt="..." />
                    <h5>Fred S.</h5>
                    <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="{{ asset ('img/testimonials-3.jpg') }}" alt="..." />
                    <h5>Sarah W.</h5>
                    <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                </div>
            </div>
        </div>
    </div>

   <div class="carousel-item ">
          <div class="row">
          
           
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="{{ asset ('img/testimonials-3.jpg') }}" alt="..." />
                    <h5>Sarah W.</h5>
                    <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                </div>
            </div>
        </div>
    </div>


</div>
<a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon " aria-hidden="true"><i class='fas fa-arrow-left fa-3x text-dark'></i></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next " href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon " aria-hidden="true"><i class='fas fa-arrow-right fa-3x text-dark'></i></span>
    <span class="sr-only">Next</span>
</a>
</div>
</section>