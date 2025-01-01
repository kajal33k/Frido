@extends('components.main')
@section('content')
<div class="max-w-sm mx-auto bg-white p-6 rounded-lg shadow-md my-32">
    <form>
        <div class="mb-6">
            <p class="text-gray-700 mb-3">Search By:</p>
            <div class="space-y-3">
                <!-- Order ID Radio Button -->
                <label class="flex items-center cursor-pointer">
                    <div class="relative">
                        <input type="radio" name="search-type" value="order" class="sr-only" onchange="updateForm()">
                        <div class="w-5 h-5 border border-gray-300 rounded-full"></div>
                    </div>
                    <span class="ml-3 text-gray-700">Order ID/No</span>
                </label>

                <!-- Tracking ID Radio Button -->
                <label class="flex items-center cursor-pointer">
                    <div class="relative">
                        <input type="radio" name="search-type" value="tracking" class="sr-only" checked onchange="updateForm()">
                        <div class="w-5 h-5 border border-gray-300 rounded-full"></div>
                    </div>
                    <span class="ml-3 text-gray-700">Tracking ID/AWB</span>
                </label>
            </div>
        </div>

        <!-- Input Field -->
        <input 
            type="text" 
            id="search-input"
            placeholder="Enter Your Tracking ID/AWB" 
            class="w-full px-4 py-3 border border-gray-300 rounded mb-4 focus:outline-none focus:border-purple-700"
        >

        <!-- Track Button -->
        <button 
            type="submit" 
            class="w-full bg-purple-700 text-white py-3 rounded hover:bg-purple-800 transition-colors"
        >
            Track Your Order
        </button>

        <!-- Help Text -->
        <p class="mt-4 text-gray-700">Check current status of your shipment.</p>
    </form>
</div>

<style>
    /* Custom radio button styles */
    input[type="radio"]:checked + div {
        border-color: #6b21a8;
        background-color: #6b21a8;
    }
    input[type="radio"]:focus + div {
        box-shadow: 0 0 0 3px rgba(107, 33, 168, 0.2);
    }
</style>

<script>
    function updateForm() {
        const orderRadio = document.querySelector('input[value="order"]');
        const trackingRadio = document.querySelector('input[value="tracking"]');
        const searchInput = document.getElementById('search-input');

        if (orderRadio.checked) {
            searchInput.placeholder = "Enter Your Order ID/No";
        } else if (trackingRadio.checked) {
            searchInput.placeholder = "Enter Your Tracking ID/AWB";
        }
    }

    // Initial call to set the correct placeholder on page load
    updateForm();
</script>

@endsection
