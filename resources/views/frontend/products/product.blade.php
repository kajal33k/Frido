@extends('components.main')
@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Product Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Product Images -->
      <div x-data="{ currentSlide: 0, slides: [ '{{asset('assets/image/Product1')}}', '{{asset('assets/image/blog1')}}', '{{asset('assets/image/Banner.jpeg')}}', '{{asset('assets/image/download.jpeg')}}' ] }" class="relative rounded-lg overflow-hidden shadow-lg">
        <!-- Carousel Wrapper -->
        <div class="relative h-full md:h-full">
          <template x-for="(slide, index) in slides" :key="index">
            <div x-show="currentSlide === index" x-transition:enter="transition ease-in-out duration-700" x-transition:leave="transition ease-in-out duration-700" class="absolute inset-0">
              <img :src="slide" class="object-cover w-full h-full" :alt="'Product Image ' + (index + 1)">
            </div>
          </template>
        </div>
  
        <!-- Carousel Indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 -translate-x-1/2 space-x-2">
          <template x-for="(slide, index) in slides" :key="index">
            <button @click="currentSlide = index" :class="{'bg-gray-400': currentSlide === index, 'bg-gray-300': currentSlide !== index}" class="w-3 h-3 rounded-full transition"></button>
          </template>
        </div>
  
        <!-- Carousel Controls -->
        <button @click="currentSlide = (currentSlide - 1 + slides.length) % slides.length" class="absolute top-1/2 left-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition">
          <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
        </button>
        <button @click="currentSlide = (currentSlide + 1) % slides.length" class="absolute top-1/2 right-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition">
          <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </button>
      </div>
  
      <!-- Product Details -->
      <div class="space-y-6">
        <h1 class="text-3xl font-bold">Topper</h1>
        <p class="text-gray-600">Get that Luxurious Hotel feeling right at home. Say goodbye to sleepless nights and wake up feeling relaxed and energetic.</p>
  
        <!-- Features -->
        <div class="grid grid-cols-2 gap-4">
          <div class="flex items-center gap-2">
            <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">💡</div>
            <span>Wake up with no back/body pain</span>
          </div>
          <div class="flex items-center gap-2">
            <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">⚖️</div>
            <span>Even pressure distribution</span>
          </div>
          <div class="flex items-center gap-2">
            <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">🛏️</div>
            <span>Quickly regains shape</span>
          </div>
          <div class="flex items-center gap-2">
            <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">💰</div>
            <span>Comfort in budget</span>
          </div>
        </div>
  
        <!-- Size Selection -->
        <div class="space-y-4">
          <div>
            <p class="font-medium mb-2">Select Category:</p>
            <div class="flex gap-4">
              <button class="px-4 py-2 border rounded-lg bg-yellow-50">Single</button>
              <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">Double</button>
              <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">Queen</button>
              <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">King</button>
            </div>
          </div>
  
          <div>
            <div class="flex justify-between items-center mb-2">
              <p class="font-medium">Select Size:</p>
              <a href="#" class="text-blue-600 text-sm">Size Chart</a>
            </div>
            <select class="w-full p-2 border rounded-lg" aria-label="Select Size">
              <option>72" x 36"</option>
            </select>
          </div>
        </div>
  
        <!-- Price -->
        <div class="space-y-2">
          <p class="text-sm">Thickness: 2 Inches</p>
          <div class="flex items-center gap-4">
            <span class="text-2xl font-bold">₹4,399.00</span>
            <span class="text-gray-500 line-through">₹8,400.00</span>
            <span class="bg-black text-white px-2 py-1 rounded text-sm">47% OFF</span>
          </div>
        </div>
  
        <!-- Add to Cart -->
        <button class="w-full bg-yellow-400 text-black py-4 rounded-lg font-medium hover:bg-yellow-500">
          ADD TO CART
        </button>
  
        <!-- EMI Option -->
        <div class="border rounded-lg p-4 flex items-center justify-between bg-gray-50">
          <div>
            <p class="font-medium">Pay ₹1,466 now & rest later</p>
            <p class="text-sm text-gray-600">at 0% EMI on</p>
          </div>
          <button class="bg-black text-white px-4 py-2 rounded-lg text-sm">Buy On EMI</button>
        </div>
  
        <!-- Shopping Help -->
        <div class="space-y-4">
          <p class="text-center font-medium">Need Help Shopping?</p>
          <button class="w-full border rounded-lg py-3 flex items-center justify-center gap-2 hover:bg-gray-50">
            <span class="text-green-600">📱</span>
            Shop on WhatsApp
          </button>
          <button class="w-full border rounded-lg py-3 flex items-center justify-center gap-2 hover:bg-gray-50">
            <span>📹</span>
            Shop on Video Call
          </button>
        </div>
  
        <!-- Delivery Features -->
        <div class="grid grid-cols-3 gap-4 text-center text-sm">
          <div>
            <div class="flex justify-center mb-2">🚚</div>
            <p>Free Delivery</p>
          </div>
          <div>
            <div class="flex justify-center mb-2">💰</div>
            <p>COD Available</p>
          </div>
          <div>
            <div class="flex justify-center mb-2">↩️</div>
            <p>7 Day Easy Returns</p>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Tabs -->
    <div class="mt-12 border-t pt-8">
      <div class="flex gap-4 border-b">
        <button class="px-4 py-2 border-b-2 border-black">Description</button>
        <button class="px-4 py-2">Benefits</button>
        <button class="px-4 py-2">How It Works</button>
      </div>
      <div class="py-6">
        <p class="text-gray-600">Sink into luxurious comfort with our quick response foam topper, designed to contour to your body for ultimate support and relaxation.</p>
        <p class="mt-4 text-gray-600"><span class="font-medium">Quick Response Foam:</span> The Quick Response Foam is designed to contour the human body, so it bounces back more quickly from pressure.</p>
      </div>
    </div>
  </div>
  
{{-- Elastic Straps to Keep it in Place--}}
<div class="max-w-4xl mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Description Section -->
        <div>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Quick Response Foam</h2>
            <p class="text-gray-600 text-center">
                Quick Response Foam rapidly adjusts to your body, delivering immediate support and comfort while quickly returning to its original shape.
            </p>
        </div>
        <!-- Image Section -->
        <div class="flex justify-center">
            <img 
                src="{{ asset('assets/image/Quick_response_foam-03_1_-min.webp') }}" 
                alt="Quick Response Foam" 
                class="max-w-full h-auto rounded-lg shadow-lg"
            />
        </div>
    </div>
</div>
{{-- Elastic Straps to Keep it in Place--}}
<div class="max-w-4xl mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
         <!-- Image Section -->
         <div class="flex justify-center">
            <img 
                src="{{ asset('assets/image/Quick_response_foam-03_1_-min.webp') }}" 
                alt="Quick Response Foam" 
                class="max-w-full h-auto rounded-lg shadow-lg"
            />
        </div>
        <!-- Description Section -->
        <div>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Quick Response Foam</h2>
            <p class="text-gray-600 text-center">
                Quick Response Foam rapidly adjusts to your body, delivering immediate support and comfort while quickly returning to its original shape.
            </p>
        </div>
       
    </div>
</div>
<div class="max-w-4xl mx-auto p-6">
    <h1 class="text-4xl font-bold mb-4 text-center">Why You'll Love Our Mattress Topper!</h1>
    <p class="text-xl text-gray-600 mb-8 text-center">Product Features</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- First Section -->
        <div class="flex flex-col items-center justify-center">
            <img 
                src="{{ asset('assets/image/Quick_response_foam-03_1_-min.webp') }}" 
                alt="Quick Response Foam"
                class="max-w-full h-auto rounded-lg shadow-lg mb-4"
            />
            <h2 class="text-2xl font-semibold text-gray-800 mb-2">Enhanced Comfort and Pain Relief</h2>
            <p class="text-gray-600 text-center">
                Why You'll Love Our Mattress Topper! Our mattress topper provides instant comfort, reducing pressure on key areas like your shoulders and hips for a better night's sleep.
            </p>
        </div>
         <!-- First Section -->
         <div class="flex flex-col items-center justify-center">
            <img 
                src="{{ asset('assets/image/Quick_response_foam-03_1_-min.webp') }}" 
                alt="Quick Response Foam"
                class="max-w-full h-auto rounded-lg shadow-lg mb-4"
            />
            <h2 class="text-2xl font-semibold text-gray-800 mb-2">Enhanced Comfort and Pain Relief</h2>
            <p class="text-gray-600 text-center">
                Why You'll Love Our Mattress Topper! Our mattress topper provides instant comfort, reducing pressure on key areas like your shoulders and hips for a better night's sleep.
            </p>
        </div>
         <!-- First Section -->
         <div class="flex flex-col items-center justify-center">
            <img 
                src="{{ asset('assets/image/Quick_response_foam-03_1_-min.webp') }}" 
                alt="Quick Response Foam"
                class="max-w-full h-auto rounded-lg shadow-lg mb-4"
            />
            <h2 class="text-2xl font-semibold text-gray-800 mb-2">Enhanced Comfort and Pain Relief</h2>
            <p class="text-gray-600 text-center">
                Why You'll Love Our Mattress Topper! Our mattress topper provides instant comfort, reducing pressure on key areas like your shoulders and hips for a better night's sleep.
            </p>
        </div>
        <!-- Second Section -->
        <div class="flex flex-col items-center justify-center">
            <img 
                src="{{ asset('assets/image/Quick_response_foam-03_1_-min.webp') }}" 
                alt="Quick Response Foam"
                class="max-w-full h-auto rounded-lg shadow-lg mb-4"
            />
            <h2 class="text-2xl font-semibold text-gray-800 mb-2">Enhanced Comfort and Pain Relief</h2>
            <p class="text-gray-600 text-center">
                The Frido Mattress Topper molds to your body, delivering tailored comfort and reducing pressure on key areas like the shoulders and hips for a more relaxing sleep.
            </p>
        </div>
    </div>
</div>



<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<script type="module">
  import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

  const keenSliderActive = document.getElementById('keen-slider-active')
  const keenSliderCount = document.getElementById('keen-slider-count')

  const keenSlider = new KeenSlider(
    '#keen-slider',
    {
      loop: true,
      defaultAnimation: {
        duration: 750,
      },
      slides: {
        origin: 'center',
        perView: 1,
        spacing: 16,
      },
      breakpoints: {
        '(min-width: 640px)': {
          slides: {
            origin: 'center',
            perView: 1.5,
            spacing: 16,
          },
        },
        '(min-width: 768px)': {
          slides: {
            origin: 'center',
            perView: 1.75,
            spacing: 16,
          },
        },
        '(min-width: 1024px)': {
          slides: {
            origin: 'center',
            perView: 3,
            spacing: 16,
          },
        },
      },
      created(slider) {
        slider.slides[slider.track.details.rel].classList.remove('opacity-40')

        keenSliderActive.innerText = slider.track.details.rel + 1
        keenSliderCount.innerText = slider.slides.length
      },
      slideChanged(slider) {
        slider.slides.forEach((slide) => slide.classList.add('opacity-40'))

        slider.slides[slider.track.details.rel].classList.remove('opacity-40')

        keenSliderActive.innerText = slider.track.details.rel + 1
      },
    },
    []
  )

  const keenSliderPrevious = document.getElementById('keen-slider-previous')
  const keenSliderNext = document.getElementById('keen-slider-next')

  keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
  keenSliderNext.addEventListener('click', () => keenSlider.next())
</script>

<section class="bg-white">
  <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
    <h2 class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
        What Our Customers Say
    </h2>

    <div class="mt-8">
      <div id="keen-slider" class="keen-slider">
        <div class="keen-slider__slide opacity-40 transition-opacity duration-500">
          <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
            <div class="flex items-center gap-4">
              <img
                alt=""
                src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                class="size-14 rounded-full object-cover"
              />

              <div>
                <div class="flex justify-center gap-0.5 text-green-500">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                </div>

                <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
              </div>
            </div>

            <p class="mt-4 text-gray-700">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
              consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius
              accusamus error officiis atque voluptates magnam!
            </p>
          </blockquote>
        </div>

        <div class="keen-slider__slide opacity-40 transition-opacity duration-500">
          <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
            <div class="flex items-center gap-4">
              <img
                alt=""
                src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                class="size-14 rounded-full object-cover"
              />

              <div>
                <div class="flex justify-center gap-0.5 text-green-500">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                </div>

                <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
              </div>
            </div>

            <p class="mt-4 text-gray-700">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
              consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius
              accusamus error officiis atque voluptates magnam!
            </p>
          </blockquote>
        </div>

        <div class="keen-slider__slide opacity-40 transition-opacity duration-500">
          <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
            <div class="flex items-center gap-4">
              <img
                alt=""
                src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                class="size-14 rounded-full object-cover"
              />

              <div>
                <div class="flex justify-center gap-0.5 text-green-500">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                </div>

                <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
              </div>
            </div>

            <p class="mt-4 text-gray-700">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
              consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius
              accusamus error officiis atque voluptates magnam!
            </p>
          </blockquote>
        </div>

        <div class="keen-slider__slide opacity-40 transition-opacity duration-500">
          <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
            <div class="flex items-center gap-4">
              <img
                alt=""
                src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                class="size-14 rounded-full object-cover"
              />

              <div>
                <div class="flex justify-center gap-0.5 text-green-500">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                </div>

                <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
              </div>
            </div>

            <p class="mt-4 text-gray-700">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
              consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius
              accusamus error officiis atque voluptates magnam!
            </p>
          </blockquote>
        </div>
      </div>

      <div class="mt-6 flex items-center justify-center gap-4">
        <button
          aria-label="Previous slide"
          id="keen-slider-previous"
          class="text-gray-600 transition-colors hover:text-gray-900"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="size-5"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
          </svg>
        </button>

        <p class="w-16 text-center text-sm text-gray-700">
          <span id="keen-slider-active"></span>
          /
          <span id="keen-slider-count"></span>
        </p>

        <button
          aria-label="Next slide"
          id="keen-slider-next"
          class="text-gray-600 transition-colors hover:text-gray-900"
        >
          <svg
            class="size-5"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M9 5l7 7-7 7"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
            />
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>




    <main class="p-5 bg-light-blue">
      <div class="flex justify-center items-start my-2">
        <div class="w-full sm:w-10/12 md:w-1/2 my-1">
          <h2 class="text-xl font-semibold text-vnet-blue mb-2">FAQ - Order, Shipping, Etc.</h2>
          <ul class="flex flex-col">
            <li class="bg-white my-2 shadow-lg" x-data="accordion(1)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>When will my order arrive?</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                x-ref="tab"
                :style="handleToggle()"
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
              >
                <p class="p-3 text-gray-900">
                  Shipping time is set by our delivery partners, according to the delivery method chosen by you. Additional details can be found in the order confirmation
                </p>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(2)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>How do I track my order?</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                  Once shipped, you’ll get a confirmation email that includes a tracking number and additional information regarding tracking your order.
                </p>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(3)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>What’s your return policy?</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                  We allow the return of all items within 30 days of your original order’s date. If you’re interested in returning your items, send us an email with your order number and we’ll ship a return label.
                </p>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(4)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>How do I make changes to an existing order?</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                  Changes to an existing order can be made as long as the order is still in “processing” status. Please contact our team via email and we’ll make sure to apply the needed changes. If your order has already been shipped, we cannot apply any changes to it. If you are unhappy with your order when it arrives, please contact us for any changes you may require.
                </p>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(5)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>What shipping options do you have?</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                  For USA domestic orders we offer FedEx and USPS shipping.
                </p>
              </div>
            </li>
            <li class="bg-white my-2 shadow-lg" x-data="accordion(6)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>What payment methods do you accept?</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                  Any method of payments acceptable by you. For example: We accept MasterCard, Visa, American Express, PayPal, JCB Discover, Gift Cards, etc.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </main>

  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.store('accordion', {
        tab: 0
      });
      
      Alpine.data('accordion', (idx) => ({
        init() {
          this.idx = idx;
        },
        idx: -1,
        handleClick() {
          this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
        },
        handleRotate() {
          return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
        },
        handleToggle() {
          return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
        }
      }));
    })
  </script>

<div class="max-w-6xl mx-auto p-6">
    <h1 class="text-4xl font-bold text-center mb-8">Customer Reviews</h1>
  
    <!-- Overall Rating Section -->
    <div class="flex items-center gap-2 mb-8">
      <!-- Rating Stars -->
      <div class="flex gap-1">
        <svg class="w-6 h-6 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
        </svg>
        <svg class="w-6 h-6 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
        </svg>
        <svg class="w-6 h-6 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
        </svg>
        <svg class="w-6 h-6 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
        </svg>
        <svg class="w-6 h-6 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
        </svg>
      </div>
      <span class="text-lg">176 Reviews</span>
      <button class="ml-auto">
        <div class="w-6 h-6 flex flex-col justify-between">
          <div class="h-0.5 w-full bg-black"></div>
          <div class="h-0.5 w-full bg-black"></div>
          <div class="h-0.5 w-full bg-black"></div>
        </div>
      </button>
    </div>
  
    <!-- Reviews Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
      <!-- Single Review -->
      <div class="border rounded-lg p-4">
        <!-- Image Gallery -->
        <div class="relative mb-4">
          <img src="/api/placeholder/400/300" alt="Product review" class="w-full h-48 object-cover rounded-lg">
          <div class="absolute top-2 right-2 bg-white rounded-full px-2 py-1 text-sm">+3</div>
        </div>
  
        <!-- Review Content -->
        <div class="space-y-2">
          <div class="flex items-center gap-2">
            <span class="font-semibold">Srinivas C.</span>
            <span class="text-blue-600 text-sm flex items-center">
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M5 13l4 4L19 7"/>
              </svg>
              Verified
            </span>
          </div>
          <div class="text-gray-500 text-sm">11/17/2024</div>
          <div class="flex gap-1">
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
          </div>
          <p class="text-gray-700">It's Very Nice and Comfortable....</p>
          <div class="text-sm text-gray-500">
            <span class="font-medium">Item type:</span>
            <span class="ml-1">King / 72" x 72"</span>
          </div>
        </div>
      </div>
      <div class="border rounded-lg p-4">
        <!-- Image Gallery -->
        <div class="relative mb-4">
          <img src="/api/placeholder/400/300" alt="Product review" class="w-full h-48 object-cover rounded-lg">
          <div class="absolute top-2 right-2 bg-white rounded-full px-2 py-1 text-sm">+3</div>
        </div>
  
        <!-- Review Content -->
        <div class="space-y-2">
          <div class="flex items-center gap-2">
            <span class="font-semibold">Srinivas C.</span>
            <span class="text-blue-600 text-sm flex items-center">
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M5 13l4 4L19 7"/>
              </svg>
              Verified
            </span>
          </div>
          <div class="text-gray-500 text-sm">11/17/2024</div>
          <div class="flex gap-1">
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
          </div>
          <p class="text-gray-700">It's Very Nice and Comfortable....</p>
          <div class="text-sm text-gray-500">
            <span class="font-medium">Item type:</span>
            <span class="ml-1">King / 72" x 72"</span>
          </div>
        </div>
      </div>
      <div class="border rounded-lg p-4">
        <!-- Image Gallery -->
        <div class="relative mb-4">
          <img src="/api/placeholder/400/300" alt="Product review" class="w-full h-48 object-cover rounded-lg">
          <div class="absolute top-2 right-2 bg-white rounded-full px-2 py-1 text-sm">+3</div>
        </div>
  
        <!-- Review Content -->
        <div class="space-y-2">
          <div class="flex items-center gap-2">
            <span class="font-semibold">Srinivas C.</span>
            <span class="text-blue-600 text-sm flex items-center">
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M5 13l4 4L19 7"/>
              </svg>
              Verified
            </span>
          </div>
          <div class="text-gray-500 text-sm">11/17/2024</div>
          <div class="flex gap-1">
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
          </div>
          <p class="text-gray-700">It's Very Nice and Comfortable....</p>
          <div class="text-sm text-gray-500">
            <span class="font-medium">Item type:</span>
            <span class="ml-1">King / 72" x 72"</span>
          </div>
        </div>
      </div>
      <div class="border rounded-lg p-4">
        <!-- Image Gallery -->
        <div class="relative mb-4">
          <img src="/api/placeholder/400/300" alt="Product review" class="w-full h-48 object-cover rounded-lg">
          <div class="absolute top-2 right-2 bg-white rounded-full px-2 py-1 text-sm">+3</div>
        </div>
  
        <!-- Review Content -->
        <div class="space-y-2">
          <div class="flex items-center gap-2">
            <span class="font-semibold">Srinivas C.</span>
            <span class="text-blue-600 text-sm flex items-center">
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M5 13l4 4L19 7"/>
              </svg>
              Verified
            </span>
          </div>
          <div class="text-gray-500 text-sm">11/17/2024</div>
          <div class="flex gap-1">
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
          </div>
          <p class="text-gray-700">It's Very Nice and Comfortable....</p>
          <div class="text-sm text-gray-500">
            <span class="font-medium">Item type:</span>
            <span class="ml-1">King / 72" x 72"</span>
          </div>
        </div>
      </div>
      <div class="border rounded-lg p-4">
        <!-- Image Gallery -->
        <div class="relative mb-4">
          <img src="/api/placeholder/400/300" alt="Product review" class="w-full h-48 object-cover rounded-lg">
          <div class="absolute top-2 right-2 bg-white rounded-full px-2 py-1 text-sm">+3</div>
        </div>
  
        <!-- Review Content -->
        <div class="space-y-2">
          <div class="flex items-center gap-2">
            <span class="font-semibold">Srinivas C.</span>
            <span class="text-blue-600 text-sm flex items-center">
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M5 13l4 4L19 7"/>
              </svg>
              Verified
            </span>
          </div>
          <div class="text-gray-500 text-sm">11/17/2024</div>
          <div class="flex gap-1">
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
          </div>
          <p class="text-gray-700">It's Very Nice and Comfortable....</p>
          <div class="text-sm text-gray-500">
            <span class="font-medium">Item type:</span>
            <span class="ml-1">King / 72" x 72"</span>
          </div>
        </div>
      </div>
   <div class="border rounded-lg p-4">
        <!-- Image Gallery -->
        <div class="relative mb-4">
          <img src="/api/placeholder/400/300" alt="Product review" class="w-full h-48 object-cover rounded-lg">
          <div class="absolute top-2 right-2 bg-white rounded-full px-2 py-1 text-sm">+3</div>
        </div>
  
        <!-- Review Content -->
        <div class="space-y-2">
          <div class="flex items-center gap-2">
            <span class="font-semibold">Srinivas C.</span>
            <span class="text-blue-600 text-sm flex items-center">
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M5 13l4 4L19 7"/>
              </svg>
              Verified
            </span>
          </div>
          <div class="text-gray-500 text-sm">11/17/2024</div>
          <div class="flex gap-1">
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
            <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M12 17.27l4.18 2.73-1.64-5.51L20 9.24l-5.46-.46L12 3 9.46 8.78 4 9.24l3.46 5.25L7.82 20z"/>
            </svg>
          </div>
          <p class="text-gray-700">It's Very Nice and Comfortable....</p>
          <div class="text-sm text-gray-500">
            <span class="font-medium">Item type:</span>
            <span class="ml-1">King / 72" x 72"</span>
          </div>
        </div>
      </div>
  
      <!-- More reviews can be added similarly -->
    </div>
  </div>
  
@endsection