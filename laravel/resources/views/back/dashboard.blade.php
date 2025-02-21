@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        {{-- Add New Book Section --}}
        <div class="md:col-span-1">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-gray-100 border-b px-4 py-3">
                    <h3 class="text-xl font-semibold text-gray-800">Add New Book</h3>
                </div>
                <form action="{{ route('create.book') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-6 space-y-4">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Book Title</label>
                            <input type="text" 
                                   name="title"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                   placeholder="Enter book title" 
                                   required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Author</label>
                            <input type="text" 
                                   name="author"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                   placeholder="Enter author name" 
                                   required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Publication Year</label>
                            <input type="number" 
                                   name="publication_year"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                   placeholder="Enter publication year" 
                                   max="2025" min="1800"
                                   required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Price</label>
                            <input type="number" 
                                   name="price"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                   placeholder="Enter the Price" 
                                   required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Available Copies</label>
                            <input type="number" 
                                   name="available_copies"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                   placeholder="Enter the Price" 
                                   required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Description</label>
                            <textarea 
                                name="desciption"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                rows="3" 
                                placeholder="Enter book description"></textarea>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Cover Image</label>
                            <input type="text" 
                                   name="cover_img"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <button 
                            type="submit"
                            class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300">
                            Add Book
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Book List Section --}}
        <div class="md:col-span-2">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-gray-100 border-b px-4 py-3">
                    <h3 class="text-xl font-semibold text-gray-800">Book List</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-100 border-b">
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Author</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">price</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">created_at</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($books as $book)
                            <tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">{{ $book->title }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $book->author }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">${{ $book->price }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $book->created_at }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <a href="#" 
                                           class="text-gray-600 bg-gray-100 px-2 py-1 rounded-md text-xs hover:bg-gray-200 transition duration-300">
                                            Edit
                                        </a>
                                        @if ($book->is_active)
                                        <a href="#" 
                                           class="text-yellow-600 bg-yellow-100 px-2 py-1 rounded-md text-xs hover:bg-yellow-200 transition duration-300">
                                            Archive
                                        </a>
                                        @else
                                        <a href="#" 
                                           class="text-green-600 bg-green-100 px-2 py-1 rounded-md text-xs hover:bg-green-200 transition duration-300">
                                            Active
                                        </a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
