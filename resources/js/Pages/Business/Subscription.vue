<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { defineProps } from "vue";

defineProps({
    plan1: String,
    plan2: String,
    plan3: String,
});
</script>

<template>
    <Head title="Upgrade to Business Account" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Upgrade to Business Account
            </h2>
        </template>

        <div class="py-12">
            <div
                class="max-w-6xl mx-auto bg-white shadow-md rounded-md p-6 dark:bg-gray-800 dark:text-gray-300"
            >
                <!-- Pricing -->
                <div
                    class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto"
                >
                    <!-- Title -->
                    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                        <h2
                            class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white"
                        >
                            Pricing
                        </h2>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">
                            Whatever your status, our offers evolve according to
                            your needs.
                        </p>
                    </div>
                    <!-- End Title -->

                    <!-- Grid -->
                    <div
                        class="mt-12 grid sm:grid-cols-1 lg:grid-cols-3 gap-6 lg:items-center"
                    >
                        <!-- Card -->
                        <div
                            class="flex flex-col border border-gray-200 text-center rounded-xl p-8 dark:border-neutral-800"
                        >
                            <h4
                                class="font-medium text-lg text-gray-800 dark:text-neutral-200"
                            >
                                Basic Plan
                            </h4>
                            <span
                                class="mt-7 font-bold text-5xl text-gray-800 dark:text-neutral-200"
                                >Basic Plan</span
                            >
                            <p
                                class="mt-2 text-sm text-gray-500 dark:text-neutral-500"
                            >
                                You can test and start with a basic plan.
                            </p>

                            <ul class="mt-7 space-y-2.5 text-sm">
                                <li class="flex gap-x-2">
                                    <svg
                                        class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span
                                        class="text-gray-800 dark:text-neutral-400"
                                    >
                                        Custom Landing Page
                                    </span>
                                </li>

                                <li class="flex gap-x-2">
                                    <svg
                                        class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span
                                        class="text-gray-800 dark:text-neutral-400"
                                    >
                                        List Free Services
                                    </span>
                                </li>

                                <li class="flex gap-x-2">
                                    <svg
                                        class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span
                                        class="text-gray-800 dark:text-neutral-400"
                                    >
                                        On-line Support
                                    </span>
                                </li>
                            </ul>
                            <div
                                id="app"
                                data-checkout-url="{{ route('checkout', ['plan' => 'price_1QPqprRsKfqiLeFXJqiZFtrd']) }}"
                            ></div>

                            <a
                                class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                :href="plan1"
                            >
                                Sign up
                            </a>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div
                            class="flex flex-col border-2 border-blue-600 text-center shadow-xl rounded-xl p-8 dark:border-blue-700"
                        >
                            <p class="mb-3">
                                <span
                                    class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-lg text-xs uppercase font-semibold bg-blue-100 text-blue-800 dark:bg-blue-600 dark:text-white"
                                    >Most popular</span
                                >
                            </p>
                            <h4
                                class="font-medium text-lg text-gray-800 dark:text-neutral-200"
                            >
                                Pro Plan
                            </h4>
                            <span
                                class="mt-5 font-bold text-5xl text-gray-800 dark:text-neutral-200"
                            >
                                <span class="font-bold text-2xl -me-2">€</span>
                                9.99
                            </span>
                            <p
                                class="mt-2 text-sm text-gray-500 dark:text-neutral-500"
                            >
                                Elevate your business and charge for your
                                services, accepting card payments.
                            </p>

                            <ul class="mt-7 space-y-2.5 text-sm">
                                <li class="flex gap-x-2">
                                    <svg
                                        class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span
                                        class="text-gray-800 dark:text-neutral-400"
                                    >
                                        All the Basic Plan's features
                                    </span>
                                </li>

                                <li class="flex gap-x-2">
                                    <svg
                                        class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span
                                        class="text-gray-800 dark:text-neutral-400"
                                    >
                                        List Paid Services
                                    </span>
                                </li>

                                <li class="flex gap-x-2">
                                    <svg
                                        class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span
                                        class="text-gray-800 dark:text-neutral-400"
                                    >
                                        Accept Card Payments
                                    </span>
                                </li>
                            </ul>

                            <a
                                class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                :href="plan2"
                                v-if="isSubscribed"
                            >
                                Sign up
                            </a>
                            <div
                                class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gray-600 text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 disabled:opacity-50 disabled:pointer-events-none"
                                v-if="!isSubscribed"
                            >
                                Subscribed
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div
                            class="flex flex-col border border-gray-200 text-center rounded-xl p-8 dark:border-neutral-800"
                        >
                            <h4
                                class="font-medium text-lg text-gray-800 dark:text-neutral-200"
                            >
                                Premium Plan
                            </h4>
                            <span
                                class="mt-5 font-bold text-5xl text-gray-800 dark:text-neutral-200"
                            >
                                <span class="font-bold text-2xl -me-2">€</span>
                                19.99
                            </span>
                            <p
                                class="mt-2 text-sm text-gray-500 dark:text-neutral-500"
                            >
                                The ultimate plan for your business.
                            </p>

                            <ul class="mt-7 space-y-2.5 text-sm">
                                <li class="flex gap-x-2">
                                    <svg
                                        class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span
                                        class="text-gray-800 dark:text-neutral-400"
                                    >
                                        All the Pro Plan's features
                                    </span>
                                </li>

                                <li class="flex gap-x-2">
                                    <svg
                                        class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span
                                        class="text-gray-800 dark:text-neutral-400"
                                    >
                                        Real-time Notifications
                                    </span>
                                </li>

                                <li class="flex gap-x-2">
                                    <svg
                                        class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span
                                        class="text-gray-800 dark:text-neutral-400"
                                    >
                                        Account Integration
                                    </span>
                                </li>
                            </ul>

                            <a
                                class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                :href="plan3"
                            >
                                Sign up
                            </a>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Grid -->
                </div>
                <!-- End Pricing -->
            </div>
        </div>
    </AuthenticatedLayout>
</template>
