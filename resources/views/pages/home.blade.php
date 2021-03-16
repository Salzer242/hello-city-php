@extends('app')

@section('title')
Hello City
@endsection

@section('content')
       <h1>Hello from Senegal !</h1>

       <p>It's currenty {{ date('H:i A') }}</p>
@endsection