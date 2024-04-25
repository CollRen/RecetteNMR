@extends('partials.base')
@section('title', 'Add Task')
@section('content')
    <h1 class="mt-5 mb-4">Add Task</h1>
    <div class="flex flex-wrap  justify-center mt-5 mb-5">
        <div class="md:w-2/3 pr-4 pl-4">
            <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                    <h5 class="mb-3">Add New Task</h5>
                </div>
                <div class="flex-auto p-6">
                    <form action="{{ route('task.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="title" name="title"
                                value="{{ old('title') }}">
                            @if ($errors->has('title'))
                                <div class="text-red-600 mt-2">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <div class="text-red-600 mt-2">
                                    {{ $errors->first('description') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="completed" class="text-gray-700 pl-6 mb-0">Completed</label>
                            <input type="checkbox" class="absolute mt-1 -ml-6" id="completed" name="completed" value="1"
                                {{ old('completed') ? 'checked' : '' }}>
                            @if ($errors->has('completed'))
                                <div class="text-red-600 mt-2">
                                    {{ $errors->first('completed') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="due_date" class="form-label">Due Date</label>
                            <input type="date" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="due_date" name="due_date"
                                value="{{ old('due_date') }}">
                            @if ($errors->has('due_date'))
                                <div class="text-red-600 mt-2">
                                    {{ $errors->first('due_date') }}
                                </div>
                            @endif
                            <div class="mb-3">
                                <label for="category_id" class="form-label">Task Category</label>
                                <select name="category_id" id="category_id" class="form-select">
                                    <option value="">Select a Task Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category['id'] }}"
                                            @if ($category['id'] == old('category_id')) selected @endif>{{ $category['category'] }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('category_id'))
                                    <div class="text-red-600 mt-2">
                                        {{ $errors->first('category_id') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
