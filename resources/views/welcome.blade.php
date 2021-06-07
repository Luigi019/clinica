@extends("layout.layoutMaster")

@section("title", "Centro médico Diagnóstico Clínico")
@section("content")
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
		'Tu frase favorita.'

		],
		typeSpeed: 100,
		backSpeed:50,
		showCursor: false,
	});
</script>
@endsection
@endsection