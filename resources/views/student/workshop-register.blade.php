@extends('layouts.app')

@section('content')
<div class="bg-gray-100 min-h-screen py-8">
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">Register for Workshop</h1>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">{{ $workshop->title }}</h3>
            <p class="text-sm text-gray-600 mb-4">{{ $workshop->description }}</p>
            <div class="mb-4">
                <p class="text-sm text-gray-500"><span class="font-semibold">Date:</span> {{ $workshop->date }}</p>
                <p class="text-sm text-gray-500"><span class="font-semibold">Location:</span> {{ $workshop->location }}</p>
                <p class="text-sm text-gray-500"><span class="font-semibold">Capacity:</span> {{ $workshop->capacity }}</p>
            </div>

            <form action="{{ route('register.workshop.store', $workshop->id) }}" method="POST" class="mt-4">
                @csrf
                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-600 text-white py-3 px-6 rounded-lg text-lg font-semibold transition duration-300 ease-in-out transform hover:scale-105 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Register for Workshop
                    </button>
                </div>
            </form>
        </div>

        <div class="mt-6 text-center">
            <a href="{{ route('dashboard') }}" class="text-blue-500 hover:text-blue-700 text-sm">Back to Dashboard</a>
        </div>
    </div>
</div>
@endsection
