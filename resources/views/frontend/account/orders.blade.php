@extends('frontend.account.layout.layout')

@section('account-content')
    <!-- Main Content -->
    <div class="flex-grow p-4 md:p-6 bg-gray-50">
        <div class="max-w-xl mx-auto">
            <h1 class="text-xl md:text-3xl font-semibold text-center text-gray-800 mb-2 md:mb-4">Good Morning!</h1>
            <p class="text-gray-500 text-center mb-4 md:mb-6">Welcome back to your dashboard</p>

            <div class="bg-white shadow-lg rounded-lg p-4 md:p-6 text-center">
                <div class="w-14 h-14 md:w-16 md:h-16 bg-yellow-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="material-icons text-yellow-500 text-xl md:text-2xl">shopping_cart</span>
                </div>
                <h2 class="text-lg font-semibold text-gray-800 mb-3">Start Shopping</h2>
                <p class="text-gray-600 text-sm mb-4">
                    You haven't placed any orders yet. <br>
                    We can't wait to have you as a customer.
                </p>
                <a href="#"
                    class="text-yellow-500 font-semibold hover:text-yellow-600 underline mb-4 inline-block text-sm">
                    Browse our collection
                </a>
                <div class="mt-4">
                    <button
                        class="w-full bg-yellow-500 text-white px-5 py-2 rounded-lg font-medium hover:bg-yellow-600 transition-all duration-200 text-sm">
                        View Products
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
