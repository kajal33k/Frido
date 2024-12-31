@extends('components.main')

@section('content')
    <div class="py-10 bg-white">
        <!-- Header Section -->
        <div class="text-center max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-extrabold text-purple-700">Become a Retailer</h1>
            <p class="mt-3 text-base text-gray-600 leading-relaxed">
                Welcome to the Frido family! As a Frido retailer, you’ll have access to our high-quality products, marketing materials, and support from our dedicated team.
            </p>
            <p class="mt-3 text-base text-gray-600 leading-relaxed">
                If you have any questions or would like to learn more about our retailer program, please feel free to reach out to us via WhatsApp or phone call. Simply click on the buttons below to get in touch with us directly. We're excited to hear from you!
            </p>
        </div>

        <!-- Retailer Contacts Section -->
        <div class="mt-10 max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 gap-6 px-4 sm:px-6 lg:px-8">
            <!-- Retailer 1 -->
            <div class="bg-yellow-100 rounded-lg shadow-lg p-5 text-center">
                <h3 class="text-lg font-semibold text-gray-800">Vivek Iyer</h3>
                <div class="mt-4 flex justify-center space-x-4">
                    <a href="tel:+91XXXXXXXXXX" class="flex items-center px-4 py-2 bg-purple-700 text-white rounded-md shadow-md hover:bg-purple-800 transition duration-300 ease-in-out">
                        <i class="material-icons w-5 h-5 mr-2">phone</i>
                        Call
                    </a>
                    <a href="https://wa.me/91XXXXXXXXXX" target="_blank" class="flex items-center px-4 py-2 bg-green-500 text-white rounded-md shadow-md hover:bg-green-600 transition duration-300 ease-in-out">
                        <i class="fab fa-whatsapp w-5 h-5 mr-2"></i>
                        WhatsApp
                    </a>
                </div>
            </div>
            <!-- Retailer 2 -->
            <div class="bg-yellow-100 rounded-lg shadow-lg p-5 text-center">
                <h3 class="text-lg font-semibold text-gray-800">Savio Abraham</h3>
                <div class="mt-4 flex justify-center space-x-4">
                    <a href="tel:+91XXXXXXXXXX" class="flex items-center px-4 py-2 bg-purple-700 text-white rounded-md shadow-md hover:bg-purple-800 transition duration-300 ease-in-out">
                        <i class="material-icons w-5 h-5 mr-2">phone</i>
                        Call
                    </a>
                    <a href="https://wa.me/91XXXXXXXXXX" target="_blank" class="flex items-center px-4 py-2 bg-green-500 text-white rounded-md shadow-md hover:bg-green-600 transition duration-300 ease-in-out">
                        <i class="fab fa-whatsapp w-5 h-5 mr-2"></i>
                        WhatsApp
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer Section -->
        <div class="mt-10 text-center">
            <a href="#" class="fixed bottom-6 right-6 flex items-center px-5 py-3 bg-purple-700 text-white rounded-md shadow-lg hover:bg-purple-800 transition duration-300 ease-in-out">
                <i class="material-icons w-5 h-5 mr-2">redeem</i>
                Refer and Earn
            </a>
        </div>
    </div>
@endsection
