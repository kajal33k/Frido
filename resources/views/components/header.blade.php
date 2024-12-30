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
        <!-- Categories Dropdown -->
        <div class="relative group">
          <a href="#" class="text-gray-600 hover:text-gray-800">Categories</a>
          <div class="absolute hidden group-hover:block mt-2 w-48 bg-white shadow-md rounded-lg">
            <a href="{{route('inshole')}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
            <div class="flex flex-1">
              <img src="{{asset('assets/image/category1.jpeg')}}" alt="" class="h-10 w-10">
              <p>Shoes Inshole</p>
            </div>
            </a>
            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
              <div class="flex flex-1">
                <img src="{{asset('assets/image/category1.jpeg')}}" alt="" class="h-10 w-10">
                <p>Shoes Inshole</p>
              </div>
            </a>
            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
              <div class="flex flex-1">
                <img src="{{asset('assets/image/category1.jpeg')}}" alt="" class="h-10 w-10">
                <p>Shoes Inshole</p>
              </div>
            </a>
            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
              <div class="flex flex-1">
                <img src="{{asset('assets/image/category1.jpeg')}}" alt="" class="h-10 w-10">
                <p>Shoes Inshole</p>
              </div>
            </a>
          </div>
        </div>
      
        <!-- Combos -->
        <a href="{{ route('combos') }}" class="text-gray-600 hover:text-gray-800">Combos</a>
      
        <!-- Best Seller -->
        <a href="#" class="text-gray-600 hover:text-gray-800">Best Seller</a>
      
        <!-- New Launches -->
        <a href="#" class="text-gray-600 hover:text-gray-800">New Launches</a>
      
        <!-- More Dropdown -->
        <div class="relative group">
          <a href="#" class="text-gray-600 hover:text-gray-800">More</a>
          <div class="absolute hidden group-hover:block mt-2 w-48 bg-white shadow-md rounded-lg">
            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">Option 1</a>
            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">Option 2</a>
            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">Option 3</a>
            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">Option 4</a>
          </div>
        </div>
      
        <!-- Contact Us -->
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
   <!-- Mobile Menu Trigger Button -->
{{-- <button 
id="menu-toggle" 
class="md:hidden block text-gray-600 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800"
>
<i class="ri-menu-line text-2xl"></i>
</button> --}}

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
<div class="px-4 pt-4 pb-2 space-y-2">
  <!-- Categories Dropdown -->
  <div class="relative">
    <button 
      class="w-full text-left text-gray-600 hover:text-gray-800 flex justify-between items-center" 
      onclick="toggleDropdown('categories-dropdown')"
    >
      Categories
      <i class="ri-arrow-down-s-line"></i>
    </button>
    <div id="categories-dropdown" class="hidden pl-4 space-y-1">
      <a href="#" class="block text-gray-600 hover:text-gray-800">Category 1</a>
      <a href="#" class="block text-gray-600 hover:text-gray-800">Category 2</a>
      <a href="#" class="block text-gray-600 hover:text-gray-800">Category 3</a>
      <a href="#" class="block text-gray-600 hover:text-gray-800">Category 4</a>
    </div>
  </div>

  <!-- Combos -->
  <a href="{{ route('combos') }}" class="block text-gray-600 hover:text-gray-800">Combos</a>

  <!-- Best Seller -->
  <a href="#" class="block text-gray-600 hover:text-gray-800">Best Seller</a>

  <!-- New Launches -->
  <a href="#" class="block text-gray-600 hover:text-gray-800">New Launches</a>

  <!-- More Dropdown -->
  <div class="relative">
    <button 
      class="w-full text-left text-gray-600 hover:text-gray-800 flex justify-between items-center" 
      onclick="toggleDropdown('more-dropdown')"
    >
      More
      <i class="ri-arrow-down-s-line"></i>
    </button>
    <div id="more-dropdown" class="hidden pl-4 space-y-1">
      <a href="#" class="block text-gray-600 hover:text-gray-800">Option 1</a>
      <a href="#" class="block text-gray-600 hover:text-gray-800">Option 2</a>
      <a href="#" class="block text-gray-600 hover:text-gray-800">Option 3</a>
      <a href="#" class="block text-gray-600 hover:text-gray-800">Option 4</a>
    </div>
  </div>

  <!-- Contact Us -->
  <a href="#" class="block text-gray-600 hover:text-gray-800">Contact us</a>

  <!-- Cart and Profile -->
  <div class="flex items-center space-x-4 mt-4">
    <a href="/cart" class="text-gray-600 hover:text-gray-800">
      <i class="ri-handbag-line"></i>
    </a>
    <a href="/profile" class="text-gray-600 hover:text-gray-800">
      <i class="ri-user-3-fill"></i>
    </a>
  </div>
</div>
</div>

<!-- JavaScript for Dropdown and Mobile Menu -->
<script>
// Toggle Mobile Menu Visibility
document.getElementById('menu-toggle').addEventListener('click', () => {
  const menu = document.getElementById('mobile-menu');
  menu.classList.toggle('hidden');
});

// Toggle Dropdown Visibility
function toggleDropdown(id) {
  const dropdown = document.getElementById(id);
  dropdown.classList.toggle('hidden');
}
</script>

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