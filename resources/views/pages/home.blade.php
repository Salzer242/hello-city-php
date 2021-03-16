@extends('app')



@section('content')
       <img src="{{ asset('images/Congo.jpg') }}" alt="Drapeau">
       <h1>Hello from Senegal !</h1>

       <p>It's currenty {{ date('H:i A') }}</p>
@endsection