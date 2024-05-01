@extends('partials.base')
@section('title', 'Etapes')

@section('content')
<div class="container mx-auto mt-16 mb-16">
    <div class="flex justify-center">
        <div class="w-full md:w-8/12">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h2 class="text-2xl font-semibold mb-4">Ajouter une description des étapes</h2>

                <div class="mb-4">
                    <form method="POST" action="{{ route('etapes.store') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="recette_id" class="block text-gray-700 text-sm font-bold mb-2">Recette</label>
                            <select id="recette_id" name="recette_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                @foreach($recettes as $recette)
                                    <option value="{{ $recette->id }}">{{ $recette->titre }}</option>
                                @endforeach
                            </select>
                            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description des étapes</label>
                            <textarea id="description" name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="16" required></textarea>
                        </div>

                        <!-- Ajouter un champ caché pour l'ID de la recette si nécessaire -->
                        <!-- <input type="hidden" name="recette_id" value=""> -->

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection