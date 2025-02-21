@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Book Details Section -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Book Image Section -->
                <div class="p-8">
                    <div class="relative">
                        <img src="{{ $book->cover_img }}" alt="Book Cover" 
                             class="w-full h-[500px] object-cover rounded-lg shadow-lg">
                        
                            @if ($book->is_active)
                            <span class="absolute top-4 right-4 bg-green-400 text-black px-4 py-1 rounded-full">
                                Available
                            </span>
                            @else
                            <span class="absolute top-4 right-4 bg-red-400 text-black px-4 py-1 rounded-full">
                                Not Available
                            </span>
                            @endif
                    </div>
                </div>

                <!-- Book Info Section -->
                <div class="p-8">
                    <div class="space-y-6">
                        <div>
                            <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $book->title }}</h1>
                            <p class="text-xl text-gray-600">{{ $book->author }}</p>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <span class="text-gray-600">Published:</span>
                                <span class="text-gray-700">{{ $book->publication_year }}</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <span class="text-gray-600">Available Copies:</span>
                                <span class="text-gray-700">{{ $book->available_copies }}</span>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 pt-6">
                            <h2 class="text-xl font-semibold text-gray-900 mb-4">Description</h2>
                            <p class="text-gray-700 leading-relaxed">
                                {{ $book->desciption }}
                            </p>
                        </div>

                        <div class="flex space-x-4">
                        <form action="{{ route('Borrow') }}" method="POST" class="w-full">
    @csrf
    <div class="flex items-center space-x-4">
    <input type="hidden" name="book_id" value="{{ $book->id }}">
        <button type="submit" class="flex-1 group relative inline-flex items-center justify-center 
            px-6 py-3 overflow-hidden font-bold text-white rounded-lg 
            bg-gradient-to-br from-gray-900 to-black 
            hover:from-gray-800 hover:to-gray-900 
            focus:ring-4 focus:outline-none focus:ring-gray-600 
            transition duration-300 ease-in-out transform 
            hover:scale-105 active:scale-95">
            <span class="absolute top-0 left-0 w-full h-full opacity-0 group-hover:opacity-10 bg-white"></span>
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                </path>
            </svg>
            Borrow Book
            @if($book->available_copies > 0)
                <span class="ml-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">
                    {{ $book->available_copies }} Available
                </span>
            @else
                <span class="ml-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full">
                    Out of Stock
                </span>
            @endif
        </button>

    @if($book->available_copies <= 0)
        <p class="text-red-500 text-sm mt-2 text-center">
            Sorry, this book is currently unavailable for borrowing.
        </p>
    @endif
</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
