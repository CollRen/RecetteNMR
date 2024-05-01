@extends('partials.base')
@section('title', 'Ingredient')
@section('content')
    @if (!$errors->isEmpty())

        <div class="relative px-3 py-3 mb-4 border rounded bg-red-200 border-red-300 text-red-800  opacity-0 opacity-100 block"
            role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h1 class="mt-5 mb-4">Ingredient</h1>
    <div>
        <form action="recette.storeAddIngredient" method="POST">
            @csrf
            <label for="ingredient_id">Recette Ingredient</label>
            <select name="ingredient_id" id="ingredient_id">
                <option value="">Ingrédients</option>

                @foreach ($ingredients as $ingredient)
                    <option value="{{ $ingredient['id'] }}">{{ $ingredient['nom'][$locale] }}</option>

                    @if ($ingredient['id'] == old('ingredient_id'))
                        selected
                    @endif>{{ $ingredient['ingredient'] }}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('ingredient_id'))
                <div>
                    {{ $errors->first('ingredient_id') }}
                </div>
            @endif
            <button type="submit"
                class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Save</button>
        </form>
    </div>
    <div class="flex flex-wrap  justify-center mt-5 mb-5">
        <div class="md:w-1/3 pr-4 pl-4">
            <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                    <h5 class="mb-3">Ingredient</h5>
                </div>
                <div class="flex-auto p-6">
                    <form action="{{ route('ingredient.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="ingredient_en" class="form-label">Ingredient in English</label>
                            <input type="text"
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                                id="ingredient_en" name="ingredient_en" value="{{ old('ingredient_en') }}">
                        </div>
                        <div class="mb-3">
                            <label for="ingredient_fr" class="form-label">Ingredient in French</label>
                            <input type="text"
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                                id="ingredient_fr" name="ingredient_fr" value="{{ old('ingredient_fr') }}">
                        </div>
                        <button type="submit"
                            class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
