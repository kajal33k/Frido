@extends('components.main')

@section('content')
    <div class="py-12 bg-gray-50 min-h-screen">
        <!-- Header Section -->
        <div class="text-center max-w-3xl mx-auto px-6 sm:px-8 lg:px-10">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 tracking-tight leading-tight">
                Discover Your Nearest <span class="text-purple-700">Store</span>
            </h1>
            <p class="mt-4 text-lg sm:text-xl text-gray-600">
                Use our store locator to find the closest store by location or category.
            </p>
        </div>

        <!-- Main Section -->
        <div class="mt-12 max-w-7xl mx-auto px-6 sm:px-8 lg:px-10 grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Filter Section -->
            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Store Search</h2>

                <div class="flex items-center justify-center w-full">
                    <div class="relative w-full max-w-lg">
                        <!-- Search Input -->
                        <input type="text" placeholder="Type postcode"
                            class="w-full py-4 pl-10 pr-16 text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 placeholder-gray-400 transition-all duration-300 ease-in-out text-sm" />
                        <!-- Search Icon -->
                        <div class="absolute top-1/2 left-4 transform -translate-y-1/2 text-gray-500">
                            <i class="material-icons text-xl">place</i>
                        </div>
                        <!-- Search Button -->
                        <button
                            class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-purple-600 hover:bg-purple-700 text-white text-sm font-medium px-3 py-2 shadow-md transition duration-300 focus:outline-none focus:ring-2 focus:ring-purple-500 rounded-lg flex items-center space-x-2">
                            <!-- Icon -->
                            <i class="material-icons text-xl">search</i>
                        </button>
                    </div>
                </div>

                <!-- Categories -->
                <div class="mt-8">
                    <h3 class="text-lg font-semibold text-gray-700 mb-3">Categories</h3>
                    <div class="space-y-3">
                        @foreach (['Shoe Inserts', 'Car Accessories', 'Home Furnishings', 'Chemist'] as $category)
                            <div class="flex items-center">
                                <input type="checkbox" id="{{ Str::slug($category) }}"
                                    class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                                <label for="{{ Str::slug($category) }}"
                                    class="ml-2 text-gray-700">{{ $category }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Map Section -->
            <div class="col-span-3 bg-white p-6 rounded-lg shadow-md border border-gray-200">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Map View</h2>
                <div id="map" class="w-full h-[400px] md:h-[500px] rounded-lg overflow-hidden">
                    <!-- Replace with an actual map -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.15556348466!2d72.74109996494305!3d19.082522322073633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63a4bc5e029%3A0x799b47ff5f63ba97!2sMumbai%2C%20Maharashtra%2C%20India!5e0!3m2!1sen!2sus!4v1686666362384!5m2!1sen!2sus"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
