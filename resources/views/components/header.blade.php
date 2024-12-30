 <!-- Top Bar -->
 <div class="w-full bg-black text-white">
    <div class="relative overflow-hidden">
      <div id="slider" class="flex transition-transform duration-500 ease-in-out">
        <!-- Slider Items -->
        <div class="flex-shrink-0 w-full py-2 text-center">
          <p>🔥 Limited-time offer: Get 50% off all products!</p>
        </div>
        <div class="flex-shrink-0 w-full py-2 text-center">
          <p>📦 Free shipping on orders over $50!</p>
        </div>
        <div class="flex-shrink-0 w-full py-2 text-center">
          <p>💳 Sign up for our loyalty program and earn points!</p>
        </div>
      </div>
    </div>
  </div>






  <nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
      <!-- Logo -->
      <div class="text-2xl font-bold text-gray-800">
        <a href="/">Frido</a>
      </div>
  
      <!-- Desktop Links -->
      <div class="hidden md:flex items-center space-x-6">
        <a href="#" class="text-gray-600 hover:text-gray-800">Categories</a>
        <a href="{{ route('combos') }}" class="text-gray-600 hover:text-gray-800">Combos</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">Best Seller</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">New Launches</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">More</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">Contact us</a>
      </div>
  
      <!-- Search Bar -->
      {{-- <div class="hidden md:block flex-1 mx-6">
        <input
          type="text"
          placeholder="Search products..."
          class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
        />
      </div> --}}
  
      <!-- Icons -->
      <div class="hidden md:flex items-center space-x-4">
        <a href="#" class="text-gray-600 hover:text-gray-800">
            <i class="ri-search-line"></i>
        </a>
        <a href="#" class="text-gray-600 hover:text-gray-800">
            <i class="ri-handbag-line"></i>
        </a>
        <a href="#" class="text-gray-600 hover:text-gray-800">
            <i class="ri-user-3-fill"></i>
        </a>
      </div>
  
      <!-- Mobile Menu Button -->
      <button
        class="md:hidden text-gray-600 hover:text-gray-800 focus:outline-none"
        onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
      </button>
    </div>
  
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-white shadow-md">
      <div class="px-4 pt-4 pb-2 space-y-2">
        <a href="#" class="block text-gray-600 hover:text-gray-800">Categories</a>
        <a href="{{ route('combos') }}" class="block text-gray-600 hover:text-gray-800">combos</a>
        <a href="#" class="block text-gray-600 hover:text-gray-800">Best Seller</a>
        <a href="#" class="block text-gray-600 hover:text-gray-800">New Launches</a>
        <a href="#" class="block text-gray-600 hover:text-gray-800">more</a>
        <a href="#" class="block text-gray-600 hover:text-gray-800">Contact us</a>
        {{-- <input
          type="text"
          placeholder="Search products..."
          class="w-full px-4 py-2 mt-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
        /> --}}
        <div class="flex items-center space-x-4 mt-2">
          <a href="/cart" class="text-gray-600 hover:text-gray-800">
            <i class="ri-handbag-line"></i>
          </a>
          <a href="/profile" class="text-gray-600 hover:text-gray-800">
            <i class="ri-user-3-fill"></i>
          </a>
        </div>
      </div>
    </div>
  </nav>
  




  <script>
    // JavaScript for Auto-Sliding
    const slider = document.getElementById('slider');
    const slides = slider.children;
    const totalSlides = slides.length;
    let currentIndex = 0;

    function slide() {
      currentIndex = (currentIndex + 1) % totalSlides;
      slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    // Auto-slide every 3 seconds
    setInterval(slide, 3000);
  </script>