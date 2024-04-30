@extends('partials.base')
@section('title', 'Create Recette')
@section('content')

    <h1>Add Recette</h1>
    <div>
        <div>
            <div>
                <div>
                    <h5>Add New Recette</h5>
                </div>
                <div>
                    <form action="{{ route('recette.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="titre">titre</label>
                            <input type="text" id="titre" name="titre" value="{{ old('titre') }}">
                            @if ($errors->has('titre'))
                                <div>
                                    {{ $errors->first('titre') }}
                                </div>
                            @endif
                        </div>
                        <div>
                            <label for="description">Description</label>
                            <textarea id="description" name="description" rows="3">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <div>
                                    {{ $errors->first('description') }}
                                </div>
                            @endif
                        </div>

                        <div>
                            <label for="temps_preparation">Due Date</label>
                            <input type="number" id="temps_preparation" name="temps_preparation"
                                value="{{ old('temps_preparation') }}">
                            @if ($errors->has('temps_preparation'))
                                <div>
                                    {{ $errors->first('temps_preparation') }}
                                </div>
                            @endif
                        </div>

                        <div>
                            <label for="temps_cuisson">Due Date</label>
                            <input type="number" id="temps_cuisson" name="temps_cuisson"
                                value="{{ old('temps_cuisson') }}">
                            @if ($errors->has('temps_cuisson'))
                                <div>
                                    {{ $errors->first('temps_cuisson') }}
                                </div>
                            @endif
                            <div>

                                <label for="ingredient_id">Recette Ingredient</label>
                                <select name="ingredient_id" id="ingredient_id">
                                    <option value="">Select a Recette Ingredient</option>

                                    @foreach ($ingredients as $ingredient)
                                        <option value="{{ $ingredient['id'] }}">{{ $ingredient['nom']['en'] }}</option>

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
                            </div>
                            
                            <div>

                                <label for="category_id">Recette category</label>
                                <select name="category_id" id="category_id">
                                    <option value="">Select a Recette category</option>

                                    @foreach ($categories as $category)
                                        <option value="{{ $category['id'] }}">{{ $category['nom']['en'] }}</option>

                                        @if ($category['id'] == old('category_id'))
                                            selected
                                        @endif>{{ $category['category'] }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('category_id'))
                                    <div>
                                        {{ $errors->first('category_id') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <button type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
