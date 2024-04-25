@extends('partials.base')
@section('title', 'Edit Category')
@section('content')
    @if(!$errors->isEmpty())
    <div class="relative px-3 py-3 mb-4 border rounded bg-red-200 border-red-300 text-red-800  opacity-0 opacity-100 block" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>     
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>                
    @endif
    <h1 class="mt-5 mb-4">Category</h1>
    <div class="flex flex-wrap  justify-center mt-5 mb-5">
        <div class="md:w-1/3 pr-4 pl-4">
            <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                    <h5 class="mb-3">Category</h5>
                </div>
                <div class="flex-auto p-6">
                    <form  method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="category_en" class="form-label">Category in English</label>
                            <input type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="category_en" name="category_en" value="{{ old('category_en', $category['en']) }}">
                        </div>
                        <div class="mb-3">
                            <label for="category_fr" class="form-label">Category in French</label>
                            <input type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="category_fr" name="category_fr" value="{{ old('category_fr', $category['fr']) }}">
                        </div>
                        <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
