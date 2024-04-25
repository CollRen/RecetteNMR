@extends('partials.base')
@section('title', 'Task List')
@section('content')
    <h1 class="mt-5 mb-4">Task List</h1>
    <div class="flex flex-wrap ">
        @forelse ($tasks as $task)
            <div class="md:w-1/2 pr-4 pl-4">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-4">
                    <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                        <h5 class="mb-3">{{ $task->title }}</h5>
                    </div>
                    <div class="flex-auto p-6">
                        <p class="mb-0">{{ $task->description }}</p>
                        <ul class="list-unstyled">
                            <li><strong>Completed:</strong> {{ $task->completed ? 'Yes' : 'No' }}</li>
                            <li><strong>Due Date:</strong> {{ $task->due_date }}</li>
                            @isset($task->category)
                                <li><strong>Category</strong>
                                    {{ $task->category->category[app()->getLocale()] ?? $task->category->category['en'] }}</li>
                            @endisset
                            @isset($task->user->name)
                            <li><strong>Author:</strong> {{ $task->user->name }}</li>
                            @endisset
                        </ul>
                    </div>
                    <div class="py-3 px-6 bg-gray-200 border-t-1 border-gray-300">
                        <div class="flex justify-end">
                            <a href="{{ route('task.show', $task->id) }}" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  text-clr-sec2 border-clr-sec2 hover:bg-clr-sec2 hover:text-white bg-white hover:bg-clr-sec2">View</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="relative px-3 py-3 mb-4 border rounded bg-red-200 border-red-300 text-red-800">There are no tasks to display!</div>
        @endforelse
    </div>
@endsection