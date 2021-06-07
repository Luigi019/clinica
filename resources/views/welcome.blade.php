@extends("layout.layoutMaster")

@section("title", "Centro médico Diagnóstico Clínico")
@section("content")
@include("inc.navbar")
@include("inc.icongrid")
@include("inc.imageshow") 
@include("inc.testimonials") 
@include("inc.signupform") 


@section('js')
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
	var typed = new Typed('#typed', {

		strings: [
		'',
		'Tu salud es importante para nosotros.'

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