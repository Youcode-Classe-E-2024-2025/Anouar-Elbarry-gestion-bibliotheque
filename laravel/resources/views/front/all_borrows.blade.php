@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-6 bg-gray-50 border-b">
            <h1 class="text-2xl font-bold text-gray-800">My Borrowed Books</h1>
        </div>

        @if($borrows->isEmpty())
            <div class="p-6 text-center text-gray-600">
                <p class="text-lg">You haven't borrowed any books yet.</p>
                <a href="{{ route('books.list') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                    Browse Books
                </a>
            </div>
        @else
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
                @foreach($borrows as $borrow)
                    <div class="bg-white border rounded-lg shadow-sm overflow-hidden hover:shadow-md transition">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h2 class="text-xl font-semibold text-gray-800">
                                        {{ $borrow->book->title }}
                                    </h2>
                                    <p class="text-gray-600 text-sm">
                                        {{ $borrow->book->author }}
                                    </p>
                                </div>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">
                                    Borrowed
                                </span>
                            </div>
                            
                            <div class="space-y-2">
                                <p class="text-sm text-gray-600">
                                    <strong>Borrowed on:</strong> 
                                    {{ $borrow->borrow_date->format('d M Y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="p-6">
                {{ $borrows->links() }}
            </div>
        @endif
    </div>
</div>
@endsection