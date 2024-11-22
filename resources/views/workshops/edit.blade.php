@extends('layouts.app')

@section('content')
<div class="bg-white min-h-screen">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">Edit Workshop</h1>

        <form action="{{ route('workshops.update', $workshop->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    value="{{ old('title', $workshop->title) }}"
                    required
                >
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea
                    name="description"
                    id="description"
                    rows="3"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    required
                >{{ old('description', $workshop->description) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                <input
                    type="date"
                    name="date"
                    id="date"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    value="{{ old('date', $workshop->date) }}"
                    required
                >
            </div>

            <div class="mb-4">
                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                <input
                    type="text"
                    name="location"
                    id="location"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    value="{{ old('location', $workshop->location) }}"
                    required
                >
            </div>

            <div class="mb-4">
                <label for="capacity" class="block text-sm font-medium text-gray-700">Capacity</label>
                <input
                    type="number"
                    name="capacity"
                    id="capacity"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    value="{{ old('capacity', $workshop->capacity) }}"
                    required
                >
            </div>

            <button
                type="submit"
                class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600"
            >
                Save Changes
            </button>
        </form>
    </div>
</div>
@endsection
