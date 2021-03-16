@extends('app')



@section('content')
       <img src="{{ asset('images/Congo.jpg') }}" alt="Drapeau" class="mt-12 rounded shadow-md h-40">

       <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Senegal !</h1>

       <p class="mt-2 text-lg text-gray-800">It's currenty {{ date('H:i A') }}</p>
@endsection