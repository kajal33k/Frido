@extends('frontend.account.layout.layout')

@section('account-content')
    <!-- Main Content -->
    <div class="flex-grow p-4 md:p-6 bg-gray-50">
        <div class="max-w-xl mx-auto">
            <h1 class="text-xl md:text-3xl font-semibold text-center text-gray-800 mb-2 md:mb-4">Account Settings</h1>
            <p class="text-gray-500 text-center mb-4 md:mb-6">Manage your account settings here</p>

            <!-- Profile Settings Section -->
            <div class="bg-white shadow-lg rounded-lg p-4 md:p-6 mb-6">
                <h2 class="text-lg font-semibold text-gray-800 mb-3">Profile Information</h2>
                <form>
                    <div class="mb-4">
                        <label for="full_name" class="block text-gray-600 text-sm md:text-base mb-2">Full Name</label>
                        <input type="text" id="full_name" name="full_name" class="w-full p-3 bg-gray-100 rounded-md text-sm md:text-base border border-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Enter your full name">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-600 text-sm md:text-base mb-2">Email Address</label>
                        <input type="email" id="email" name="email" class="w-full p-3 bg-gray-100 rounded-md text-sm md:text-base border border-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Enter your email address">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-600 text-sm md:text-base mb-2">Password</label>
                        <input type="password" id="password" name="password" class="w-full p-3 bg-gray-100 rounded-md text-sm md:text-base border border-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Enter a new password">
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="w-full bg-yellow-500 text-white px-5 py-2 rounded-lg font-medium hover:bg-yellow-600 transition-all duration-200 text-sm">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>

            <!-- Notification Settings Section -->
            <div class="bg-white shadow-lg rounded-lg p-4 md:p-6 mb-6">
                <h2 class="text-lg font-semibold text-gray-800 mb-3">Notification Settings</h2>
                <form>
                    <div class="flex items-center justify-between mb-4">
                        <label for="email_notifications" class="text-gray-600 text-sm md:text-base">Email Notifications</label>
                        <input type="checkbox" id="email_notifications" name="email_notifications" class="text-yellow-500 focus:ring-yellow-500">
                    </div>
                    <div class="flex items-center justify-between mb-4">
                        <label for="sms_notifications" class="text-gray-600 text-sm md:text-base">SMS Notifications</label>
                        <input type="checkbox" id="sms_notifications" name="sms_notifications" class="text-yellow-500 focus:ring-yellow-500">
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="w-full bg-yellow-500 text-white px-5 py-2 rounded-lg font-medium hover:bg-yellow-600 transition-all duration-200 text-sm">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>

            <!-- Privacy Settings Section -->
            <div class="bg-white shadow-lg rounded-lg p-4 md:p-6 mb-6">
                <h2 class="text-lg font-semibold text-gray-800 mb-3">Privacy Settings</h2>
                <form>
                    <div class="mb-4">
                        <label for="profile_visibility" class="block text-gray-600 text-sm md:text-base mb-2">Profile Visibility</label>
                        <select id="profile_visibility" name="profile_visibility" class="w-full p-3 bg-gray-100 rounded-md text-sm md:text-base border border-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                            <option value="public">Public</option>
                            <option value="private">Private</option>
                            <option value="friends">Friends</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="w-full bg-yellow-500 text-white px-5 py-2 rounded-lg font-medium hover:bg-yellow-600 transition-all duration-200 text-sm">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>

            <!-- Account Deactivation Section -->
            <div class="bg-white shadow-lg rounded-lg p-4 md:p-6">
                <h2 class="text-lg font-semibold text-gray-800 mb-3">Account Deactivation</h2>
                <p class="text-gray-600 text-sm md:text-base mb-4">If you wish to deactivate your account, you can do so below. Be aware that this action is permanent.</p>
                <div class="flex items-center justify-between mb-4">
                    <label for="deactivate_account" class="text-gray-600 text-sm md:text-base">Deactivate Account</label>
                    <input type="checkbox" id="deactivate_account" name="deactivate_account" class="text-yellow-500 focus:ring-yellow-500">
                </div>
                <div class="mt-4">
                    <button type="submit" class="w-full bg-yellow-500 text-white px-5 py-2 rounded-lg font-medium hover:bg-yellow-600 transition-all duration-200 text-sm">
                        Deactivate Account
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
