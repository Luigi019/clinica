@extends("layout.layoutMaster")

@section("title", "Centro médico Diagnóstico Clínico")
@section("content")
@include("inc.navbar")
@if (Session::has('mensaje'))
	<div class="alert alert-success alert-dismissible" role="alert">

	{{	Session::get('mensaje')}}


	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	@endif
@include("inc.icongrid")
@include("inc.imageshow") 
@include("inc.testimonials") 
@include("inc.signupform") 

@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
	var typed = new Typed('#typed', {

		strings: [
			'',
		'Tu salud es importante para nosotros.',
		

		],
		typeSpeed: 100,
		backSpeed:50,
		showCursor: false,
	});
</script>
@endsection


@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">

@endsection