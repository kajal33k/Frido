@extends('components.main')

@section('content')
    <div class="py-12 bg-gray-50 min-h-screen">
        <!-- Header Section -->
        <div class="text-center max-w-3xl mx-auto px-6 sm:px-8 lg:px-10">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 tracking-tight leading-tight">
                Frequently Asked <span class="text-purple-700">Questions</span>
            </h1>
            <p class="mt-4 text-lg sm:text-xl text-gray-600">
                Find answers to some of the most common questions we receive.
            </p>
        </div>

        <!-- FAQ Section -->
        <div class="mt-12 max-w-7xl mx-auto px-6 sm:px-8 lg:px-10">
            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">FAQs</h2>

                <!-- Accordion Start -->
                <div class="space-y-4">
                    
                    <!-- Accordion Item 1 -->
                    <div class="accordion-item border-b border-gray-200">
                        <!-- Accordion Button -->
                        <button class="w-full text-left py-4 px-5 text-gray-800 font-medium bg-gray-100 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-500 cursor-pointer flex justify-between items-center transition-all duration-300 ease-in-out" data-id="accordion-1">
                            <span>What is the return policy?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block ml-2 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <!-- Accordion Content -->
                        <div id="accordion-1" class="accordion-content hidden px-5 py-4 text-gray-700 text-sm transition-all duration-300 ease-in-out">
                            <p>You can return items within 30 days of purchase. Please keep your receipt for the return process.</p>
                        </div>
                    </div>

                    <!-- Accordion Item 2 -->
                    <div class="accordion-item border-b border-gray-200">
                        <!-- Accordion Button -->
                        <button class="w-full text-left py-4 px-5 text-gray-800 font-medium bg-gray-100 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-500 cursor-pointer flex justify-between items-center transition-all duration-300 ease-in-out" data-id="accordion-2">
                            <span>How do I track my order?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block ml-2 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <!-- Accordion Content -->
                        <div id="accordion-2" class="accordion-content hidden px-5 py-4 text-gray-700 text-sm transition-all duration-300 ease-in-out">
                            <p>You can track your order using the tracking number provided in the shipping confirmation email. We also provide live updates on your order status.</p>
                        </div>
                    </div>

                    <!-- Accordion Item 3 -->
                    <div class="accordion-item border-b border-gray-200">
                        <!-- Accordion Button -->
                        <button class="w-full text-left py-4 px-5 text-gray-800 font-medium bg-gray-100 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-500 cursor-pointer flex justify-between items-center transition-all duration-300 ease-in-out" data-id="accordion-3">
                            <span>Do you ship internationally?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block ml-2 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <!-- Accordion Content -->
                        <div id="accordion-3" class="accordion-content hidden px-5 py-4 text-gray-700 text-sm transition-all duration-300 ease-in-out">
                            <p>Yes, we offer international shipping to select countries. Please refer to our shipping policy for more details.</p>
                        </div>
                    </div>
                    
                </div>
                <!-- Accordion End -->
            </div>
        </div>
    </div>

    <script>
        // JavaScript for accordion functionality
        document.querySelectorAll('.accordion-item button').forEach(button => {
            button.addEventListener('click', () => {
                const accordionId = button.getAttribute('data-id');
                const content = document.getElementById(accordionId);

                // Toggle visibility of the content
                content.classList.toggle('hidden');

                // Rotate the icon on click
                const icon = button.querySelector('svg');
                icon.classList.toggle('rotate-180');
                
                // Smooth transition for content
                if (content.classList.contains('hidden')) {
                    content.style.maxHeight = '0';
                } else {
                    content.style.maxHeight = content.scrollHeight + 'px';
                }
            });
        });
    </script>
@endsection
