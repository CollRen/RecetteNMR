@extends('partials.base')
@section('title', 'Titre de la recette')
@section('titre', 'Titre de la recette')

@section('content')
        <div class="relative h-96 mb-8">
            <img src="{{ Vite::asset('resources/img/legumes.jpg') }}" alt="Recette" class="absolute inset-0 w-full h-full object-cover object-center rounded-lg">
        </div>
    <div class="mx-auto max-w-2xl py-8 sm:py-12 lg:py-16">

        <div class="mt-8">
            <p>La vidéo complète de la préparation de la recette</p>
        </div>
        <div class="mt-8 flex justify-center gap-x-6">
            <button class="rounded-md bg-clr-pri2 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-clr-sec2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-clr-pri2">Sauvegarder</button>
            <button class="rounded-md bg-clr-pri2 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-clr-sec2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-clr-pri2">Imprimer</button>
            <button class="rounded-md bg-clr-pri2 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-clr-sec2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-clr-pri2">Partager</button>
        </div>
        <div class="mt-8">
            <h2 class="text-xl font-semibold">Informations :</h2>
            <ul class="mt-4 flex justify-between">
                <li>Temps: X minutes</li>
                <li>Difficulté: Facile/Moyenne/Difficile</li>
                <li>Estimation de prix: X €</li>
            </ul>
        </div>
        <div class="mt-8">
            <h2 class="text-xl font-semibold">Ingrédients :</h2>
             <ul class="mt-4">
                <li>Ingrédient 1: X unités</li>
                <li>Ingrédient 2: Y unités</li>
            </ul>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold">Étapes de préparation :</h2>
            <ol class="list-decimal pl-6 mt-4">
                <li>Étape 1</li>
                <li>Étape 2</li>
                <li>Étape 3</li>
            </ol>
        </div>
        <div class="mt-8 flex justify-center gap-x-6">
            <button class="rounded-md bg-clr-pri2 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-clr-sec2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-clr-pri2">Modifier la recette</button>
            <button class="rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Supprimer la recette</button>
        </div>
    </div>
@endsection








{{-- Autres Modele --}}



{{-- @extends('partials.base')
@section('title', 'Titre de la recette')
@section('titre', 'Titre de la recette')

@section('content')
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Titre de la recette</h1>
        <img src="example_image_url" alt="Recette" class="mt-6 rounded-lg">
        <p class="mt-6 text-lg leading-8 text-clr-pri1">Description de la recette</p>
        
        <h2 class="mt-10 text-2xl font-semibold">Ingrédients :</h2>
        <ul class="list-disc pl-6 mt-4">
            <li>Ingrédient 1</li>
            <li>Ingrédient 2</li>
            <li>Ingrédient 3</li>
        </ul>
        
        <h2 class="mt-10 text-2xl font-semibold">Étapes de préparation :</h2>
        <ol class="list-decimal pl-6 mt-4">
            <li>Étape 1</li>
            <li>Étape 2</li>
            <li>Étape 3</li>
        </ol>
        
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="#" class="rounded-md bg-clr-pri2 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-clr-sec2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-clr-pri2">Modifier la recette</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Supprimer la recette</a>
        </div>
    </div>
@endsection --}}



{{-- @extends('partials.base')
@section('title', $recipe->title)
@section('titre', $recipe->title)

@section('content')
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">{{ $recipe->title }}</h1>
        <img src="{{ Vite::asset($recipe->image) }}" alt="{{ $recipe->title }}" class="mt-6 rounded-lg">
        <p class="mt-6 text-lg leading-8 text-clr-pri1">{{ $recipe->description }}</p>
        
        <h2 class="mt-10 text-2xl font-semibold">Ingrédients :</h2>
        <ul class="list-disc pl-6 mt-4">
            @foreach($recipe->ingredients as $ingredient)
                <li>{{ $ingredient }}</li>
            @endforeach
        </ul>
        
        <h2 class="mt-10 text-2xl font-semibold">Étapes de préparation :</h2>
        <ol class="list-decimal pl-6 mt-4">
            @foreach($recipe->steps as $step)
                <li>{{ $step }}</li>
            @endforeach
        </ol>
        
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="{{ route('recipe.edit', $recipe->id) }}" class="rounded-md bg-clr-pri2 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-clr-sec2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-clr-pri2">Modifier la recette</a>
            <form action="{{ route('recipe.destroy', $recipe->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-sm font-semibold leading-6 text-gray-900">Supprimer la recette</button>
            </form>
        </div>
    </div>
@endsection --}}
