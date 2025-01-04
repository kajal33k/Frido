@extends('frontend.account.layout.layout')

@section('account-content')
<div class="max-w-6xl mx-auto px-4 py-8">

    <!-- Header -->
    <h1 class="text-2xl md:text-4xl font-bold text-center text-gray-800 mb-6">Good Afternoon!</h1>

    <!-- Main Content -->
    <div id="mainContent" class="bg-white shadow-md rounded-lg p-6 md:p-8">
        <div class="flex justify-center items-center">
            <div class="bg-white shadow-lg rounded-lg w-80 h-40 flex items-center justify-center border">
                <div class="text-center">
                    <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="material-icons text-yellow-500 text-2xl">add_location</span>
                    </div>
                    <button 
                        id="addAddressButton" 
                        class="bg-yellow-500 text-white px-4 py-2 rounded-lg font-medium hover:bg-yellow-600 transition-all duration-200">
                        Add New Address
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Address Form -->
    <div id="addAddressForm" class="bg-white shadow-lg rounded-lg p-6 md:p-8 hidden">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold text-gray-800">Add New Address</h2>
            <!-- Close Button -->
            <button id="closeFormButton" class="text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Form -->
        <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @csrf
            <div>
                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                <input type="text" id="first_name" name="first_name" placeholder="First Name"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500">
            </div>
            <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                <input type="text" id="last_name" name="last_name" placeholder="Last Name"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500">
            </div>
            <div>
                <label for="address_line_1" class="block text-sm font-medium text-gray-700">Address Line 1</label>
                <input type="text" id="address_line_1" name="address_line_1" placeholder="Address Line 1"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500">
            </div>
            <div>
                <label for="address_line_2" class="block text-sm font-medium text-gray-700">Address Line 2</label>
                <input type="text" id="address_line_2" name="address_line_2" placeholder="Address Line 2"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500">
            </div>
            <div>
                <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                <input type="text" id="company" name="company" placeholder="Company"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500">
            </div>
            <div>
                <label for="postal_code" class="block text-sm font-medium text-gray-700">Postal/Zip Code</label>
                <input type="text" id="postal_code" name="postal_code" placeholder="Postal/Zip Code"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500">
            </div>
            <div>
                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                <input type="text" id="city" name="city" placeholder="City"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500">
            </div>
            <div>
                <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                <input type="text" id="country" name="country" placeholder="Country"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500">
            </div>
            <div class="md:col-span-2">
                <label for="contact_number" class="block text-sm font-medium text-gray-700">Contact Number</label>
                <div class="flex mt-1">
                    <span class="inline-flex items-center px-3 rounded-l-lg border border-gray-300 bg-gray-100 text-gray-500">
                        +91
                    </span>
                    <input type="text" id="contact_number" name="contact_number" placeholder="Contact Number"
                        class="block w-full px-4 py-2 border-t border-r border-b border-gray-300 rounded-r-lg focus:ring-yellow-500 focus:border-yellow-500">
                </div>
            </div>
            <!-- Default Address Toggle -->
            <div class="md:col-span-2 flex items-center space-x-3">
                <label for="default_address" class="flex items-center cursor-pointer">
                    <div class="relative">
                        <input type="checkbox" id="default_address" name="default_address" class="sr-only peer">
                        <div class="w-8 h-4 bg-gray-200 rounded-full peer-checked:bg-yellow-500 transition duration-200"></div>
                        <div
                            class="absolute top-0.5 left-0.5 w-3 h-3 bg-white rounded-full shadow peer-checked:translate-x-4 transition-transform duration-200">
                        </div>
                    </div>
                    <span class="ml-3 text-sm font-medium text-gray-700">Mark As Default Address</span>
                </label>
            </div>
            <div class="md:col-span-2 text-right mt-4">
                <button type="submit"
                    class="bg-yellow-500 text-white px-6 py-2 rounded-lg font-medium hover:bg-yellow-600 transition">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('addAddressButton').addEventListener('click', function() {
        document.getElementById('mainContent').classList.add('hidden');
        document.getElementById('addAddressForm').classList.remove('hidden');
    });

    document.getElementById('closeFormButton').addEventListener('click', function() {
        document.getElementById('addAddressForm').classList.add('hidden');
        document.getElementById('mainContent').classList.remove('hidden');
    });
</script>

@endsection
