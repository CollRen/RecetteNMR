@extends('partials.base')
@section('title', 'Etapes')

@section('content')
<div class="container mx-auto mt-16 mb-16">
    <div class="flex justify-center">
        <div class="w-full md:w-8/12">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h2 class="text-2xl font-semibold mb-4">Modifier les étapes</h2>

                <div class="mb-4">
                    <form method="POST" action="{{ route('etapes.update', $etape->id) }}">
                        @csrf
                        @method('PUT')

                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description des nouvelles étapes</label>
                        <textarea id="description" name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="16" required>{{ $etape->description }}</textarea>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Modifier l'étape</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection