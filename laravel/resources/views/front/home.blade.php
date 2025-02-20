@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-r from-gray-900 to-black text-white">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative max-w-7xl mx-auto px-4 py-24">
        <div class="text-center space-y-6">
            <h1 class="text-5xl md:text-6xl font-bold leading-tight">
                Discover Your Next <span class="text-yellow-400">Great Read</span>
            </h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Explore our vast collection of books and embark on new adventures through reading
            </p>
            <div class="flex justify-center space-x-4">
                <a href="#featured" class="bg-white text-black px-8 py-3 rounded-full font-medium hover:bg-yellow-400 transition duration-300">
                    Explore Books
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Search Section -->
<div class="bg-white py-8">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-center">
            <div class="w-full max-w-3xl">
                <div class="relative">
                    <input type="text" placeholder="Search for books, authors, or genres..." 
                           class="w-full px-6 py-4 border-2 border-gray-200 rounded-full focus:outline-none focus:border-yellow-400">
                    <button class="absolute right-3 top-3 bg-black text-white px-6 py-2 rounded-full hover:bg-gray-800">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Featured Books Section -->
<div id="featured" class="max-w-7xl mx-auto px-4 py-16">
    <div class="flex justify-between items-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900">Featured Books</h2>
        <a href="/books" class="text-yellow-600 hover:text-yellow-700 font-medium">View All →</a>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Book Card -->
         @foreach ($Lastbooks as $book)
        <div class="group">
            <div class="relative overflow-hidden rounded-lg shadow-lg transition-transform duration-300 group-hover:-translate-y-2">
                <img src="{{ $book->cover_img }}" alt="Book Cover" 
                     class="w-full h-64 object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-70 transition-opacity duration-300"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <button class="w-full bg-yellow-400 text-black py-2 rounded-full font-medium hover:bg-yellow-500">
                        Quick View
                    </button>
                </div>
            </div>
            <div class="mt-4 space-y-2">
                <h3 class="text-lg font-semibold text-gray-900">{{ $book->title }}</h3>
                <p class="text-gray-600">John Smith</p>
                <div class="flex items-center space-x-2">
                    <div class="flex text-yellow-400">
                        ★★★★★
                    </div>
                    <span class="text-sm text-gray-500">(4.5)</span>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Repeat book cards -->
    </div>
</div>

<!-- Newsletter Section -->
<div class="bg-black text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Stay Updated</h2>
        <p class="text-gray-400 mb-8">Subscribe to our newsletter for the latest book releases and library updates</p>
        <div class="max-w-md mx-auto flex">
            <input type="email" placeholder="Enter your email" 
                   class="flex-1 px-6 py-3 rounded-l-full focus:outline-none text-black">
            <button class="bg-yellow-400 text-black px-8 py-3 rounded-r-full font-medium hover:bg-yellow-500">
                Subscribe
            </button>
        </div>
    </div>
</div>
@endsection
