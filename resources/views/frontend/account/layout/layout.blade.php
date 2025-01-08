@extends('components.main')
@section('content')
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .hover-scale {
            transition: transform 0.2s ease;
        }

        .hover-scale:hover {
            transform: scale(1.02);
        }

        .gradient-bg {
            background: linear-gradient(135deg, #ffd700 0%, #ffaa00 100%);
        }

        /* Mobile Scroll Snap */
        .scroll-snap-x {
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
        }

        .scroll-snap-center {
            scroll-snap-align: center;
        }

        /* Active State Indicator */
        .scroll-indicator {
            position: relative;
        }

        .scroll-indicator::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background-color: #f59e0b;
            opacity: 0;
            transition: opacity 0.2s ease;
        }

        .scroll-indicator.active::after {
            opacity: 1;
        }
    </style>

    <div class="bg-gray-50 min-h-screen flex flex-col md:flex-row">
        <!-- Optimized Sidebar -->
        <div
            class="bg-white w-full md:w-72 shadow-lg overflow-x-auto md:overflow-y-auto scrollbar-hide md:block border-r border-gray-100">
            <!-- Compact Profile Section -->
            <div class="flex items-center px-4 py-3 md:p-6 gap-3">
                <div class="relative flex-shrink-0">
                    <div
                        class="w-12 h-12 md:w-16 md:h-16 rounded-full gradient-bg shadow-md flex items-center justify-center">
                        <span class="material-icons text-white text-xl md:text-2xl">person</span>
                    </div>
                    <div
                        class="absolute -bottom-1 -right-1 w-4 h-4 md:w-5 md:h-5 bg-green-400 rounded-full border-2 border-white">
                    </div>
                </div>
                <p id="current-time" class="text-gray-700 text-sm flex items-center">
                    <span class="material-icons text-sm mr-1">schedule</span>
                    <!-- The current time will be inserted here -->
                </p>
            </div>

            <!-- Optimized Navigation Menu -->
            <div class="scroll-snap-x overflow-x-auto py-2 md:py-4">
                <ul class="flex md:flex-col px-4 gap-2 min-w-max md:min-w-0">
                    <li class="scroll-snap-center">
                        <a href="{{ route('account.orders') }}"
                            class="flex items-center justify-between p-2 rounded-lg hover:bg-yellow-50 active:bg-yellow-100 transition-all duration-200 gap-3 md:gap-4">
                            <div class="flex items-center gap-2 md:gap-3">
                                <span class="material-icons text-yellow-500">shopping_bag</span>
                                <span class="font-medium text-sm md:text-base whitespace-nowrap">My Orders</span>
                            </div>
                            <span class="bg-yellow-500 text-white text-xs px-2 py-0.5 rounded-full">0</span>
                        </a>
                    </li>
                    <li class="scroll-snap-center">
                        <a href="{{ route('account.addresses') }}"
                            class="flex items-center justify-between p-2 rounded-lg hover:bg-yellow-50 active:bg-yellow-100 transition-all duration-200 gap-3 md:gap-4">
                            <div class="flex items-center gap-2 md:gap-3">
                                <span class="material-icons text-yellow-500">location_on</span>
                                <span class="font-medium text-sm md:text-base whitespace-nowrap">Address</span>
                            </div>
                            <span class="bg-yellow-500 text-white text-xs px-2 py-0.5 rounded-full">0</span>
                        </a>
                    </li>
                    <li class="scroll-snap-center">
                        <a href="{{ route('account.recentview') }}"
                            class="flex items-center p-2 rounded-lg hover:bg-yellow-50 active:bg-yellow-100 transition-all duration-200 gap-2 md:gap-3">
                            <span class="material-icons text-yellow-500">search</span>
                            <span class="font-medium text-sm md:text-base whitespace-nowrap">Recent Views</span>
                        </a>
                    </li>
                    <li class="scroll-snap-center">
                        <a href="{{ route('account.profile') }}"
                            class="flex items-center p-2 rounded-lg hover:bg-yellow-50 active:bg-yellow-100 transition-all duration-200 gap-2 md:gap-3">
                            <span class="material-icons text-yellow-500">person</span>
                            <span class="font-medium text-sm md:text-base whitespace-nowrap">Profile</span>
                        </a>
                    </li>
                    <li class="scroll-snap-center md:mt-auto">
                        <a href="#"
                            class="flex items-center p-2 rounded-lg hover:bg-red-50 active:bg-red-100 transition-all duration-200 gap-2 md:gap-3">
                            <span class="material-icons text-red-500">logout</span>
                            <span class="font-medium text-sm md:text-base text-red-500 whitespace-nowrap">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-grow p-4 md:p-8 bg-gray-50">
            @yield('account-content')
        </div>

    </div>


    <script>
        function updateTime() {
            const now = new Date();

            // Format time in HH:MM:SS AM/PM
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();
            const ampm = hours >= 12 ? 'PM' : 'AM';

            hours = hours % 12;
            hours = hours ? hours : 12; // Hour 0 should be 12
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;

            const timeString = hours + ':' + minutes + ':' + seconds + ' ' + ampm;

            // Update the text content of the element
            document.getElementById('current-time').innerHTML = `
            <span class="material-icons text-sm mr-1">schedule</span>
            ${timeString}
        `;
        }

        // Update time every second
        setInterval(updateTime, 1000);

        // Set initial time
        updateTime();
    </script>
@endsection
