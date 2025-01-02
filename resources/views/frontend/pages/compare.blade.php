@extends('components.main')
@section('content')
<div class="bg-black flex justify-center py-32">
    <h1 class="text-3xl font-bold text-center mb-12 text-white">KNOW YOUR INSOLES</h1>
</div>
    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-8">
 <!-- Comparison Table -->
        <div class="w-full overflow-x-auto">
            <div class="min-w-max">
                <!-- Left Column Headers -->
                <div class="flex sticky z-10 space-x-2">
                    <div class="w-48">
                        <div class="bg-yellow-100 rounded-lg p-4 mb-2 h-24 flex items-center">
                            <span class="font-medium">Frido Insoles</span>
                        </div>
                        <div class="bg-yellow-100 rounded-lg p-4 mb-2">
                            <span class="font-medium">Types of Insole</span>
                        </div>
                        <div class="bg-yellow-100 rounded-lg p-4 mb-2">
                            <span class="font-medium">Suitable For</span>
                        </div>
                        <div class="bg-yellow-100 rounded-lg p-4 mb-2">
                            <span class="font-medium">Benefit</span>
                        </div>
                        <div class="bg-yellow-100 rounded-lg p-4 mb-2">
                            <span class="font-medium">Problem Solved</span>
                        </div>
                        <div class="bg-yellow-100 rounded-lg p-4 mb-2">
                            <span class="font-medium">Footwear</span>
                        </div>
                        <div class="bg-yellow-100 rounded-lg p-4">
                            <span class="font-medium">Ideal for (Activity Impact)</span>
                        </div>
                    </div>

                    <!-- Product Columns -->
                    <div class="flex gap-4">
                        <!-- Product 1 -->
                        <div class="w-full">
                            <div class="flex flex-1 gap-4">
                                <div class="bg-gray-100 rounded-lg p-4 mb-2 h-24">
                                    <div class=" flex justify-between">
                                        <div>
                                            <h3 class="font-medium ">Frido MaxComfort Memory Hi-Per Foam Insole</h3>
                                            <button
                                                class="bg-yellow-400 text-black px-4 py-1 rounded-full text-sm mt-2">SHOP
                                                NOW</button>
                                        </div>
                                        <img src="{{asset('assets/image/category1.jpeg')}}" alt="Insole" class="w-16 h-16" />
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2 h-24">
                                    <div class="flex justify-between">
                                        <div>
                                            <h3 class="font-medium">Frido MaxComfort Memory Hi-Per Foam Insole</h3>
                                            <button
                                                class="bg-yellow-400 text-black px-4 py-1 rounded-full text-sm mt-2">SHOP
                                                NOW</button>
                                        </div>
                                        <img src="{{asset('assets/image/category1.jpeg')}}" alt="Insole" class="w-16 h-16" />
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2 h-24">
                                    <div class="flex justify-between">
                                        <div>
                                            <h3 class="font-medium">Frido MaxComfort Memory Hi-Per Foam Insole</h3>
                                            <button
                                                class="bg-yellow-400 text-black px-4 py-1 rounded-full text-sm mt-2">SHOP
                                                NOW</button>
                                        </div>
                                        <img src="{{asset('assets/image/category1.jpeg')}}" alt="Insole" class="w-16 h-16" />
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2 h-24">
                                    <div class="flex justify-between">
                                        <div>
                                            <h3 class="font-medium">Frido MaxComfort Memory Hi-Per Foam Insole</h3>
                                            <button
                                                class="bg-yellow-400 text-black px-4 py-1 rounded-full text-sm mt-2">SHOP
                                                NOW</button>
                                        </div>
                                        <img src="{{asset('assets/image/category1.jpeg')}}" alt="Insole" class="w-16 h-16" />
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2 h-24">
                                    <div class="flex justify-between">
                                        <div>
                                            <h3 class="font-medium">Frido MaxComfort Memory Hi-Per Foam Insole</h3>
                                            <button
                                                class="bg-yellow-400 text-black px-4 py-1 rounded-full text-sm mt-2">SHOP
                                                NOW</button>
                                        </div>
                                        <img src="{{asset('assets/image/category1.jpeg')}}" alt="Insole" class="w-16 h-16" />
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2 h-24">
                                    <div class="flex justify-between">
                                        <div>
                                            <h3 class="font-medium">Frido MaxComfort Memory Hi-Per Foam Insole</h3>
                                            <button
                                                class="bg-yellow-400 text-black px-4 py-1 rounded-full text-sm mt-2">SHOP
                                                NOW</button>
                                        </div>
                                        <img src="{{asset('assets/image/category1.jpeg')}}" alt="Insole" class="w-16 h-16" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-1 gap-4">

                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfort insole</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfort insole</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfort insole</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfort insole</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfort insole</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfort insole</div>

                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfort insole</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfort insole</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfort insole</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfort insole</div>
                            </div>
                            <div class="flex flex-1 gap-4">
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">For standing, walking & office</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">For standing, walking & office</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">For standing, walking & office</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">For standing, walking & office</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">For standing, walking & office</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">For standing, walking & office</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">For standing, walking & office</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">For standing, walking & office</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">For standing, walking & office</div>

                            </div>
                            <div class="flex flex-1 gap-4">
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfortable slim insoles that can be worn in formal shoes
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfortable slim insoles that can be worn in formal shoes
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfortable slim insoles that can be worn in formal shoes
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfortable slim insoles that can be worn in formal shoes
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfortable slim insoles that can be worn in formal shoes
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfortable slim insoles that can be worn in formal shoes
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfortable slim insoles that can be worn in formal shoes
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfortable slim insoles that can be worn in formal shoes
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Comfortable slim insoles that can be worn in formal shoes
                                </div>
                            </div>
                            <div class="flex flex-1 gap-4">
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Provides personalized comfort & pressure relief</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Provides personalized comfort & pressure relief</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Provides personalized comfort & pressure relief</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Provides personalized comfort & pressure relief</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Provides personalized comfort & pressure relief</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Provides personalized comfort & pressure relief</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Provides personalized comfort & pressure relief</div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Provides personalized comfort & pressure relief</div>

                                <div class="bg-gray-100 rounded-lg p-4 mb-2">Provides personalized comfort & pressure relief</div>

                            </div>
                            <div class="flex flex-1 gap-4">
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">
                                    <div class="flex flex-col gap-1">
                                        <span>Formal</span>
                                        <span>Casual</span>
                                        <span>Sneakers</span>
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">
                                    <div class="flex flex-col gap-1">
                                        <span>Formal</span>
                                        <span>Casual</span>
                                        <span>Sneakers</span>
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">
                                    <div class="flex flex-col gap-1">
                                        <span>Formal</span>
                                        <span>Casual</span>
                                        <span>Sneakers</span>
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">
                                    <div class="flex flex-col gap-1">
                                        <span>Formal</span>
                                        <span>Casual</span>
                                        <span>Sneakers</span>
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">
                                    <div class="flex flex-col gap-1">
                                        <span>Formal</span>
                                        <span>Casual</span>
                                        <span>Sneakers</span>
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">
                                    <div class="flex flex-col gap-1">
                                        <span>Formal</span>
                                        <span>Casual</span>
                                        <span>Sneakers</span>
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">
                                    <div class="flex flex-col gap-1">
                                        <span>Formal</span>
                                        <span>Casual</span>
                                        <span>Sneakers</span>
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">
                                    <div class="flex flex-col gap-1">
                                        <span>Formal</span>
                                        <span>Casual</span>
                                        <span>Sneakers</span>
                                    </div>
                                </div>

                                <div class="bg-gray-100 rounded-lg p-4 mb-2">
                                    <div class="flex flex-col gap-1">
                                        <span>Formal</span>
                                        <span>Casual</span>
                                        <span>Sneakers</span>
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">
                                    <div class="flex flex-col gap-1">
                                        <span>Formal</span>
                                        <span>Casual</span>
                                        <span>Sneakers</span>
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">
                                    <div class="flex flex-col gap-1">
                                        <span>Formal</span>
                                        <span>Casual</span>
                                        <span>Sneakers</span>
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4 mb-2">
                                    <div class="flex flex-col gap-1">
                                        <span>Formal</span>
                                        <span>Casual</span>
                                        <span>Sneakers</span>
                                    </div>
                                </div>

                            </div>
                            <div class="flex flex-1 gap-4">
                                <div class="bg-gray-100 rounded-lg p-4">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                            <span>Low</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                            <span>Medium</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-gray-400"></div>
                                            <span>High</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                            <span>Low</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                            <span>Medium</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-gray-400"></div>
                                            <span>High</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                            <span>Low</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                            <span>Medium</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-gray-400"></div>
                                            <span>High</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                            <span>Low</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                            <span>Medium</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-gray-400"></div>
                                            <span>High</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                            <span>Low</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                            <span>Medium</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-gray-400"></div>
                                            <span>High</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                            <span>Low</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                            <span>Medium</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-gray-400"></div>
                                            <span>High</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-4">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                            <span>Low</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                            <span>Medium</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-gray-400"></div>
                                            <span>High</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="bg-gray-100 rounded-lg p-4">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                            <span>Low</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                            <span>Medium</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-gray-400"></div>
                                            <span>High</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Additional product columns can be added with the same structure -->
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
