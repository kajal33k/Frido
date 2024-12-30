@extends('components.main')

@section('content')
    <!-- Gradient Section -->
    <div class="relative bg-gradient-to-r from-yellow-400 to-white shadow-md">
        <div class="border-t-4 border-black"></div>
        <div class="py-4 text-center">
            <h1 class="text-xl font-bold text-black">BEST SELLERS</h1>
        </div>
    </div>

    <!-- Product Section -->
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-800 text-center mb-8">Product Combos</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Product Card 1 -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <div class="bg-yellow-100 text-center">
                    <img src="{{ asset('assets/image/Work_from_Home_ComboSquare.webp') }}" alt="Work From Home Combo"
                        class="w-full h-48 object-fill rounded-md">
                </div>
                <div class="px-4">
                    <div class="bg-black rounded-[20px] border border-white p-1">
                        <p class="text-sm font-medium text-white text-center">Portable Cushioned Workspace</p>
                    </div>
                </div>
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800 mt-2">Lap Desk + Wedge Cushion</h2>
                    <p class="text-sm text-gray-500 mt-1">Ergonomic Lap Desk for all uses, designed to keep you cozy,
                        focused, and organized.</p>
                    <div class="mt-4 flex justify-between items-center">
                        <p class="text-lg font-bold text-yellow-600">₹4,999.00</p>
                        <p class="text-sm text-gray-500 line-through">₹11,998.00</p>
                        <p class="text-sm text-green-600 font-semibold">58% OFF</p>
                    </div>
                    <div class="mt-4">
                        <select class="w-full border border-gray-300 rounded-md p-2">
                            <option>Select Color/Size</option>
                        </select>
                    </div>
                    <button class="mt-4 w-full bg-yellow-500 text-white py-2 rounded-md font-semibold hover:bg-yellow-600">
                        ADD TO CART
                    </button>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <div class="bg-yellow-100 text-center">                
                    <img src="{{ asset('assets/image/Work_from_Home_ComboSquare.webp') }}" alt="Ultimate Pro Seating Combo"
                        class="w-full h-48 object-fill rounded-md">
                </div>
                <div class="px-4">
                    <div class="bg-black rounded-[20px] border border-white p-1">
                        <p class="text-sm font-medium text-white text-center">Back and Seat Support</p>
                    </div>
                </div>
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800 mt-2">Frido Ultimate Pro Seating Combo</h2>
                    <p class="text-sm text-gray-500 mt-1">Offers enhanced support for better posture and comfort.</p>
                    <div class="mt-4 flex justify-between items-center">
                        <p class="text-lg font-bold text-yellow-600">₹2,799.00</p>
                        <p class="text-sm text-gray-500 line-through">₹8,198.00</p>
                        <p class="text-sm text-green-600 font-semibold">65% OFF</p>
                    </div>
                    <div class="mt-4">
                        <select class="w-full border border-gray-300 rounded-md p-2">
                            <option>Select Color/Size</option>
                        </select>
                    </div>
                    <button class="mt-4 w-full bg-yellow-500 text-white py-2 rounded-md font-semibold hover:bg-yellow-600">
                        ADD TO CART
                    </button>
                </div>
            </div>

            <!-- Product Card 3 (New) -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <div class="bg-yellow-100 text-center">
                    <img src="{{ asset('assets/image/Work_from_Home_ComboSquare.webp') }}" alt="Comfort Combo"
                        class="w-full h-48 object-fill rounded-md">
                </div>
                <div class="px-4">
                    <div class="bg-black rounded-[20px] border border-white p-1">
                        <p class="text-sm font-medium text-white text-center">Comfort and Support</p>
                    </div>
                </div>
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800 mt-2">Comfort Combo</h2>
                    <p class="text-sm text-gray-500 mt-1">Perfect for all-day comfort and posture support.</p>
                    <div class="mt-4 flex justify-between items-center">
                        <p class="text-lg font-bold text-yellow-600">₹3,499.00</p>
                        <p class="text-sm text-gray-500 line-through">₹7,998.00</p>
                        <p class="text-sm text-green-600 font-semibold">56% OFF</p>
                    </div>
                    <div class="mt-4">
                        <select class="w-full border border-gray-300 rounded-md p-2">
                            <option>Select Color/Size</option>
                        </select>
                    </div>
                    <button class="mt-4 w-full bg-yellow-500 text-white py-2 rounded-md font-semibold hover:bg-yellow-600">
                        ADD TO CART
                    </button>
                </div>
            </div>

            <!-- Product Card 4 (New) -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <div class="bg-yellow-100 text-center">
                    <img src="{{ asset('assets/image/Work_from_Home_ComboSquare.webp') }}" alt="Ergonomic Seating"
                        class="w-full h-48 object-fill rounded-md">
                </div>
                <div class="px-4">
                    <div class="bg-black rounded-[20px] border border-white p-1">
                        <p class="text-sm font-medium text-white text-center">Ergonomic Seating</p>
                    </div>
                </div>
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800 mt-2">Ergonomic Seating Combo</h2>
                    <p class="text-sm text-gray-500 mt-1">The perfect chair for a comfortable and healthy sitting posture.</p>
                    <div class="mt-4 flex justify-between items-center">
                        <p class="text-lg font-bold text-yellow-600">₹5,499.00</p>
                        <p class="text-sm text-gray-500 line-through">₹12,998.00</p>
                        <p class="text-sm text-green-600 font-semibold">58% OFF</p>
                    </div>
                    <div class="mt-4">
                        <select class="w-full border border-gray-300 rounded-md p-2">
                            <option>Select Color/Size</option>
                        </select>
                    </div>
                    <button class="mt-4 w-full bg-yellow-500 text-white py-2 rounded-md font-semibold hover:bg-yellow-600">
                        ADD TO CART
                    </button>
                </div>
            </div>

            <!-- Add more product cards if needed -->
        </div>
    </div>

    <!-- Quiz Section -->
    <div class="bg-gradient-to-r from-yellow-400 to-white shadow-md py-16 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-black mb-4">Not sure where to start?</h2>
            <p class="text-xl text-black mb-8">Take the quiz below to find which products are right for you.</p>
            <button
                class="bg-black text-white text-lg font-semibold px-8 py-3 rounded-full hover:bg-gray-800 transition-colors">
                TAKE THE QUIZ
            </button>
        </div>
    </div>

    <!-- Frido Promise Section -->
    <div class="bg-white py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-black mb-4">Frido Promise</h2>
                <p class="text-3xl text-black mb-2">Your Trust, Our Priority</p>
                <p class="text-3xl text-black">Experience best of comfort with Frido.</p>
                <div class="w-full h-0.5 bg-gray-300 mx-auto mt-8"></div>
            </div>

            <div class="mt-8">
                <h3 class="text-xl font-semibold text-center mb-8">Awards & Recognitions</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Award 1 -->
                    <div class="text-center p-6 rounded-lg">
                        <div class="h-24 flex items-center justify-center mb-4">
                            <img src="{{ asset('assets/image/Work_from_Home_ComboSquare.webp') }}" alt="Amazon Smbhav" class="h-full object-contain">
                        </div>
                        <h4 class="font-semibold text-lg">Amazon Smbhav Award Winner 2022</h4>
                    </div>

                    <!-- Award 2 -->
                    <div class="text-center p-6 rounded-lg">
                        <div class="h-24 flex items-center justify-center mb-4">
                            <img src="{{ asset('assets/image/Work_from_Home_ComboSquare.webp') }}" alt="Surge" class="h-full object-contain">
                        </div>
                        <h4 class="font-semibold text-lg">Best Startup by<br>Google at Surge 2016</h4>
                    </div>

                    <!-- Award 3 -->
                    <div class="text-center p-6 rounded-lg">
                        <div class="h-24 flex items-center justify-center mb-4">
                            <img src="{{ asset('assets/image/Work_from_Home_ComboSquare.webp') }}" alt="Maharashtra Startup Week" class="h-full object-contain">
                        </div>
                        <h4 class="font-semibold text-lg">Maharashtra Startup Week Winner 2018</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
