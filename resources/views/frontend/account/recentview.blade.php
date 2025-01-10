@extends('frontend.account.layout.layout')
@section('account-content')
    <div class="max-w-7xl mx-auto px-4">
        <!-- Header -->
        <h1 class="text-2xl md:text-4xl font-bold text-center text-gray-800 mb-8">Good Morning!</h1>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Product Card 1 -->
            <div class="bg-white rounded-lg shadow p-6">
                <div class="mb-4">
                    <img src="{{ asset('path/to/mattress-image.jpg') }}" alt="Frido Ultimate Mattress Topper"
                        class="w-full h-48 object-cover">
                </div>
                <h2 class="text-lg font-semibold mb-2">Frido Ultimate Mattress Topper</h2>
                <div class="mb-4">
                     <p class="text-2xl font-bold">₹0</p>
                </div>
                <!-- Size Selector -->
                <div class="mb-4">
                    <select class="w-full p-2 border rounded-md">
                        <option selected disabled>Select Size</option>
                        <option>Small</option>
                        <option>Medium</option>
                        <option>Large</option>
                    </select>
                </div>
                <!-- Quantity Selector -->
                <div class="flex items-center justify-between mb-4">
                    <button class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">-</button>
                    <span class="mx-4">1</span>
                    <button class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">+</button>
                </div>
                <button class="w-full bg-gray-300 text-gray-600 py-2 rounded-md cursor-not-allowed">
                    Sold Out
                </button>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-white rounded-lg shadow p-6">
                <div class="mb-4">
                    <img src="{{ asset('path/to/insole-image.jpg') }}" alt="Frido Arch Sports Insole"
                        class="w-full h-48 object-cover">
                </div>
                <h2 class="text-lg font-semibold mb-2">Frido Arch Sports Insole</h2>
                <div class="mb-4">
                    <p class="text-2xl font-bold">₹399.00</p>
                </div>
                <!-- Size Selector -->
                <div class="mb-4">
                    <select class="w-full p-2 border rounded-md">
                        <option selected>Small (3-6 UK)</option>
                        <option>Medium (7-9 UK)</option>
                        <option>Large (10-12 UK)</option>
                    </select>
                </div>
                <!-- Quantity Selector -->
                <div class="flex items-center justify-between mb-4">
                    <button class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">-</button>
                    <span class="mx-4">1</span>
                    <button class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">+</button>
                </div>
                <button class="w-full bg-yellow-400 hover:bg-yellow-500 py-2 rounded-md transition-colors duration-200">
                    Add to Cart
                </button>
            </div>
        </div>
    </div>
@endsection
