@extends('partials.base')
@section('title', 'Recette List')
@section('content')
    <h1>Recette List</h1>
    <div class="flex flex-wrap ">
        @forelse ($recettes as $recette)
            <div class="md:w-1/2 pr-4 pl-4">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-4">
                    <div>
                        <h5>{{ $recette->title }}</h5>
                    </div>
                    <div>
                        <p class="mb-0">{{ $recette->description }}</p>
                        <ul class="list-unstyled">
                            <li><strong>Completed:</strong> {{ $recette->completed ? 'Yes' : 'No' }}</li>
                            <li><strong>Due Date:</strong> {{ $recette->due_date }}</li>
                            @isset($recette->ingredient)
                                <li><strong>Ingredient</strong>
                                    {{ $recette->ingredient->ingredient[app()->getLocale()] ?? $recette->ingredient->ingredient['en'] }}</li>
                            @endisset
                            @isset($recette->user->name)
                            <li><strong>Author:</strong> {{ $recette->user->name }}</li>
                            @endisset
                        </ul>
                    </div>
                    <div class="py-3 px-6 bg-gray-200 border-t-1 border-gray-300">
                        <div class="flex justify-end">
                            <a href="{{ route('recette.show', $recette->id) }}" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  text-clr-sec2 border-clr-sec2 hover:bg-clr-sec2 hover:text-white bg-white hover:bg-clr-sec2">View</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="relative px-3 py-3 mb-4 border rounded bg-red-200 border-red-300 text-red-800">There are no recettes to display!</div>
        @endforelse
    </div>
@endsection