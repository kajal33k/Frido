@extends('components.main')

@section('content')
    <div class="min-h-screen bg-gray-50 py-16 px-4 sm:px-8 lg:px-16">
        <div class="max-w-5xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Blog Image -->
            <div class="relative">
                <img src="{{ asset('images/blog-image.jpg') }}" alt="Blog Image" class="w-full h-80 object-cover">
                <div
                    class="absolute bottom-4 left-4 bg-purple-700 text-white px-4 py-2 rounded text-sm font-semibold shadow-lg">
                    Health & Wellness
                </div>
            </div>

            <!-- Blog Content -->
            <div class="p-10">
                <!-- Title -->
                <h1 class="text-4xl font-bold text-gray-900 mb-6">How to Maintain a Healthy Lifestyle</h1>

                <!-- Meta Information -->
                <div class="text-gray-500 text-sm mb-8 flex items-center space-x-4">
                    <span><i class="fas fa-calendar-alt"></i> Published on: <span class="text-gray-800">March 15,
                            2024</span></span>
                    <span><i class="fas fa-user"></i> By: <span class="text-gray-800">Admin</span></span>
                </div>

                <!-- Intro Paragraph -->
                <p class="text-gray-700 text-base leading-relaxed mb-8">
                    Maintaining a healthy lifestyle is essential for overall well-being. This blog explores various tips and
                    habits to improve your physical and mental health. Dive into actionable advice to lead a more fulfilling
                    life.
                </p>

                <!-- Subheading -->
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Why Health Matters</h2>
                <p class="text-gray-700 text-base leading-relaxed mb-6">
                    Living a healthy life impacts not only your body but also your mind. It improves your energy levels,
                    boosts your mood, and reduces the risk of chronic diseases.
                </p>

                <!-- Key Points -->
                <ul class="list-disc list-inside text-gray-700 mb-6">
                    <li>Regular physical activity for strength and endurance.</li>
                    <li>Balanced diet rich in essential nutrients.</li>
                    <li>Stress management through mindfulness and relaxation techniques.</li>
                </ul>

                <!-- Detailed Content -->
                <p class="text-gray-700 text-base leading-relaxed mb-8">
                    Small daily habits can lead to significant changes over time. Commit to making one positive change at a
                    time, whether it's drinking more water, eating more vegetables, or sleeping better.
                </p>

                <!-- CTA Buttons -->
                <div class="flex justify-between items-center">
                    <a href="{{ route('pages.blogs') }}"
                        class="bg-purple-700 text-white px-6 py-3 rounded-full text-sm font-medium shadow hover:bg-purple-800 transition duration-300">
                        Back to Blogs
                    </a>
                    <div class="flex space-x-4">
                        <button
                            class="bg-gray-200 text-gray-700 px-5 py-3 rounded-full text-sm font-medium shadow hover:bg-gray-300 transition duration-300">
                            Previous
                        </button>
                        <button
                            class="bg-gray-200 text-gray-700 px-5 py-3 rounded-full text-sm font-medium shadow hover:bg-gray-300 transition duration-300">
                            Next
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
