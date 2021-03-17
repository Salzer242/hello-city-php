@extends('layouts.app', ['title' => 'About Us'])

@section('title', 'About Us | ' . config('app.name'))

@section('content') 
    <img src="{{ asset('images/audi.jpg') }}" alt="logo" class="my-12 rounded shadow-md h-40">
    <h2 class="mb-5 text-gray-700">
        Build with <span class="text-pink-500">&hearts;</span> by LES TEACHERS DU NET.
    </h2>

    <p class="">
        <a href="{{ route('home') }}" class=" text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a>
    </p>
@endsection
