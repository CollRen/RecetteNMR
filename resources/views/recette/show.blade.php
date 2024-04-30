@extends('partials.base')
@section('title', 'Recette')
@section('content')
    <h1>Recette</h1>
    <div class="flex flex-wrap  justify-center">
        <div>
            <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-5">
                <div>
                    <h5>{{ $recette->title }}</h5>
                </div>
                <div>
                    <p class="mb-0">{{ $recette->description }}</p>
                    <ul class="list-unstyled">
                        <li><strong>Completed:</strong> {{ $recette->completed ? 'Yes' : 'No' }}</li>
                        <li><strong>Due Date:</strong> {{ $recette->due_date }}</li>
{{--                         <li><strong>Author:</strong> {{ $recette->user->name }}</li> pour l'instant ça marche pas --}}
                        <li><strong>Ingredient:</strong>
                            {{ $recette->ingredient ? $recette->ingredient->ingredient[app()->getLocale()] ?? $recette->ingredient->ingredient['en'] : '' }}
                        </li>
                    </ul>
                </div>
                <div class="py-3 px-6 bg-gray-200 border-t-1 border-gray-300 flex justify-between">
                    <a href="{{ route('recette.edit', $recette->id) }}" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  text-green-500 border-green-500 hover:bg-green-500 hover:text-white bg-white hover:green-600">Edit</a>
                    <button type="button" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  text-red-600 border-red-600 hover:bg-red-600 hover:text-white bg-white hover:bg-red-700" data-bs-toggle="modal"
                        data-bs-target="#deleteModal">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- Bootstrap Modal --}}
    <div class="modal opacity-0" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-red-600" id="DeleteModalLabel">DELETE</h1>
                    <button type="button"  data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure to delete this recette?
                </div>
                <div class="modal-footer">
                    <button type="button" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  bg-gray-600 text-white hover:bg-gray-700" data-bs-dismiss="modal">Cancel</button>
                    <form method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  bg-red-600 text-white hover:bg-red-700">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

