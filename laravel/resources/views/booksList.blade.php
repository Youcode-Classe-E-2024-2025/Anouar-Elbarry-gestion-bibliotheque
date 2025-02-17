@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Our Book Collection</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Book Card 1 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="/api/placeholder/400/300" alt="Book 1" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">The Great Gatsby</h2>
                <p class="text-gray-600">A story of decadence and excess, Gatsby explores the American Dream in the Jazz Age of the 1920s. F. Scott Fitzgerald's masterpiece remains a literary classic.</p>
            </div>
        </div>

        <!-- Book Card 2 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="/api/placeholder/400/300" alt="Book 2" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">1984</h2>
                <p class="text-gray-600">George Orwell's dystopian masterpiece about totalitarianism and surveillance society. A haunting vision of a future that continues to resonate today.</p>
            </div>
        </div>

        <!-- Book Card 3 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="/api/placeholder/400/300" alt="Book 3" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Pride and Prejudice</h2>
                <p class="text-gray-600">Jane Austen's beloved novel of manners, marriage, and misconception in Georgian England. A timeless romance that has captivated readers for generations.</p>
            </div>
        </div>
    </div>
</div>
@endsection