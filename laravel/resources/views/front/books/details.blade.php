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
                            <button class="flex-1 bg-black text-white py-3 rounded-lg hover:bg-gray-800 transition duration-300">
                                Borrow Book
                            </button>
                            <button class="px-4 py-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-300">
                                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
