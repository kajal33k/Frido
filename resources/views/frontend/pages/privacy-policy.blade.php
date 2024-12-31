@extends('components.main')

@section('content')
<div class="min-h-screen flex flex-col">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-yellow-300 to-yellow-400 pt-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-start mb-10">
            <h1 class="text-5xl sm:text-6xl md:text-7xl font-semibold text-black">Privacy Policy</h1>
            <p class="mt-4 text-xl text-black">
                Your privacy is important to us. This page outlines how we collect, use, and safeguard your information.
            </p>
        </div>
    </div>

    <!-- Privacy Policy Content Section -->
    <div class="bg-white py-16 sm:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose max-w-none text-gray-800">
                
                <!-- Information We Collect -->
                <section>
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">Information We Collect</h2>
                    <p>
                        We collect information that you provide directly to us, such as when you create an account, make a purchase, or contact our support team. The types of data we collect include your name, email address, phone number, and payment details.
                    </p>
                </section>

                <!-- How We Use Your Information -->
                <section class="mt-12">
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">How We Use Your Information</h2>
                    <p>
                        The information we collect is used to provide and improve our services, process transactions, and communicate with you regarding your account or our services.
                    </p>
                    <ul class="list-disc ml-8 mt-4 text-gray-700">
                        <li>To personalize your experience on our platform.</li>
                        <li>To process orders and handle transactions securely.</li>
                        <li>To send updates, promotional offers, or important notifications.</li>
                    </ul>
                </section>

                <!-- Sharing Your Information -->
                <section class="mt-12">
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">Sharing Your Information</h2>
                    <p>
                        We do not share your personal information with third parties except in the following cases:
                    </p>
                    <ul class="list-disc ml-8 mt-4 text-gray-700">
                        <li>With service providers who assist us in operating our business (e.g., payment processors).</li>
                        <li>To comply with legal obligations or protect our rights.</li>
                        <li>With your consent, in specific scenarios.</li>
                    </ul>
                </section>

                <!-- Data Security -->
                <section class="mt-12">
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">Data Security</h2>
                    <p>
                        We implement robust security measures to protect your personal information from unauthorized access, disclosure, or misuse. However, no system is completely secure, and we cannot guarantee absolute security.
                    </p>
                </section>

                <!-- Your Rights -->
                <section class="mt-12">
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">Your Rights</h2>
                    <p>
                        You have the right to access, update, or delete your personal information. If you would like to exercise these rights, please contact us using the details below.
                    </p>
                </section>

                <!-- Changes to This Privacy Policy -->
                <section class="mt-12">
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">Changes to This Privacy Policy</h2>
                    <p>
                        We may update this privacy policy periodically to reflect changes in our practices or for other operational, legal, or regulatory reasons. We encourage you to review this policy regularly.
                    </p>
                </section>

                <!-- Contact Us -->
                <section class="mt-12">
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">Contact Us</h2>
                    <p>
                        If you have any questions or concerns regarding our privacy practices, please reach out to us at:
                    </p>
                    <p>
                        <strong>Email:</strong> <a href="mailto:help@myfrido.com" class="text-indigo-600 hover:underline">help@myfrido.com</a>.
                    </p>
                </section>

            </div>
        </div>
    </div>
</div>
@endsection
