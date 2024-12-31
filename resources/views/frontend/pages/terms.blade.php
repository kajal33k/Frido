@extends('components.main')

@section('content')
<div class="min-h-screen flex flex-col">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-yellow-300 to-yellow-400 pt-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-start mb-10">
            <h1 class="text-5xl sm:text-6xl md:text-7xl font-semibold text-black">Terms and Conditions</h1>
            <p class="mt-4 text-xl text-black">
                Please read these Terms and Conditions carefully before using our website.
            </p>
        </div>
    </div>

    <!-- Terms Content Section -->
    <div class="bg-white py-16 sm:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose max-w-none text-gray-800">
                
                <section>
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">Introduction</h2>
                    <p>
                        These terms and conditions outline the rules and regulations for the use of our website. By accessing this website, you accept these terms and conditions in full. Do not continue to use the website if you do not agree to all the terms and conditions stated on this page.
                    </p>
                </section>

                <section class="mt-12">
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">License</h2>
                    <p>
                        Unless otherwise stated, we or our licensors own the intellectual property rights for all material on this website. All intellectual property rights are reserved. You may view and/or print pages for your personal use subject to restrictions set in these terms and conditions.
                    </p>
                </section>

                <section class="mt-12">
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">Prohibited Uses</h2>
                    <ul class="list-disc ml-8 mt-4 text-gray-700">
                        <li>Reproducing, duplicating, or copying content from the website without permission.</li>
                        <li>Using the website in any way that causes harm or violates laws and regulations.</li>
                        <li>Engaging in unauthorized data mining, data extraction, or data harvesting activities.</li>
                    </ul>
                </section>

                <section class="mt-12">
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">Limitation of Liability</h2>
                    <p>
                        We shall not be held responsible for any damages arising from the use or inability to use the website. This limitation of liability applies to all damages of any kind, including without limitation, damages for loss of data or profit, or due to business interruption.
                    </p>
                </section>

                <section class="mt-12">
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">Governing Law</h2>
                    <p>
                        These terms are governed by and construed in accordance with the laws of the jurisdiction in which we operate. By using this website, you consent to the exclusive jurisdiction and venue of courts in that jurisdiction for the resolution of any disputes.
                    </p>
                </section>

                <section class="mt-12">
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">Contact Us</h2>
                    <p>
                        If you have any questions or concerns regarding these terms, please feel free to contact us at:
                    </p>
                    <p>
                        <strong>Email:</strong> <a href="mailto:help@myfrido.com" class="text-indigo-600 hover:underline">help@myfrido.com</a>
                    </p>
                    <p>
                        <strong>Phone:</strong> <a href="tel:+917498476544" class="text-indigo-600 hover:underline">+91 74984 76544</a>
                    </p>
                </section>

            </div>
        </div>
    </div>
</div>
@endsection
