@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-gray-900 to-black text-white py-16">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-center mb-4">Explore Our Collection</h1>
            <p class="text-gray-300 text-center max-w-2xl mx-auto">Discover a world of knowledge through our carefully curated book collection</p>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-sm p-4 mb-8">
            <div class="flex flex-wrap gap-4 items-center justify-between">
                <div class="flex gap-4">
                    <select class="px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black">
                        <option>All Categories</option>
                        <option>Fiction</option>
                        <option>Non-Fiction</option>
                        <option>Science</option>
                    </select>
                    <select class="px-4 py-2 border rounded-lg focus:ring-2 focus:ring-black">
                        <option>Sort By</option>
                        <option>Latest</option>
                        <option>Popular</option>
                        <option>Title A-Z</option>
                    </select>
                </div>
                <div class="relative">
                    <input type="search" placeholder="Search books..." 
                           class="pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-black">
                    <svg class="w-5 h-5 absolute left-3 top-2.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Books Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Book Card -->
             @foreach ( $books as $book)
             <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                <div class="relative">
                    <img src="{{ $book->cover_img }}" alt="{{ $book->title }}" 
                         class="w-full h-64 object-cover">
                    <div class="absolute top-4 right-4">
                        <span class="bg-yellow-400 text-black px-3 py-1 rounded-full text-sm font-medium">
                            Featured
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h2 class="text-2xl font-bold text-gray-900">{{ $book->title }}</h2>
                        <div class="flex text-yellow-400">
                            ★★★★☆
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">F. Scott Fitzgerald</p>
                    <p class="text-gray-700 mb-6">{{ $book->desciption }}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">Available Copies: 3</span>
                        <a href="{{ route('details',$book->id) }}" class="bg-black text-white px-6 py-2 rounded-lg hover:bg-gray-800 transition duration-300">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
             @endforeach
            

            <!-- Additional Book Cards with the same structure -->
        </div>
    </div>
</div>
@endsection
