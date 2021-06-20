     @section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
@endsection
<section class="testimonials text-center bg-light" id='equipo'>
    <h1 class='mb-5 '>Equipo de primera linea</h1>
    <div class="container">

        <div class="glider">
        
        @foreach ($employee as $employee)
           <div class=''>
           <div class='img-fluid'>
           <img class="img-fluid" style='border-radius:50%' width='40%' heigth='40%' src="{{asset('storage').'/'.$employee->photo}}" alt="">
           </div>
           <p><b>{{$employee->name}}  {{$employee->lastname}} <i> {{$employee->position}} </i></b></p> 
           </div>
        @endforeach
       
        </div>
       
    </div>
</section>

@section('js')
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
<script>
new Glider(document.querySelector('.glider'), {

  // `auto` allows automatic responsive
  // width calculations
   slidesToShow:'auto',
  slidesToScroll: 'auto',


 slidesToShow: 3,
  // allow mouse dragging
  draggable: true,
  // how much to scroll with each mouse delta
  dragVelocity: 1
});

</script>
@endsection