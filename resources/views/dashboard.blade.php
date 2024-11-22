@extends('layouts.app')

@section('content')
<div class="bg-white min-h-screen">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">Workshops</h1>

        @if(auth()->user()->role == 'student')
            <!-- Student Section -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Available Workshops</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($workshops as $workshop)
                        <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition-all">
                            <h3 class="text-lg font-semibold text-gray-800">{{ $workshop->title }}</h3>
                            <p class="text-sm text-gray-600">{{ $workshop->description }}</p>
                            <p class="text-sm text-gray-500">Date: {{ $workshop->date }}</p>
                            <p class="text-sm text-gray-500">Location: {{ $workshop->location }}</p>
                            <p class="text-sm text-gray-500">Capacity: {{ $workshop->capacity }}</p>

                            <!-- Register button -->
                            <a href="{{ route('register.workshop', $workshop->id) }}" class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 mt-4">
                                Register
                            </a>
                        </div>
                    @endforeach
                </div>

                <h2 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">Your Registered Workshops</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach(auth()->user()->workshops as $workshop)
                        <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition-all">
                            <h3 class="text-lg font-semibold text-gray-800">{{ $workshop->title }}</h3>
                            <p class="text-sm text-gray-600">{{ $workshop->description }}</p>
                            <p class="text-sm text-gray-500">Date: {{ $workshop->date }}</p>
                            <p class="text-sm text-gray-500">Location: {{ $workshop->location }}</p>

                            <!-- Cancel button for registered workshops -->
                            <form action="{{ route('workshops.cancel', $workshop->id) }}" method="POST" class="mt-4">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">
                                    Cancel Registration
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        @elseif(auth()->user()->role == 'admin')
            <!-- Admin Section -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Manage Workshops</h2>
                <div class="mb-4">
                    <a href="{{ route('workshops.create') }}" class="inline-block bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">
                        Create New Workshop
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($workshops as $workshop)
                        <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition-all">
                            <h3 class="text-lg font-semibold text-gray-800">{{ $workshop->title }}</h3>
                            <p class="text-sm text-gray-600">{{ $workshop->description }}</p>
                            <p class="text-sm text-gray-500">Date: {{ $workshop->date }}</p>
                            <p class="text-sm text-gray-500">Location: {{ $workshop->location }}</p>
                            <p class="text-sm text-gray-500">Capacity: {{ $workshop->capacity }}</p>

                            <!-- Admin Actions -->
                            <div class="mt-4 flex justify-between">
                                <a href="{{ route('workshops.edit', $workshop->id) }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">
                                    Edit
                                </a>

                                <form action="{{ route('workshops.destroy', $workshop->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
