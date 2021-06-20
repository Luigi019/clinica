 
        <!-- Image Showcases-->
        <section class="showcase">
            @foreach ($service as $service)
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('{{ asset('storage'). '/' .$service->photo}}" alt="Foto de {{ $service->name }}" style="max-height: 100%; max-width: 100%;"')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2 style="color: #5d2877;">{{ $service->name }}</h2>
                        <p class="lead mb-0" > <b>{{ $service->description }}</b></p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('{{ asset('storage'). '/' .$service->photo}}" alt="Foto de {{ $service->name }}" style="max-height: 100%; max-width: 100%;"')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>{{ $service->name }}</h2>
                        <p class="lead mb-0">{{ $service->description }}</p>
                    </div>
                </div>
            </div>
            
            @endforeach
        </section> 