@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="grid md:grid-cols-3 gap-8">
        <!-- Profile Information -->
        <div class="md:col-span-1 bg-white shadow-md rounded-lg p-6">
            <div class="text-center">
                <!-- Profile Avatar/Image -->
                <div class="mb-4">
                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->username }}&background=random" 
                         alt="{{ $user->username }}'s avatar" 
                         class="w-32 h-32 rounded-full mx-auto object-cover">
                </div>

                <!-- User Details -->
                <h2 class="text-2xl font-bold text-gray-800">{{ $user->username }}</h2>
                <p class="text-gray-600">{{ $user->email }}</p>
            </div>
        </div>

        <!-- Profile Details and Borrowed Books -->
        <div class="md:col-span-2 space-y-6">
            <!-- Personal Information -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Personal Information</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium">Username</label>
                        <p class="text-gray-600">{{ $user->username }}</p>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Email</label>
                        <p class="text-gray-600">{{ $user->email }}</p>
                    </div>
                </div>
            </div>

            <!-- Recently Borrowed Books -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-semibold">Recently Borrowed Books</h3>
                    @if($borrows->count() > 0)
                        <a href="{{ route('showmyBooks') }}" class="text-blue-600 hover:text-blue-800">
                            View All
                        </a>
                    @endif
                </div>

                @if($borrows->isEmpty())
                    <div class="text-center text-gray-500">
                        <p>No books borrowed yet</p>
                    </div>
                @else
                    <div class="grid md:grid-cols-3 gap-4">
                        @foreach($borrows as $borrow)
                            <div class="border rounded-lg p-4">
                                <h4 class="font-semibold text-gray-800">
                                    {{ $borrow->book->title }}
                                </h4>
                                <p class="text-gray-600 text-sm">
                                    Borrowed on: {{ $borrow->borrow_date->format('d M Y') }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection