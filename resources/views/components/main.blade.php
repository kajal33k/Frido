<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>frido</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Include Swiper's JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
{{--  --}}
    
<link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />
<!-- component -->
<script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
</head>

<body>

    @include('components.header')
    @yield('content')
    @include('components.footer')

    <!-- Chat Button Group -->
    <div class="fixed bottom-6 right-6 flex flex-col items-end space-y-3 z-50">
        <!-- Refer and Earn Button -->
        <button
            class="bg-black hover:bg-gray-800 text-white text-sm py-2.5 px-5 rounded-lg shadow-lg 
        transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-xl hover:rotate-2 hover:opacity-90 focus:outline-none">
            Refer and Earn
        </button>
        <!-- Chat Bubble and WhatsApp Icon Container -->
        <div class="flex items-center space-x-3">
            <!-- Chat Bubble -->
            <div
                class="relative bg-white text-gray-800 text-sm py-3 px-5 rounded-lg shadow-md border border-gray-200 
            hover:shadow-xl hover:border-green-500 transition-all duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                Hi! Chat for instant help
            </div>
            <!-- WhatsApp Icon -->
            <a href="https://wa.me/1234567890" target="_blank"
                class="bg-green-700 hover:bg-green-600 inline-flex items-center justify-center w-14 h-14 rounded-full 
            shadow-lg border-2 border-green-600 transition-all duration-300 ease-in-out hover:scale-110 
            hover:shadow-xl hover:border-white group hover:animate-pulse">
                <i
                    class="ri-whatsapp-line text-white text-2xl leading-none group-hover:rotate-12 transition-transform duration-300"></i>
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js" defer></script>

</body>

</html>
