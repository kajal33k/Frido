@extends('components.main')

@section('content')
<div class="min-h-screen flex flex-col">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-yellow-300 to-yellow-400 pt-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-start mb-10">
            <h1 class="text-5xl sm:text-6xl md:text-7xl font-semibold text-black">Return, Refund & Cancellation Policy</h1>
            <p class="mt-4 text-xl text-black">
                Please read our policies carefully before making a purchase. We want to ensure that you have the best shopping experience.
            </p>
        </div>
    </div>

    <!-- Return, Refund & Cancellation Content Section -->
    <div class="bg-white py-16 sm:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose max-w-none text-gray-800">
                
                <section>
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">Return Policy</h2>
                    <p>
                        We want you to be completely satisfied with your purchase. If for any reason you're not happy with your purchase, you can return it within 30 days of receiving your order for a full refund or exchange.
                    </p>
                    <p>
                        To qualify for a return, the product must be unused, in the original packaging, and in a resalable condition. Please make sure that the product is packed securely for the return shipment.
                    </p>
                    <p>
                        To initiate a return, please contact our customer service team at <a href="mailto:help@myfrido.com" class="text-indigo-600 hover:underline">help@myfrido.com</a> with your order number and reason for return.
                    </p>
                </section>

                <section class="mt-12">
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">Refund Policy</h2>
                    <p>
                        Once we receive your returned item, we will process your refund within 7 business days. The refund will be issued to your original payment method.
                    </p>
                    <ul class="list-disc ml-8 mt-4 text-gray-700">
                        <li>Refunds will not include shipping charges unless the return is due to our error (e.g., defective product or incorrect item).</li>
                        <li>Shipping charges for returns will be the responsibility of the customer unless the item is defective or the wrong item was sent.</li>
                    </ul>
                    <p class="mt-4">
                        If you wish to track your refund, please contact our support team. Please note that it may take a few additional days for your bank or credit card provider to process and post the refund.
                    </p>
                </section>

                <section class="mt-12">
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">Cancellation Policy</h2>
                    <p>
                        Orders can be canceled within 24 hours of placing the order. After that, we cannot guarantee the cancellation of the order, as it may have already been processed or shipped.
                    </p>
                    <p>
                        To cancel an order, please contact us immediately at <a href="mailto:help@myfrido.com" class="text-indigo-600 hover:underline">help@myfrido.com</a> with your order number. We will notify you once the cancellation has been processed.
                    </p>
                    <p>
                        If the order has already been shipped, we will not be able to cancel it, but you may return the product following our return policy.
                    </p>
                </section>

                <section class="mt-12">
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">Exceptions</h2>
                    <p>
                        Certain products are not eligible for return, refund, or cancellation. These include:
                    </p>
                    <ul class="list-disc ml-8 mt-4 text-gray-700">
                        <li>Personalized or customized items.</li>
                        <li>Perishable goods such as food or plants.</li>
                        <li>Items that have been used or damaged after delivery.</li>
                    </ul>
                    <p class="mt-4">
                        If you are unsure whether your item is eligible for return or refund, please contact our customer service team for more information.
                    </p>
                </section>

                <section class="mt-12">
                    <h2 class="text-3xl font-semibold text-gray-900 mb-4">Contact Us</h2>
                    <p>
                        If you have any questions regarding our Return, Refund, or Cancellation Policy, please feel free to contact us:
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
