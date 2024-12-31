@extends('components.main')

@section('content')
    <div class="min-h-screen flex flex-col">

        <div class="bg-gradient-to-r from-yellow-300 to-yellow-400">
        
            <!-- Hero Section -->
            <div class="pt-40">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-start mb-10">
                    <p class="mt-4 text-xl text-black">Have Queries? Talk to Real People</p>
                    <h1 class="text-5xl sm:text-6xl md:text-7xl font-semibold text-black">Contact Us</h1>
                </div>
            </div>

            <!-- Contact Options Section -->
            <div class="bg-white py-16 sm:py-20 rounded-tl-[100px]">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        <!-- WhatsApp Us -->
                        <div class="bg-white border border-gray-200 rounded-tl-[50px] p-10 shadow-lg">
                            <div class="flex items-center justify-center bg-blue-600 w-16 h-16 rounded-full mb-6">
                                <img src="https://img.icons8.com/ios-filled/50/FFFFFF/whatsapp.png" alt="WhatsApp Icon"
                                    class="w-8">
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">WhatsApp Us</h3>
                            <p class="text-gray-600 text-sm mt-4">
                                Solving your issues/queries is our real business. Let's talk!
                            </p>
                            <a href="#"
                                class="text-blue-600 mt-6 inline-block font-semibold hover:text-blue-700">Start a chat
                                &rarr;</a>
                        </div>
                        <!-- Call Us -->
                        <div class="bg-white border border-gray-200 rounded-tl-[50px] p-10 shadow-lg">
                            <div class="flex items-center justify-center bg-blue-600 w-16 h-16 rounded-full mb-6">
                                <img src="https://img.icons8.com/ios-filled/50/FFFFFF/phone.png" alt="Phone Icon"
                                    class="w-8">
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Call Us</h3>
                            <p class="text-gray-600 text-sm mt-4">
                                Our support executives are ready to help you out.
                            </p>
                            <a href="tel:+917498476544"
                                class="text-blue-600 mt-6 inline-block font-semibold hover:text-blue-700">+91 74984
                                76544
                                &rarr;</a>
                        </div>
                        <!-- Email Us -->
                        <div class="bg-white border border-gray-200 rounded-tl-[50px] p-10 shadow-lg">
                            <div class="flex items-center justify-center bg-blue-600 w-16 h-16 rounded-full mb-6">
                                <img src="https://img.icons8.com/ios-filled/50/FFFFFF/email-open.png" alt="Email Icon"
                                    class="w-8">
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Email Us</h3>
                            <p class="text-gray-600 text-sm mt-4">
                                Solving your issues/queries is our real business. Let's talk!
                            </p>
                            <a href="mailto:help@myfrido.com"
                                class="text-blue-600 mt-6 inline-block font-semibold hover:text-blue-700">help@myfrido.com
                                &rarr;</a>
                        </div>
                        <!-- Grievance Officer -->
                        <div class="bg-white border border-gray-200 rounded-tl-[50px] p-10 shadow-lg">
                            <div class="flex items-center justify-center bg-blue-600 w-16 h-16 rounded-full mb-6">
                                <img src="https://img.icons8.com/ios-filled/50/FFFFFF/shield.png" alt="Grievance Icon"
                                    class="w-8">
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Grievance Officer</h3>
                            <p class="text-gray-600 text-sm mt-4">
                                Solving your issues/queries is our real business. Let's talk!
                            </p>
                            <a href="#"
                                class="text-blue-600 mt-6 inline-block font-semibold hover:text-blue-700">Start a chat
                                &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Address Section -->
        <div class="bg-gradient-to-r from-gray-100 via-white to-gray-50 py-16 sm:py-20 rounded-tl-[100px]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Title -->
                <h2 class="text-3xl font-extrabold text-gray-800 text-start mb-12">Address</h2>

                <!-- Content Wrapper -->
                <div class="flex flex-col lg:flex-row items-start lg:items-start gap-16">

                    <!-- Map Section -->
                    <div class="flex-shrink-0 w-full lg:w-1/2 rounded-lg overflow-hidden shadow-lg border border-gray-200">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.691091703122!2d73.77416267681606!3d18.563578568099558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf49e5421ff7%3A0x6e438e4e2b7b38c!2sAmar%20Tech%20Park!5e0!3m2!1sen!2sin!4v1615421339423!5m2!1sen!2sin"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            class="rounded-lg"></iframe>
                    </div>

                    <!-- Details Section -->
                    <div class="w-full lg:w-1/2">
                        <div class="space-y-8">

                            <!-- Address -->
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Our Office</h3>
                                <p class="text-gray-700 text-base">
                                    <strong>Address:</strong> 403/B, Amar Tech Park, Balewadi, Pune, Maharashtra, India,
                                    411045
                                </p>
                                <p class="text-gray-700 text-base">
                                    <strong>Phone:</strong>
                                    <a href="tel:+917498476544" class="text-indigo-600 hover:underline">
                                        +91 74984 76544
                                    </a>
                                </p>
                                <p class="text-gray-700 text-base">
                                    <strong>Email:</strong>
                                    <a href="mailto:help@myfrido.com" class="text-indigo-600 hover:underline">
                                        help@myfrido.com
                                    </a>
                                </p>
                            </div>

                            <!-- Opening Hours -->
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Opening Hours</h3>
                                <p class="text-gray-700 text-base">
                                    <strong>Mon - Sat:</strong> 10:00 AM - 7:00 PM<br>
                                    <strong>Sunday:</strong> Closed
                                </p>
                            </div>

                            <!-- Social Media Links -->
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Stay Connected</h3>
                                <div class="flex space-x-4">
                                    <a href="#"
                                        class="w-10 h-10 bg-indigo-100 flex items-center justify-center rounded-full shadow-md hover:bg-indigo-200">
                                        <img src="https://img.icons8.com/ios-filled/24/000000/facebook--v1.png"
                                            alt="Facebook">
                                    </a>
                                    <a href="#"
                                        class="w-10 h-10 bg-indigo-100 flex items-center justify-center rounded-full shadow-md hover:bg-indigo-200">
                                        <img src="https://img.icons8.com/ios-filled/24/000000/instagram-new.png"
                                            alt="Instagram">
                                    </a>
                                    <a href="#"
                                        class="w-10 h-10 bg-indigo-100 flex items-center justify-center rounded-full shadow-md hover:bg-indigo-200">
                                        <img src="https://img.icons8.com/ios-filled/24/000000/twitter.png" alt="Twitter">
                                    </a>
                                    <a href="#"
                                        class="w-10 h-10 bg-indigo-100 flex items-center justify-center rounded-full shadow-md hover:bg-indigo-200">
                                        <img src="https://img.icons8.com/ios-filled/24/000000/linkedin.png" alt="LinkedIn">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection 
