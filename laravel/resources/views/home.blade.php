@extends('layouts.app')
@section('content')
<!-- Hero Section -->
   <div class="bg-white py-12">
    <div class="max-w-6xl mx-auto px-4">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Our Library</h1>
        <p class="text-gray-600">Discover thousands of books in our collection</p>
    </div>
</div>

<!-- Books Grid -->
<div class="max-w-6xl mx-auto px-4 py-12">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Featured Books</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Book Card -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="https://via.placeholder.com/300x400" alt="Book Cover" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800">Book Title</h3>
                <p class="text-gray-600 text-sm">Author Name</p>
                <div class="mt-4">
                    <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">View Details</a>
                </div>
            </div>
        </div>
        <!-- Repeat book cards as needed -->
    </div>
</div>
@endsection