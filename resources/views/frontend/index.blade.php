@extends('components.main')
@section('content')
    {{-- banner --}}
    <div>
        <img src="{{ asset('assets/image/Banner.jpeg') }}" alt="" class="w-full h-full sm:w-1/2 md:w-1/2 lg:w-full">
    </div>

    {{-- Cards --}}
    <div class="py-16 bg-gray-100 text-center">
        <!-- Main Heading -->
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-6">
            Say Goodbye to Pain, <br>Say Hello to Comfort
        </h2>


        <!-- Shop Options -->
        <div class="flex justify-center gap-8">
            <!-- Shop by Pain -->
            <button class="text-xl font-semibold text-gray-800 mb-4 bg-amber-400 p-4 rounded-lg border border-black">Shop by
                Pain</button>
            <!-- Shop by Activity -->
            <button class="text-xl font-semibold text-gray-800 mb-4 border border-black p-4 rounded-lg">Shop by
                Activity</button>
        </div>
    </div>

    {{-- grid cards --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:mx-24 mx-8 md:pb-24">
        <!-- Card 1 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="{{ asset('assets/image/Backpain.webp') }}" alt="Back Pain" class="w-full h-48 object-cover">
            <div class="p-4">
                <h1 class="text-xl font-semibold text-gray-800 mb-2">Title</h1>
                <p class="text-gray-600">Shop Backrests</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="{{ asset('assets/image/footpain.webp') }}" alt="Back Pain" class="w-full h-48 object-cover">
            <div class="p-4">
                <h1 class="text-xl font-semibold text-gray-800 mb-2">Title</h1>
                <p class="text-gray-600">Shop Backrests</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="{{ asset('assets/image/Neckpain.webp') }}" alt="Back Pain" class="w-full h-48 object-cover">
            <div class="p-4">
                <h1 class="text-xl font-semibold text-gray-800 mb-2">Title</h1>
                <p class="text-gray-600">Shop Backrests</p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="{{ asset('assets/image/Tailbonepain.webp') }}" alt="Back Pain" class="w-full h-48 object-cover">
            <div class="p-4">
                <h1 class="text-xl font-semibold text-gray-800 mb-2">Title</h1>
                <p class="text-gray-600"> Shop Backrests</p>
            </div>
        </div>
    </div>
    {{-- post text --}}
    <div class="bg-yellow-400 py-16 mx-24 mb-6 sm:px-6 lg:px-8 text-center">
        <!-- Title -->
        <h2 class="text-3xl font-bold text-gray-800 mb-4">
            Not sure where to start?
        </h2>

        <!-- Subtitle -->
        <p class="text-lg text-gray-600 mb-8">
            Take the quiz below to find which products are right for you.
        </p>

        <!-- Quiz Button (Call to Action) -->
        <a href="/quiz"
            class="inline-block bg-black text-white text-lg py-3 px-8 rounded-lg shadow-md hover:bg-black-700 transition duration-300">
            Take the Quiz
        </a>
    </div>


    {{-- slider --}}

    <div class="relative w-full">
        <!-- Swiper container -->
        <div class="swiper-container mx-12 overflow-hidden">
            <!-- Wrapper for slides -->
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="bg-white border rounded-lg shadow-lg">
                        <img src="{{ asset('assets/image/Product1') }}" alt="Product 1"
                            class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800">Product Title 1</h3>
                            <p class="text-gray-600 mt-1">A short description of the product goes here.</p>
                            <div class="flex items-center justify-between mt-3">
                                <span class="text-lg font-bold text-gray-900">$99.99</span>
                                <button
                                    class="bg-amber-500 text-white py-2 px-4 rounded-lg hover:bg-amber-600 focus:outline-none">Add
                                    to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="bg-white border rounded-lg shadow-lg">
                        <img src="{{ asset('assets/image/Product1') }}" alt="Product 2"
                            class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800">Product Title 2</h3>
                            <p class="text-gray-600 mt-1">A short description of the product goes here.</p>
                            <div class="flex items-center justify-between mt-3">
                                <span class="text-lg font-bold text-gray-900">$89.99</span>
                                <button
                                    class="bg-amber-500 text-white py-2 px-4 rounded-lg hover:bg-amber-600 focus:outline-none">Add
                                    to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="bg-white border rounded-lg shadow-lg">
                        <img src="{{ asset('assets/image/Product1') }}" alt="Product 3"
                            class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800">Product Title 3</h3>
                            <p class="text-gray-600 mt-1">A short description of the product goes here.</p>
                            <div class="flex items-center justify-between mt-3">
                                <span class="text-lg font-bold text-gray-900">$79.99</span>
                                <button
                                    class="bg-amber-500 text-white py-2 px-4 rounded-lg hover:bg-amber-600 focus:outline-none">Add
                                    to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="bg-white border rounded-lg shadow-lg">
                        <img src="{{ asset('assets/image/Product1') }}" alt="Product 4"
                            class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800">Product Title 4</h3>
                            <p class="text-gray-600 mt-1">A short description of the product goes here.</p>
                            <div class="flex items-center justify-between mt-3">
                                <span class="text-lg font-bold text-gray-900">$69.99</span>
                                <button
                                    class="bg-amber-500 text-white py-2 px-4 rounded-lg hover:bg-amber-600 focus:outline-none">Add
                                    to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Optional Navigation Arrows -->
            <div class="swiper-button-next "></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>


    {{-- Award section --}}
    <div class="bg-[#FDF8CC] py-8 mt-8">
        <h1 class="text-3xl font-semibold text-center mb-8">Awards & Achievements</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-2">
            <div class="flex justify-center">
                <img src="{{ asset('assets/image/Awards-01.webp') }}" alt="Award 1"
                    class="w-full h-auto max-w-xs rounded-lg shadow-lg">
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('assets/image/Awards-02.webp') }}" alt="Award 2"
                    class="w-full h-auto max-w-xs rounded-lg shadow-lg">
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('assets/image/Awards-03.webp') }}" alt="Award 3"
                    class="w-full h-auto max-w-xs rounded-lg shadow-lg">
            </div>
        </div>
    </div>


    {{-- AUTOPLAY SLIDER --}}
    <!-- Slider -->
    <div data-hs-carousel='{
    "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-2 border border-gray-400 rounded-full cursor-pointer"
  }'
        class="relative lg:px-[40px] mt-4 mb-4">
        <h1 class="flex justify-center font-bold text-center text-4xl p-2 mb-4">In The Press</h1>
        <!-- Carousel Wrapper -->
        <div class="hs-carousel w-full overflow-hidden rounded-lg ">
            <!-- Carousel Body -->
            <div class="hs-carousel-body flex flex-nowrap transition-transform duration-700 ease-in-out">
                <!-- Slide 1 -->
                <div class="hs-carousel-slide flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-2">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-4">
                        <img src="{{ asset('assets/image/download.jpeg') }}" alt="Frido and RCB Partnership"
                            class="w-full h-36 object-cover rounded-md" />
                        <div class="mt-2">
                            <h3 class="text-sm font-semibold">Frido is the Official Partner RCB for IPL 2024</h3>
                            <a href="#"
                                class="text-blue-600 font-medium hover:underline mt-1 inline-block text-xs">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 1 -->
                <div class="hs-carousel-slide flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-2">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-4">
                        <img src="{{ asset('assets/image/download.jpeg') }}" alt="Frido and RCB Partnership"
                            class="w-full h-36 object-cover rounded-md" />
                        <div class="mt-2">
                            <h3 class="text-sm font-semibold">Frido is the Official Partner RCB for IPL 2024</h3>
                            <a href="#"
                                class="text-blue-600 font-medium hover:underline mt-1 inline-block text-xs">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="hs-carousel-slide flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-2">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-4">
                        <img src="{{ asset('assets/image/download.jpeg') }}" alt="Frido Partnership"
                            class="w-full h-36 object-cover rounded-md" />
                        <div class="mt-2">
                            <h3 class="text-sm font-semibold">Frido partners RCB as the official insole partner</h3>
                            <a href="#"
                                class="text-blue-600 font-medium hover:underline mt-1 inline-block text-xs">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="hs-carousel-slide flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-2">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-4">
                        <img src="{{ asset('assets/image/download.jpeg') }}" alt="Frido Ergonomics"
                            class="w-full h-36 object-cover rounded-md" />
                        <div class="mt-2">
                            <h3 class="text-sm font-semibold">Frido strives to be a one-stop shop for ergonomic body
                                support</h3>
                            <a href="#"
                                class="text-blue-600 font-medium hover:underline mt-1 inline-block text-xs">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="hs-carousel-slide flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-2">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-4">
                        <img src="{{ asset('assets/image/download.jpeg') }}" alt="Frido Partnership"
                            class="w-full h-36 object-cover rounded-md" />
                        <div class="mt-2">
                            <h3 class="text-sm font-semibold">Frido partners RCB as the official insole partner</h3>
                            <a href="#"
                                class="text-blue-600 font-medium hover:underline mt-1 inline-block text-xs">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="hs-carousel-slide flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-2">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-4">
                        <img src="{{ asset('assets/image/download.jpeg') }}" alt="Frido Partnership"
                            class="w-full h-36 object-cover rounded-md" />
                        <div class="mt-2">
                            <h3 class="text-sm font-semibold">Frido partners RCB as the official insole partner</h3>
                            <a href="#"
                                class="text-blue-600 font-medium hover:underline mt-1 inline-block text-xs">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="hs-carousel-slide flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-2">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-4">
                        <img src="{{ asset('assets/image/download.jpeg') }}" alt="Frido Partnership"
                            class="w-full h-36 object-cover rounded-md" />
                        <div class="mt-2">
                            <h3 class="text-sm font-semibold">Frido partners RCB as the official insole partner</h3>
                            <a href="#"
                                class="text-blue-600 font-medium hover:underline mt-1 inline-block text-xs">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="hs-carousel-slide flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-2">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-4">
                        <img src="{{ asset('assets/image/download.jpeg') }}" alt="Frido Partnership"
                            class="w-full h-36 object-cover rounded-md" />
                        <div class="mt-2">
                            <h3 class="text-sm font-semibold">Frido partners RCB as the official insole partner</h3>
                            <a href="#"
                                class="text-blue-600 font-medium hover:underline mt-1 inline-block text-xs">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="hs-carousel-slide flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-2">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-4">
                        <img src="{{ asset('assets/image/download.jpeg') }}" alt="Frido Partnership"
                            class="w-full h-36 object-cover rounded-md" />
                        <div class="mt-2">
                            <h3 class="text-sm font-semibold">Frido partners RCB as the official insole partner</h3>
                            <a href="#"
                                class="text-blue-600 font-medium hover:underline mt-1 inline-block text-xs">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="hs-carousel-slide flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-2">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-4">
                        <img src="{{ asset('assets/image/download.jpeg') }}" alt="Frido Partnership"
                            class="w-full h-36 object-cover rounded-md" />
                        <div class="mt-2">
                            <h3 class="text-sm font-semibold">Frido partners RCB as the official insole partner</h3>
                            <a href="#"
                                class="text-blue-600 font-medium hover:underline mt-1 inline-block text-xs">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="hs-carousel-slide flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-2">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-4">
                        <img src="{{ asset('assets/image/download.jpeg') }}" alt="Frido Partnership"
                            class="w-full h-36 object-cover rounded-md" />
                        <div class="mt-2">
                            <h3 class="text-sm font-semibold">Frido partners RCB as the official insole partner</h3>
                            <a href="#"
                                class="text-blue-600 font-medium hover:underline mt-1 inline-block text-xs">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="hs-carousel-slide flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-2">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-4">
                        <img src="{{ asset('assets/image/download.jpeg') }}" alt="Frido Highlights"
                            class="w-full h-36 object-cover rounded-md" />
                        <div class="mt-2">
                            <h3 class="text-sm font-semibold">Frido highlights ergonomic innovations</h3>
                            <a href="#"
                                class="text-blue-600 font-medium hover:underline mt-1 inline-block text-xs">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <button type="button"
            class="hs-carousel-prev absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800  focus:outline-none focus:bg-gray-800/10 rounded-s-lg">
            <span class="text-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    stroke="currentColor" stroke-width="2">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
            </span>
        </button>
        <button type="button"
            class="hs-carousel-next absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800  focus:outline-none focus:bg-gray-800/10 rounded-e-lg">
            <span class="text-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    stroke="currentColor" stroke-width="2">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </span>
        </button>

        <!-- Dots -->
        <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2"></div>
    </div>
    <!-- End Slider -->


    <!-- Blog Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Learn with Frido</h2>
                <p class="text-gray-600 mt-2">Read some of the best blogs on ergonomics, comfort & pain management of the
                    human body</p>
            </div>

            <!-- Blog Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('assets/image/download.jpeg') }}" alt="Understanding Flat Feet"
                        class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Understanding flat feet & symptoms</h3>
                        <a href="#" class="text-blue-600 font-medium hover:underline mt-2 inline-block">Read full
                            article</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('assets/image/download.jpeg') }}" alt="Coccyx Pain Causes"
                        class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">5 Major causes of coccyx pain</h3>
                        <a href="#" class="text-blue-600 font-medium hover:underline mt-2 inline-block">Read full
                            article</a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('assets/image/download.jpeg') }}" alt="Pillow Special Features"
                        class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">What makes your pillow special?</h3>
                        <a href="#" class="text-blue-600 font-medium hover:underline mt-2 inline-block">Read full
                            article</a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('assets/image/download.jpeg') }}" alt="Back Pain While Driving"
                        class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">How to avoid back pain while driving a car</h3>
                        <a href="#" class="text-blue-600 font-medium hover:underline mt-2 inline-block">Read full
                            article</a>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carouselBody = document.querySelector('.hs-carousel-body');
            const slides = carouselBody.children;
            const totalSlides = Math.ceil(slides.length / 4); // Show 4 at a time
            let currentIndex = 0;

            const nextButton = document.querySelector('.hs-carousel-next');
            const prevButton = document.querySelector('.hs-carousel-prev');

            function updateCarousel() {
                const offset = -currentIndex * 100; // Adjust for 4 slides per view
                carouselBody.style.transform = translateX(${offset}%);
            }

            nextButton.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateCarousel();
            });

            prevButton.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                updateCarousel();
            });

            // Initialize
            updateCarousel();
        });
    </script>



    <!-- Initialize Carousel -->


    <script>
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 3, // Show 3 slides at once
            spaceBetween: 20, // Space between slides
            loop: true, // Infinite looping
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // Responsive behavior
                640: {
                    slidesPerView: 1, // 1 slide on small screens
                },
                768: {
                    slidesPerView: 2, // 2 slides on medium screens
                },
                1024: {
                    slidesPerView: 3, // 3 slides on large screens
                },
            },
        });
    </script>
@endsection