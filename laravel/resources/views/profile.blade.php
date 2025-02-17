@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen py-12">
    <div class="max-w-3xl mx-auto px-4">
        <!-- Profile Card -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <!-- Profile Header -->
            <div class="bg-gradient-to-r from-gray-900 to-black p-6">
                <div class="flex items-center space-x-4">
                    <img src="https://via.placeholder.com/100" alt="Profile Picture" 
                         class="w-24 h-24 rounded-full border-4 border-white">
                    <div class="text-white">
                        <h1 class="text-2xl font-bold">John Doe</h1>
                        <p class="text-gray-300">Member #12345</p>
                    </div>
                </div>
            </div>

            <!-- Profile Information -->
            <div class="p-6 space-y-6">
                <!-- Personal Information -->
                <div>
                    <h2 class="text-xl font-semibold mb-4">Personal Information</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="text-sm text-gray-600">Email</label>
                            <p class="font-medium">john.doe@example.com</p>
                        </div>
                        <div>
                            <label class="text-sm text-gray-600">Phone</label>
                            <p class="font-medium">+1 234 567 890</p>
                        </div>
                        <div>
                            <label class="text-sm text-gray-600">Address</label>
                            <p class="font-medium">123 Library Street</p>
                        </div>
                        <div>
                            <label class="text-sm text-gray-600">Member Since</label>
                            <p class="font-medium">January 2024</p>
                        </div>
                    </div>
                </div>

                <!-- Library Card -->
                <div>
                    <h2 class="text-xl font-semibold mb-4">Library Card</h2>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm text-gray-600">Card Status</p>
                                <p class="font-medium text-green-600">Active</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Valid Until</p>
                                <p class="font-medium">December 2024</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Button -->
                <div class="flex justify-end">
                    <button class="bg-black text-white px-6 py-2 rounded-lg hover:bg-gray-800 transition duration-300">
                        Edit Profile
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
