@extends('partials.base')
@section('title', 'Edit Task')
@section('content')
    <h1 class="mt-5 mb-4">Edit Task</h1>
    <div class="flex flex-wrap  justify-center mt-5 mb-5">
        <div class="md:w-2/3 pr-4 pl-4">
            <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                    <h5 class="mb-3">EditTask</h5>
                </div>
                <div class="flex-auto p-6">
                    <form method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="title" name="title" value="{{ old('title', $task->title) }}">
                            @if ($errors->has('title'))
                                <div class="text-red-600 mt-2">
                                    {{$errors->first('title')}}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="description" name="description" rows="3">{{ old('description', $task->description) }}</textarea>
                            @if ($errors->has('description'))
                                <div class="text-red-600 mt-2">
                                    {{$errors->first('description')}}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="completed" class="text-gray-700 pl-6 mb-0">Completed</label>
                            <input type="hidden" name="completed" value="0">
                            <input type="checkbox" class="absolute mt-1 -ml-6" id="completed" name="completed" value="1" {{ old('completed', $task->completed) ? 'checked' : ''}}>
                            @if ($errors->has('completed'))
                                <div class="text-red-600 mt-2">
                                    {{$errors->first('completed')}}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="due_date" class="form-label">Temps de préparation</label>
                            <input type="date" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="due_date" name="due_date" value="{{ old('due_date', $task->due_date) }}">
                            @if ($errors->has('due_date'))
                                <div class="text-red-600 mt-2">
                                    {{$errors->first('due_date')}}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection