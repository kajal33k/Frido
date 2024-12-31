@extends('components.main')

@section('content')
    <div class="min-h-screen bg-white">

        <!-- Blogs Section -->
        <section class="py-16 px-6 sm:px-8 lg:px-12">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-center text-gray-800 mb-6">Blogs</h1>
                <p class="text-center text-gray-500 text-lg sm:text-xl mb-12">Explore insightful articles related to health, wellness, and lifestyle.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Blog Card 1 -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="relative h-72">
                            <img src="{{ asset('images/flat-feet.jpg') }}" alt="Flat Feet Exercise" class="w-full h-full object-cover rounded-t-lg">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-4">Flat Feet: Exercise and Physical Therapy</h3>
                            <p class="text-gray-600 text-sm sm:text-base mb-4 line-clamp-2">Effective exercises and physical therapy techniques to manage flat feet and improve foot health.</p>
                            <a href="#" class="inline-block bg-purple-700 text-white px-8 py-3 rounded-full text-sm font-medium hover:bg-purple-800 transition-colors duration-300">Read More</a>
                        </div>
                    </div>

                    <!-- Blog Card 2 -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="relative h-72">
                            <img src="{{ asset('images/precaution.jpg') }}" alt="Flat Feet Precaution" class="w-full h-full object-cover rounded-t-lg">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-4">Flat Feet: Precautions</h3>
                            <p class="text-gray-600 text-sm sm:text-base mb-4 line-clamp-2">Take necessary precautions and preventive steps to manage flat feet and avoid future complications.</p>
                            <a href="#" class="inline-block bg-purple-700 text-white px-8 py-3 rounded-full text-sm font-medium hover:bg-purple-800 transition-colors duration-300">Read More</a>
                        </div>
                    </div>

                    <!-- Blog Card 3 -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="relative h-72">
                            <img src="{{ asset('images/bunions.jpg') }}" alt="Healing Time for Bunions" class="w-full h-full object-cover rounded-t-lg">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-4">The Healing Time for Bunions</h3>
                            <p class="text-gray-600 text-sm sm:text-base mb-4 line-clamp-2">Learn about the healing time for bunions and how to manage recovery more effectively.</p>
                            <a href="#" class="inline-block bg-purple-700 text-white px-8 py-3 rounded-full text-sm font-medium hover:bg-purple-800 transition-colors duration-300">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lumbar Section -->
        <section class="py-16 px-6 sm:px-8 lg:px-12 bg-gray-50">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-center text-gray-800 mb-6">Blogs</h1>
                <p class="text-center text-gray-500 text-lg sm:text-xl mb-12">Discover articles focused on lumbar health, back pain, and spine wellness.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Lumbar Blog Card 1 -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="relative h-72">
                            <img src="{{ asset('images/back-pain-driving.jpg') }}" alt="Avoid Back Pain While Driving" class="w-full h-full object-cover rounded-t-lg">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-4">How To Avoid Back Pain While Driving</h3>
                            <p class="text-gray-600 text-sm sm:text-base mb-4 line-clamp-2">Prolonged driving can cause discomfort and back pain. Discover tips for avoiding back pain during long car rides.</p>
                            <a href="#" class="inline-block bg-purple-700 text-white px-8 py-3 rounded-full text-sm font-medium hover:bg-purple-800 transition-colors duration-300">Read More</a>
                        </div>
                    </div>

                    <!-- Lumbar Blog Card 2 -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="relative h-72">
                            <img src="{{ asset('images/lumbar-support.jpg') }}" alt="Lumbar Support Importance" class="w-full h-full object-cover rounded-t-lg">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-4">Lumbar Support and Its Importance</h3>
                            <p class="text-gray-600 text-sm sm:text-base mb-4 line-clamp-2">Understand why lumbar support is essential for comfort and preventing back pain during daily activities.</p>
                            <a href="#" class="inline-block bg-purple-700 text-white px-8 py-3 rounded-full text-sm font-medium hover:bg-purple-800 transition-colors duration-300">Read More</a>
                        </div>
                    </div>

                    <!-- Lumbar Blog Card 3 -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="relative h-72">
                            <img src="{{ asset('images/spine-health.jpg') }}" alt="Spine Health Maintenance" class="w-full h-full object-cover rounded-t-lg">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-4">The Importance of Spine Health and Its Maintenance</h3>
                            <p class="text-gray-600 text-sm sm:text-base mb-4 line-clamp-2">Learn how maintaining spine health plays a critical role in your overall well-being and quality of life.</p>
                            <a href="#" class="inline-block bg-purple-700 text-white px-8 py-3 rounded-full text-sm font-medium hover:bg-purple-800 transition-colors duration-300">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
