@extends('partials.base')
@section('title', $recette['titre'])

@section('content')
{{--         <div class="relative h-96 mb-8">
            <img src="{{ Vite::asset('resources/img/legumes.jpg') }}" alt="Recette" class="absolute inset-0 w-full h-full object-cover object-center rounded-lg">
        </div> --}}
    <div class="my-12 mx-auto max-w-2xl py-8 sm:py-12 lg:py-4 p-4 border-double border-4 border-sky-500 rounded-lg">

{{--         <div class="mt-8">
            <p>La vidéo complète de la préparation de la recette</p>
        </div> --}}
        <div class="mt-8 flex justify-center gap-x-6 ">
            <button class="rounded-md bg-clr-pri2 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-clr-sec2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-clr-pri2">Sauvegarder</button>
            <button class="rounded-md bg-clr-pri2 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-clr-sec2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-clr-pri2">Imprimer</button>
            <button class="rounded-md bg-clr-pri2 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-clr-sec2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-clr-pri2">Partager</button>
        </div>
        <div class="mt-8">
            <h2 class="text-xl font-semibold">Informations :</h2>
            <ul class="mt-4 flex justify-between">
                <li>Temps de préparation: {{ $recette['temps_preparation'] }} minutes</li>
                <li>Temps de cuisson: {{ $recette['temps_cuisson'] }} minutes</li>
                <li>Auteur: {{ $auteur }}</li>
            </ul>
        </div>
        <div class="mt-8">
            <h2 class="text-xl font-semibold">Ingrédients :</h2>
            <div class="mt-4 flex items-center">
                <span>Nombre de personnes:</span>
                <button class="ml-2 px-2 py-1 border border-gray-300 rounded">-</button>
                <span class="px-2 py-1 border border-gray-300">1</span>
                <button class="px-2 py-1 border border-gray-300 rounded">+</button>
            </div>
            <ul class="mt-4">
                <li>Ingrédient 1: X unités</li>
                <li>Ingrédient 2: Y unités</li>
            </ul>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold">Étapes de préparation :</h2>
                <div>
                    <div>
                        @foreach($recette->etapes as $etape)
                            <span>{{ $etape->description }}</span>
                        @endforeach
                    </div>
                    <div>
                    <a href="/recette/{{ $recette->id }}/edit" class="mt-4 inline-block rounded-md bg-blue-500 px-2 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Ajouter d'autres étapes</a>

                    </div>
                </div>          
        </div>
    </div>
        <div class="mt-8 flex justify-center gap-x-6">
            <button class="rounded-md bg-clr-pri2 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-clr-sec2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-clr-pri2">Modifier la recette</button>
            <button class="rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Supprimer la recette</button>
        </div>
@endsection