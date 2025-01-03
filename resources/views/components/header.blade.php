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
        {{-- <div class="relative group">
          <a href="#" class="text-gray-600 hover:text-gray-800">Categories</a>
          <div class="absolute hidden group-hover:block mt-2 w-48 bg-white shadow-md rounded-lg">
            <a href="{{route('inshole')}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
            <div class="flex flex-1">
              <img src="{{asset('assets/image/category1.jpeg')}}" alt="" class="h-10 w-10 rounded-full">
              <p>Shoes Inshole</p>
            </div>
            </a>
            <a href="{{route('pages.cusion')}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
              <div class="flex flex-1">
                <img src="{{asset('assets/image/category1.jpeg')}}" alt="" class="h-10 w-10 rounded-full">
                <p>Ergo cusion</p>
              </div>
            </a>
            <a href="{{route('pages.cusion')}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
              <div class="flex flex-1">
                <img src="{{asset('assets/image/category1.jpeg')}}" alt="" class="h-10 w-10 rounded-full">
                <p>Ergo Pillow</p>
              </div>
            </a>
            <a href="{{route('products.product')}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
              <div class="flex flex-1">
                <img src="{{asset('assets/image/category1.jpeg')}}" alt="" class="h-10 w-10 rounded-full">
                <p>Matress Toper</p>
              </div>
            </a>
            <a href="{{route('products.product')}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
              <div class="flex flex-1">
                <img src="{{asset('assets/image/category1.jpeg')}}" alt="" class="h-10 w-10 rounded-full">
                <p>Matress Toper</p>
              </div>
            </a>
            <a href="{{route('products.product')}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
              <div class="flex flex-1">
                <img src="{{asset('assets/image/category1.jpeg')}}" alt="" class="h-10 w-10 rounded-full">
                <p>Socks
                </p>
              </div>
            </a>
            <a href="{{route('products.product')}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
              <div class="flex flex-1">
                <img src="{{asset('assets/image/category1.jpeg')}}" alt="" class="h-10 w-10 rounded-full">
                <p>Barefoot Footwear
                </p>
              </div>
            </a>
            <a href="{{route('products.product')}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
              <div class="flex flex-1">
                <img src="{{asset('assets/image/category1.jpeg')}}" alt="" class="h-10 w-10 rounded-full">
                <p>Ergo Chair
                </p>
              </div>
            </a>
          </div>
        </div>
       --}}
       <!-- Categories Dropdown -->
<div class="relative">
  <button 
    class="text-gray-600 hover:text-gray-800 flex items-center" 
    onclick="toggleDropdown('desktop-categories-dropdown')"
  >
    Categories
    <i class="ri-arrow-down-s-line ml-2"></i>
  </button>
  <div 
    id="desktop-categories-dropdown" 
    class="absolute hidden mt-2 w-48 bg-white shadow-md rounded-lg"
  >
    <a href="{{route('inshole')}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
      <div class="flex flex-1">
        <img src="{{asset('assets/image/category1.jpeg')}}" alt="" class="h-10 w-10 rounded-full">
        <p>Shoes Inshole</p>
      </div>
    </a>
    <a href="{{route('pages.cusion')}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
      <div class="flex flex-1">
        <img src="{{asset('assets/image/category1.jpeg')}}" alt="" class="h-10 w-10 rounded-full">
        <p>Ergo Cushion</p>
      </div>
    </a>
    
    <a href="{{route('inshole')}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
      <div class="flex items-center space-x-2">
        <img src="{{asset('assets/image/category1.jpeg')}}" alt="Category Image" class="h-10 w-10 rounded-full">
        <p>Sleep Pillows</p>
      </div>
    </a>
    <a href="{{route('inshole')}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
      <div class="flex items-center space-x-2">
        <img src="{{asset('assets/image/category1.jpeg')}}" alt="Category Image" class="h-10 w-10 rounded-full">
        <p>Mattress Toper</p>
      </div>
    </a>
    <a href="{{route('inshole')}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
      <div class="flex items-center space-x-2">
        <img src="{{asset('assets/image/category1.jpeg')}}" alt="Category Image" class="h-10 w-10 rounded-full">
        <p>Socks</p>
      </div>
    </a>
    <a href="{{route('inshole')}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
      <div class="flex items-center space-x-2">
        <img src="{{asset('assets/image/category1.jpeg')}}" alt="Category Image" class="h-10 w-10 rounded-full">
        <p>Barefoot Footwear</p>
      </div>
    </a>
    <a href="{{route('inshole')}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">
      <div class="flex items-center space-x-2">
        <img src="{{asset('assets/image/category1.jpeg')}}" alt="Category Image" class="h-10 w-10 rounded-full">
        <p>Ergo Chair</p>
      </div>
    </a>

    <!-- Add other category links here -->
  </div>
</div>



        <!-- Combos -->
        <a href="{{ route('collections.combos') }}" class="text-gray-600 hover:text-gray-800">Combos</a>
      
        <!-- Best Seller -->
        <a href="{{ route('collections.best-sellers') }}" class="text-gray-600 hover:text-gray-800">Best Seller</a>
      
        <!-- New Launches -->
        <a href="{{ route('collections.new-launches') }}" class="text-gray-600 hover:text-gray-800">New Launches</a>
      
     
       <!-- More Dropdown -->
<div class="relative">
  <button 
    class="text-gray-600 hover:text-gray-800 flex items-center" 
    onclick="toggleDropdown('desktop-more-dropdown')"
  >
    More
    <i class="ri-arrow-down-s-line ml-2"></i>
  </button>
  <div 
    id="desktop-more-dropdown" 
    class="absolute hidden mt-2 w-48 bg-white shadow-md rounded-lg"
  >
    <a href="{{route('pages.compare')}}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">Compare</a>
    <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">About Us</a>
    <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">Blogs</a>
    <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">Became a Retailer</a>
            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">Coporate Gifting</a>
            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">Store Locator</a>
            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">Affilate Program</a>
            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">Campus Ambassador</a>
            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800">Quiz</a>
    <!-- Add other links here -->
  </div>
</div>
        <!-- Contact Us -->
        <a href="#" class="text-gray-600 hover:text-gray-800">Contact us</a>
      </div>
      
   
      <!-- Icons -->
      <div class="hidden md:flex items-center space-x-4">
      
        
          <!-- Link to show the input field -->
          <a href="#inputField" 
             class="text-gray-600 pt-4 hover:text-gray-800 cursor-pointer inline-flex items-center space-x-0 mb-4">
            <i class="ri-search-line"></i>
           
          </a>
        
          <!-- Input with Close Icon -->
          <div id="inputWrapper" class="relative max-w-full mx-auto hidden sm:max-w-xs">
            <input 
              id="inputField"
              type="text"
              class="w-full p-2 pl-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Enter text"
            />
            <button
              id="clearInputBtn"
              class="absolute top-1/2 right-2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 hidden"
              style="font-size: 18px;"
            >
              &times; <!-- Close icon (X) -->
            </button>
          </div>
        
          <script>
            // Get the input field, clear button, and wrapper elements
            const inputField = document.getElementById("inputField");
            const clearInputBtn = document.getElementById("clearInputBtn");
            const inputWrapper = document.getElementById("inputWrapper");
        
            // Toggle visibility of the input field when the link is clicked
            document.querySelector('a[href="#inputField"]').addEventListener('click', (e) => {
              e.preventDefault(); // Prevent the default anchor link behavior
              inputWrapper.classList.toggle("hidden"); // Toggle input visibility
              inputField.focus(); // Focus on the input field when shown
            });
        
            // Event listener to clear the input field when the close button is clicked
            clearInputBtn.addEventListener("click", () => {
              inputField.value = '';  // Clear the input field
              inputField.focus();  // Focus back on the input field
            });
        
            // Show/hide the close icon based on input field value
            inputField.addEventListener("input", () => {
              if (inputField.value) {
                clearInputBtn.classList.remove("hidden"); // Show the close button
              } else {
                clearInputBtn.classList.add("hidden"); // Hide the close button
              }
            });
          </script>
      
        

        {{-- <a href="#" class="text-gray-600 hover:text-gray-800" id="open-modal">
          <i class="ri-handbag-line" id="cart-trigger"></i>
        </a> --}}
       <!-- Cart Icon -->
<a href="#" class="text-gray-600 hover:text-gray-800" id="open-cart">
  <i class="ri-handbag-line" id="cart-trigger"></i>
</a>

<!-- Sliding Cart Popup -->
<div
  id="cart-popup"
  class="hidden fixed inset-y-0 right-0 z-50 w-80 bg-white shadow-lg transform translate-x-full transition-transform duration-300"
>
  <!-- Header -->
  <div class="p-4 border-b border-gray-200 flex justify-between items-center">
    <h2 class="text-lg font-semibold text-gray-800">Your Cart</h2>
    <button id="close-cart" class="text-gray-500 hover:text-gray-800">
      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>

  <!-- Cart Items -->
  <div class="p-4 space-y-4 overflow-y-auto h-[calc(100vh-350px)]">
    <!-- Example Item -->
    <div class="flex items-center">
      <img src="https://via.placeholder.com/80" alt="Product" class="w-16 h-16 rounded-lg object-cover">
      <div class="ml-4 flex-1">
        <h3 class="text-gray-800 font-medium">Product Name</h3>
        <p class="text-sm text-gray-500">Size: M</p>
        <p class="mt-1 text-gray-600 font-semibold">$50.00</p>
      </div>
      <div class="flex items-center space-x-2">
        <button class="px-2 py-1 text-gray-600 bg-gray-200 rounded hover:bg-gray-300">-</button>
        <span class="text-gray-800">1</span>
        <button class="px-2 py-1 text-gray-600 bg-gray-200 rounded hover:bg-gray-300">+</button>
      </div>
    </div>
    <!-- Add more items as needed -->
  </div>

  <!-- Checkout Section -->
  <div class="p-4 border-t border-gray-200">
    <div class="flex justify-between mb-2">
      <span class="text-gray-600">Subtotal</span>
      <span class="font-semibold">$50.00</span>
    </div>
    <div class="flex justify-between mb-2">
      <span class="text-gray-600">Shipping</span>
      <span class="font-semibold">$5.00</span>
    </div>
    <div class="flex justify-between text-lg font-medium">
      <span>Total</span>
      <span>$55.00</span>
    </div>
    <button
    id="proceedToCheckout"
    class="mt-4 w-full bg-yellow-600 text-white py-2 rounded-lg hover:bg-yellow-700 transition"
  >
    Proceed to Checkout
  </button>
  </div>
</div>

<!-- JavaScript -->
<script>
  const openCartBtn = document.getElementById("open-cart");
  const closeCartBtn = document.getElementById("close-cart");
  const cartPopup = document.getElementById("cart-popup");

  // Open cart
  openCartBtn.addEventListener("click", (e) => {
    e.preventDefault();
    cartPopup.classList.remove("hidden");
    cartPopup.classList.remove("translate-x-full");
  });

  // Close cart
  closeCartBtn.addEventListener("click", () => {
    cartPopup.classList.add("translate-x-full");
    setTimeout(() => {
      cartPopup.classList.add("hidden");
    }, 300); // Match the transition duration
  });
</script>

<!-- Modal -->
<div id="discountModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex justify-center items-center">
  <div class="relative bg-white rounded-lg shadow-lg w-full max-w-md p-6">
    <!-- Close Icon -->
    <button id="closeModalBtn" class="absolute top-2 right-2 text-gray-600 hover:text-gray-800">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>

    <h2 class="text-2xl font-semibold mb-4">Unlock Superior Discounts</h2>

    <label for="mobileNumber" class="block text-lg mb-2">Enter Mobile Number</label>
    <input type="text" id="mobileNumber" class="border border-gray-300 p-2 w-full mb-4 rounded-lg" placeholder="Enter your mobile number">

    <div class="flex items-center mb-4">
      <input type="checkbox" id="notifyMe" class="mr-2">
      <label for="notifyMe" class="text-sm text-gray-600">Notify me for any updates & offers</label>
    </div>

    <div class="mb-4">
      <button id="whatsappLoginBtn" class="bg-yellow-500 text-white py-2 px-4 rounded-lg hover:bg-yellow-600 transition w-full">
        <span class="flex items-center justify-center space-x-2">
          <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="w-5 h-5">
          <span>Login with WhatsApp</span>
        </span>
      </button>
    </div>

    <div class="text-sm text-gray-600 mb-4">
      <label for="termsCheckbox" class="inline-flex items-center">
        <input type="checkbox" id="termsCheckbox" class="mr-2">
        <span>I accept that I have read & understood <a href="#" class="text-blue-600">Gokwik's Privacy Policy</a> and <a href="#" class="text-blue-600">T&Cs</a>.</span>
      </label>
    </div>

    <div class="flex justify-between items-center">
      <button id="submitBtn" class="bg-yellow-600 text-white py-2 px-4 rounded-lg hover:bg-yellow-700 transition">
        Submit
      </button>
    </div>

    <div class="mt-4 text-sm text-gray-600">
      <a href="#" class="text-blue-600">Trouble logging in?</a>
    </div>
  </div>
</div>

<script>
  // Get modal and buttons
  const discountModal = document.getElementById("discountModal");
  const closeModalBtn = document.getElementById("closeModalBtn");
  const submitBtn = document.getElementById("submitBtn");
  const whatsappLoginBtn = document.getElementById("whatsappLoginBtn");
  const proceedToCheckoutBtn = document.getElementById("proceedToCheckout");

  // Open the modal when "Proceed to Checkout" is clicked
  proceedToCheckoutBtn.addEventListener("click", () => {
    discountModal.classList.remove("hidden");
  });

  // Close the modal when close icon is clicked
  closeModalBtn.addEventListener("click", () => {
    discountModal.classList.add("hidden");
  });

  // Handle form submission
  submitBtn.addEventListener("click", () => {
    const mobileNumber = document.getElementById("mobileNumber").value;
    const notifyMe = document.getElementById("notifyMe").checked;
    const termsChecked = document.getElementById("termsCheckbox").checked;

    if (!mobileNumber) {
      alert("Please enter a mobile number.");
      return;
    }

    if (!termsChecked) {
      alert("You must accept the Privacy Policy and T&Cs.");
      return;
    }

    alert(`Form submitted!\nMobile Number: ${mobileNumber}\nNotify Me: ${notifyMe ? "Yes" : "No"}`);
    discountModal.classList.add("hidden");
  });

  // WhatsApp login button
  whatsappLoginBtn.addEventListener("click", () => {
    alert("Login with WhatsApp feature coming soon!");
  });
</script>

<script>
          // Open modal
          document.getElementById('cart-trigger').addEventListener('click', function() {
            document.getElementById('cart-popup').classList.remove('hidden');
          });
        
          // Close modal
          document.getElementById('cart-close').addEventListener('click', function() {
            document.getElementById('cart-popup').classList.add('hidden');
          });
        
          // Close modal when clicking outside
          window.addEventListener('click', function(e) {
            if (e.target === document.getElementById('cart-popup')) {
              document.getElementById('cart-popup').classList.add('hidden');
            }
          });
</script>
        
     
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
      <a href="#" class="block text-gray-600 hover:text-gray-800">Shoe Inshole</a>
      <a href="#" class="block text-gray-600 hover:text-gray-800">Ergo Cushion</a>
      <a href="#" class="block text-gray-600 hover:text-gray-800">Sleep Pillows</a>
      <a href="#" class="block text-gray-600 hover:text-gray-800">Mattress Topper</a>
      <a href="#" class="block text-gray-600 hover:text-gray-800">Socks</a>
      <a href="#" class="block text-gray-600 hover:text-gray-800">Barefoot Footwear</a>
      <a href="#" class="block text-gray-600 hover:text-gray-800">Ergo Chair</a>

    </div>
  </div>

  <!-- Combos -->
  <a href="{{ route('collections.combos') }}" class="block text-gray-600 hover:text-gray-800">Combos</a>

  <!-- Best Seller -->
  <a href="{{ route('collections.best-sellers') }}" class="block text-gray-600 hover:text-gray-800">Best Seller</a>

  <!-- New Launches -->
  <a href="{{ route('collections.new-launches') }}" class="block text-gray-600 hover:text-gray-800">New Launches</a>

  <!-- More Dropdown -->
  <div class="relative">
    <button 3
      class="w-full text-left text-gray-600 hover:text-gray-800 flex justify-between items-center" 
      onclick="toggleDropdown('more-dropdown')"
    >
      More
      <i class="ri-arrow-down-s-line"></i>
    </button>
    <div id="more-dropdown" class="hidden pl-4 space-y-1">
      <a href="#" class="block text-gray-600 hover:text-gray-800">Compare Inshole</a>
      <a href="#" class="block text-gray-600 hover:text-gray-800">About us</a>
      <a href="#" class="block text-gray-600 hover:text-gray-800">Blogs</a>
      <a href="#" class="block text-gray-600 hover:text-gray-800">Became a Retailer</a>
      <a href="#" class="block text-gray-600 hover:text-gray-800">Corporate Gifting</a>
      <a href="#" class="block text-gray-600 hover:text-gray-800">Sotre Locator</a>
      <a href="#" class="block text-gray-600 hover:text-gray-800">Affilate Program</a>

    </div>
  </div>

  <!-- Contact Us -->
  <a href="#" class="block text-gray-600 hover:text-gray-800">Contact us</a>

  <!-- Cart and Profile -->
  <div class="flex items-center space-x-4 mt-4">
    <a href="#" class="text-gray-600 hover:text-gray-800" id="open-cart">
      <i class="ri-handbag-line" id="cart-trigger"></i>
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
  <script>
    // Toggle Dropdown Visibility
    function toggleDropdown(id) {
      const dropdown = document.getElementById(id);
      dropdown.classList.toggle('hidden');
    }
  
    // Close dropdowns when clicking outside
    document.addEventListener('click', function (event) {
      const dropdowns = ['desktop-categories-dropdown', 'desktop-more-dropdown'];
      dropdowns.forEach(id => {
        const dropdown = document.getElementById(id);
        const button = dropdown.previousElementSibling;
        if (!dropdown.contains(event.target) && !button.contains(event.target)) {
          dropdown.classList.add('hidden');
        }
      });
    });
  </script>
  