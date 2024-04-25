@extends('partials.base')
@section('title', 'Users')
@section('content')
    <h1 class="mt-5 mb-4">Users</h1>
    <div class="flex flex-wrap  justify-center mt-5 mb-5">
        <div class="md:w-full pr-4 pl-4">
            <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mt-3">
                <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                    <h5 class="mb-3">Users</h5>
                </div>
                <div class="flex-auto p-6">
                    <table class="w-full max-w-full mb-4 bg-transparent table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">User</th>
                                <th scope="col">Tasks</th>
                                <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th>{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a
                                            href="{{ route('user.edit', $user->id) }}"class="inline-block text-xs  text-green-500 border-green-500 hover:bg-green-500 hover:text-white bg-white hover:green-600">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
