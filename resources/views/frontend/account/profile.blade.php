@extends('frontend.account.layout.layout')

@section('account-content')
    <div class="max-w-4xl mx-auto px-6 py-12 bg-white shadow-md rounded-lg">

        <!-- Header -->
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-12">Good Morning!</h1>

        <!-- Profile Form -->
        <form action="#" method="POST" class="space-y-12">
            @csrf
            <!-- Name Fields Row -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-4">
                    <label for="firstName" class="text-sm font-medium text-gray-700">
                        <span class="text-red-500">*</span>First Name
                    </label>
                    <input type="text" id="firstName" name="firstName" value="John"
                        class="block w-full px-4 py-2 rounded-md border-gray-300 bg-gray-100 shadow-sm" required>
                </div>

                <div class="space-y-4">
                    <label for="lastName" class="text-sm font-medium text-gray-700">
                        <span class="text-red-500">*</span>Last Name
                    </label>
                    <input type="text" id="lastName" name="lastName" value="Doe"
                        class="block w-full px-4 py-2 rounded-md border-gray-300 bg-gray-100 shadow-sm" required>
                </div>
            </div>

            <!-- Contact Info Row -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-4">
                    <label for="email" class="text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="johndoe@example.com"
                        class="block w-full px-4 py-2 rounded-md border-gray-300 bg-gray-100 shadow-sm" required>
                </div>

                <div class="space-y-4">
                    <label for="phone" class="text-sm font-medium text-gray-700">Contact Number</label>
                    <input type="tel" id="phone" name="phone" value="+1234567890"
                        class="block w-full px-4 py-2 rounded-md border-gray-300 bg-gray-100 shadow-sm" required>
                </div>
            </div>

            <!-- Birthdate -->
            <div class="space-y-4">
                <label class="text-sm font-medium text-gray-700">Birthdate</label>
                <div class="grid grid-cols-3 gap-6">
                    <input type="text" placeholder="DD" name="dob_day" value="15" maxlength="2"
                        class="block w-full px-4 py-2 rounded-md border-gray-300 bg-gray-100 shadow-sm" required>
                    <input type="text" placeholder="MM" name="dob_month" value="08" maxlength="2"
                        class="block w-full px-4 py-2 rounded-md border-gray-300 bg-gray-100 shadow-sm" required>
                    <input type="text" placeholder="YYYY" name="dob_year" value="1995" maxlength="4"
                        class="block w-full px-4 py-2 rounded-md border-gray-300 bg-gray-100 shadow-sm" required>
                </div>
            </div>

            <!-- Gender -->
            <div class="space-y-4">
                <label class="text-sm font-medium text-gray-700">Gender</label>
                <div class="flex items-center space-x-8">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="gender" value="male"
                            class="h-5 w-5 text-yellow-600 border-gray-300 focus:ring-2 focus:ring-yellow-500" required>
                        <span class="text-sm text-gray-700">Male</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="gender" value="female"
                            class="h-5 w-5 text-yellow-600 border-gray-300 focus:ring-2 focus:ring-yellow-500" required>
                        <span class="text-sm text-gray-700">Female</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="gender" value="other"
                            class="h-5 w-5 text-yellow-600 border-gray-300 focus:ring-2 focus:ring-yellow-500" required>
                        <span class="text-sm text-gray-700">Other</span>
                    </label>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center mt-8">
                <button type="submit"
                    class="bg-yellow-600 text-white px-6 py-3 rounded-md shadow-md hover:bg-yellow-500 focus:outline-none">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
@endsection
