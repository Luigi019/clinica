@extends('layout.layoutMaster')

@section('content')
<form method='post' action='{{route("resetPassword")}}'>
    @csrf
    <input type='email' name='email' value="{{ request()->only('email')['email'] }}">
    <input type='password' name='password'>

    <input type='text' name='token' hidden  value="{{ $token }}">
    <input type='submit' value='Aceptar'>

</form>
@endsection