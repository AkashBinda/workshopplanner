@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-6">Manage Workshops</h1>

    <a href="{{ route('workshops.create') }}" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 mb-4 inline-block">
        Create Workshop
    </a>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($workshops as $workshop)
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <h3 class="text-lg font-semibold">{{ $workshop->title }}</h3>
                <p class="text-sm text-gray-600">{{ $workshop->description }}</p>
                <p class="text-sm text-gray-500">Date: {{ $workshop->date }}</p>
                <p class="text-sm text-gray-500">Location: {{ $workshop->location }}</p>
                <a href="{{ route('workshops.edit', $workshop->id) }}" class="mt-4 inline-block bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Edit</a>
                <form action="{{ route('workshops.destroy', $workshop->id) }}" method="POST" class="inline-block ml-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection
