@extends('partials.base')
@section('title', trans('lang.recipes'))
@section('titre', trans('lang.recipes'))

@section('content')
            <div class="bg-gray-900 py-20 px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl font-bold text-white">Découvrez nos forfaits à vos goûts</h1>
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

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ Vite::asset('resources/img/plat.jpg') }}" alt="forfait 1" class="w-full h-56 object-cover object-center">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900">Titre de la forfait 1</h3>
                        <p class="mt-1 text-sm text-gray-600">Description de la forfait 1</p>
                        <a href="#" class="block mt-2 text-sm font-semibold text-blue-600">Voir la forfait</a>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ Vite::asset('resources/img/plat.jpg') }}" alt="forfait 1" class="w-full h-56 object-cover object-center">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900">Titre de la forfait 1</h3>
                        <p class="mt-1 text-sm text-gray-600">Description de la forfait 1</p>
                        <a href="#" class="block mt-2 text-sm font-semibold text-blue-600">Voir la forfait</a>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ Vite::asset('resources/img/plat.jpg') }}" alt="forfait 1" class="w-full h-56 object-cover object-center">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900">Titre de la forfait 1</h3>
                        <p class="mt-1 text-sm text-gray-600">Description de la forfait 1</p>
                        <a href="#" class="block mt-2 text-sm font-semibold text-blue-600">Voir la forfait</a>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ Vite::asset('resources/img/plat.jpg') }}" alt="forfait 1" class="w-full h-56 object-cover object-center">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900">Titre de la forfait 1</h3>
                        <p class="mt-1 text-sm text-gray-600">Description de la forfait 1</p>
                        <a href="#" class="block mt-2 text-sm font-semibold text-blue-600">Voir la forfait</a>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ Vite::asset('resources/img/plat.jpg') }}" alt="forfait 1" class="w-full h-56 object-cover object-center">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900">Titre de la forfait 1</h3>
                        <p class="mt-1 text-sm text-gray-600">Description de la forfait 1</p>
                        <a href="#" class="block mt-2 text-sm font-semibold text-blue-600">Voir la forfait</a>
                    </div>
                </div>
            </div>
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



{{-- en utilisant des varialbes --}}

{{-- @extends('partials.base')
@section('title', trans('lang.recipes'))
@section('titre', trans('lang.recipes'))

@section('content')
    <div class="bg-gray-900 py-20 px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl font-bold text-white">Découvrez nos forfaits à vos goûts</h1>
    </div>
    <div class="mx-auto max-w-7xl flex px-4 sm:px-6 lg:px-8">
        <div class="w-3/4 mr-4">
            <div class="mt-12">
                <h2 class="text-2xl font-semibold text-gray-900">{{ $category }}</h2>
                <p class="mt-2 text-gray-600">{{ $description }}</p>
                <div class="mt-6">
                    <!-- Insérez votre vidéo ici -->
                </div>
            </div>
            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($recipes as $recipe)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ $recipe['image'] }}" alt="{{ $recipe['title'] }}" class="w-full h-56 object-cover object-center">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900">{{ $recipe['title'] }}</h3>
                        <p class="mt-1 text-sm text-gray-600">{{ $recipe['description'] }}</p>
                        <a href="{{ $recipe['link'] }}" class="block mt-2 text-sm font-semibold text-blue-600">Voir la forfait</a>
                    </div>
                </div>
                @endforeach
            </div>
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
@endsection --}}




{{-- un autre modele --}}

{{-- @extends('partials.base')
@section('title', trans('lang.recipes'))
@section('titre', trans('lang.recipes'))

@section('content')
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">@lang('lang.recipes')</h1>
        
        <!-- forfait 1 -->
        <div class="mt-10">
            <div class="flex items-center justify-between">
                <img src="{{ Vite::asset('resources/img/pexels-eva-bronzini.jpeg') }}" alt="forfait 1" class="w-20 h-20 rounded-full">
                <div class="ml-4">
                    <h2 class="text-lg font-semibold text-gray-900">Titre de la forfait 1</h2>
                    <p class="mt-2 text-sm text-gray-600">Description de la forfait 1</p>
                </div>
                <a href="" class="btn btn-primary">Voir la forfait</a>
            </div>
        </div>
        
        <!-- forfait 2 -->
        <div class="mt-10">
            <div class="flex items-center justify-between">
                <img src="{{ Vite::asset('resources/img/pexels-eva-bronzini.jpeg') }}" alt="forfait 2" class="w-20 h-20 rounded-full">
                <div class="ml-4">
                    <h2 class="text-lg font-semibold text-gray-900">Titre de la forfait 2</h2>
                    <p class="mt-2 text-sm text-gray-600">Description de la forfait 2</p>
                </div>
                <a href="" class="btn btn-primary">Voir la forfait</a>
            </div>
        </div>
        
        
    </div>
@endsection --}}


{{-- @extends('partials.base')
@section('title', trans('lang.recipes'))
@section('titre', trans('lang.recipes'))

@section('content')
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">@lang('lang.recipes')</h1>
        
        @foreach($recipes as $recipe)
        <div class="mt-10">
            <div class="flex items-center justify-between">
                <img src="{{ Vite::asset($recipe->image) }}" alt="{{ $recipe->title }}" class="w-20 h-20 rounded-full">
                <div class="ml-4">
                    <h2 class="text-lg font-semibold text-gray-900">{{ $recipe->title }}</h2>
                    <p class="mt-2 text-sm text-gray-600">{{ $recipe->description }}</p>
                </div>
                <a href="{{ route('recipe.show', $recipe->id) }}" class="btn btn-primary">@lang('lang.view_recipe')</a>
            </div>
        </div>
        @endforeach
        
    </div>
@endsection --}}
