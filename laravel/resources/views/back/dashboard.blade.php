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
                <form action="#" method="POST" enctype="multipart/form-data">
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
                            <label class="block text-gray-700 font-medium mb-2">ISBN</label>
                            <input type="text" 
                                   name="isbn"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                   placeholder="Enter ISBN">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Category</label>
                            <select 
                                name="category_id"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required>
                                <option value="">Select a category</option>
                                <option value="1">Fiction</option>
                                <option value="2">Non-Fiction</option>
                                <option value="3">Science Fiction</option>
                                <option value="4">Mystery</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Description</label>
                            <textarea 
                                name="description"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                rows="3" 
                                placeholder="Enter book description"></textarea>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Cover Image</label>
                            <input type="file" 
                                   name="cover_image"
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
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">The Great Gatsby</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">F. Scott Fitzgerald</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">Fiction</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <a href="#" 
                                           class="text-yellow-600 bg-yellow-100 px-2 py-1 rounded-md text-xs hover:bg-yellow-200 transition duration-300">
                                            Edit
                                        </a>
                                        <a href="#" 
                                           class="text-red-600 bg-red-100 px-2 py-1 rounded-md text-xs hover:bg-red-200 transition duration-300">
                                            Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">1984</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">George Orwell</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">Science Fiction</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <a href="#" 
                                           class="text-yellow-600 bg-yellow-100 px-2 py-1 rounded-md text-xs hover:bg-yellow-200 transition duration-300">
                                            Edit
                                        </a>
                                        <a href="#" 
                                           class="text-red-600 bg-red-100 px-2 py-1 rounded-md text-xs hover:bg-red-200 transition duration-300">
                                            Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">To Kill a Mockingbird</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">Harper Lee</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">Fiction</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <a href="#" 
                                           class="text-yellow-600 bg-yellow-100 px-2 py-1 rounded-md text-xs hover:bg-yellow-200 transition duration-300">
                                            Edit
                                        </a>
                                        <a href="#" 
                                           class="text-red-600 bg-red-100 px-2 py-1 rounded-md text-xs hover:bg-red-200 transition duration-300">
                                            Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
