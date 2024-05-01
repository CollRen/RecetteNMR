@extends('partials.base')
@section('title', 'Category')
@section('content')
    <h1 class="text-2xl font-bold mb-4 mt-16">List of Categories</h1>
    <div class="grid grid-cols-3 gap-4">
        @foreach ($categories as $categorie)
            <div class="bg-white rounded-lg shadow-md p-4 transition duration-300 ease-in-out transform hover:scale-105 text-center">
                <a href="{{ route('recette.index', ['categorie' => $categorie->id]) }}" class="text-black hover:underline">
                    <h2 class="text-xl font-semibold mb-2">{{ $categorie->nom[$locale] }}</h2>
                </a>
            </div>
        @endforeach
    </div>
@endsection
