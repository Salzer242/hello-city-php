@extends('app')

@section('title', 'About Us | ' . config('app.name'))

@section('content') 
    <title>Abous Us | Hello City</title>
    <p>Build with &hearts; by LES TEACHERS DU NET.</p>

    <p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>
@endsection
