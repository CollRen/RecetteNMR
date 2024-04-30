@extends('partials.base')
@section('title', trans('lang.recipes'))

@section('content')



{{-- @foreach ($recettes as $recette)
@dd($recette['titre']) 
@endforeach --}}

{{-- @foreach ($categories as $categorie)
@dd($categorie['nom'][$locale]) 
@endforeach --}}

    <div class="bg-gray-900 py-20 px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl font-bold text-white">Découvrez nos recettes à vos goûts</h1>
    </div>
    <div class="mx-auto max-w-7xl flex px-4 sm:px-6 lg:px-8">


        <div class="w-3/4 mr-4">
            <div class="mt-12">
                <h2 class="text-2xl font-semibold text-gray-900">Catégorie choisie</h2>
                <p class="mt-2 text-gray-600">Description de la catégorie choisie</p>
                <div class="mt-6">
                    <p>la vidéo ici</p>
                    <video src=""> vidéo</video>
                </div>
            </div>

            <div class="w-3/4 mr-4">
                <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @forelse ($recettes as $recette)
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img src="{{ Vite::asset('resources/img/plat.jpg') }}" alt=""
                                class="w-full h-56 object-cover object-center">
                            <div class="p-4">
                                {{-- <h2 class="text-lg font-semibold text-gray-900">{{ $recette['titre']}}</h2> --}}
                                <h3 class="text-lg font-semibold text-gray-900">{{ $recette['titre']}}</h3>
                                <p class="mt-1 text-sm text-gray-600">{{ $recette['description'] }}</p>
                                <a href="{{ route('recette.show', $recette['id']) }}"
                                    class="block mt-2 text-sm font-semibold text-blue-600">@lang('See Recipe')</a>
                            </div>
                        </div>
                    @empty
                        <div class="relative px-3 py-3 mb-4 border rounded bg-red-200 border-red-300 text-red-800">
                            @lang('show-no-recette')!</div>
                    @endforelse

                </div>


                <div class="w-1/4">
                    <div class="mt-12">
                        <h2 class="text-2xl font-semibold text-gray-900">Filtres</h2>
                        <div class="mt-4">
                            <h3 class="text-lg font-semibold text-gray-900">Catégories</h3>
                            <ul class="mt-2">
                                <li><a href="#" class="text-blue-600 hover:underline">Catégorie 1</a></li>
                                <li><a href="#" class="text-blue-600 hover:underline">Catégorie 2</a></li>
                                <li><a href="#" class="text-blue-600 hover:underline">Catégorie 3</a></li>
                            </ul>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-semibold text-gray-900">Niveaux de difficulté</h3>
                            <ul class="mt-2">
                                <li><a href="#" class="text-blue-600 hover:underline">Facile</a></li>
                                <li><a href="#" class="text-blue-600 hover:underline">Moyen</a></li>
                                <li><a href="#" class="text-blue-600 hover:underline">Difficile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
