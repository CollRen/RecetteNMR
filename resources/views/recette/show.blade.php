@extends('partials.base')
@section('title', $recette['titre'])

@section('content')
{{--         <div class="relative h-96 mb-8">
            <img src="{{ Vite::asset('resources/img/legumes.jpg') }}" alt="Recette" class="absolute inset-0 w-full h-full object-cover object-center rounded-lg">
        </div> --}}
    <div class="mx-auto max-w-2xl py-8 sm:py-12 lg:py-4">

{{--         <div class="mt-8">
            <p>La vidéo complète de la préparation de la recette</p>
        </div> --}}
        <div class="mt-8 flex justify-center gap-x-6">
            <button class="rounded-md bg-clr-pri2 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-clr-sec2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-clr-pri2">Sauvegarder</button>
            <button class="rounded-md bg-clr-pri2 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-clr-sec2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-clr-pri2">Imprimer</button>
            <button class="rounded-md bg-clr-pri2 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-clr-sec2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-clr-pri2">Partager</button>
        </div>
        <div class="mt-8">
            <h2 class="text-xl font-semibold">Informations :</h2>
            <ul class="mt-4 flex justify-between">
                <li>Temps de préparation: {{ $recette['temps_preparation'] }} minutes</li>
                <li>Temps de cuisson: {{ $recette['temps_cuisson'] }} minutes</li>
                {{-- <li>Auteur: {{ $auteur }}</li> --}}
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
            <ol class="list-decimal pl-6 mt-4">
                <li>Étape 1</li>
                <li>Étape 2</li>
                <li>Étape 3</li>
            </ol>
        </div>
        <div class="mt-8 flex justify-center gap-x-6">
            <a href=" @php echo $recette->id . '/edit' @endphp"><button class="rounded-md bg-clr-pri2 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-clr-sec2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-clr-pri2">Modifier la recette</button></a>
            <a href=""><button class="rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Supprimer la recette</button></a>
        </div>
    </div>
@endsection