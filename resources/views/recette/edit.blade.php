@extends('partials.base')
@section('title', 'Edit Recette')
@section('content')
    <h1>Edit Recette</h1>
    <div>
        <div>
            <div>
                <div>
                    <h5>EditRecette</h5>
                </div>
                <div>
                    <form method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" value="{{ old('title', $recette->title) }}">
                            @if ($errors->has('title'))
                                <div>
                                    {{$errors->first('title')}}
                                </div>
                            @endif
                        </div>
                        <div>
                            <label for="description">Description</label>
                            <textarea id="description" name="description" rows="3">{{ old('description', $recette->description) }}</textarea>
                            @if ($errors->has('description'))
                                <div>
                                    {{$errors->first('description')}}
                                </div>
                            @endif
                        </div>
                        <div>
                            <label for="completed">Completed</label>
                            <input type="hidden" name="completed" value="0">
                            <input type="checkbox" id="completed" name="completed" value="1" {{ old('completed', $recette->completed) ? 'checked' : ''}}>
                            @if ($errors->has('completed'))
                                <div>
                                    {{$errors->first('completed')}}
                                </div>
                            @endif
                        </div>
                        <div>
                            <label for="due_date">Due Date</label>
                            <input type="date" id="due_date" name="due_date" value="{{ old('due_date', $recette->due_date) }}">
                            @if ($errors->has('due_date'))
                                <div>
                                    {{$errors->first('due_date')}}
                                </div>
                            @endif
                        </div>
                        <button type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection