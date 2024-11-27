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
                                You can start with a basic plan
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
                                        Landing Page
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
                                        Free services
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
                                        Product support
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
                                All the basics for starting a new business
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
                                        Landing Page
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
                                        Paid services
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
                                        Product support
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
                                Everything you need for a growing business
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
                                        Landing Page
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
                                        Paid Events
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
                                        Product support
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

                    <!-- Comparison table -->
                    <div class="mt-20 lg:mt-32">
                        <div class="lg:text-center mb-10 lg:mb-20">
                            <h3 class="text-2xl font-semibold dark:text-white">
                                Compare plans
                            </h3>
                        </div>
                        <!-- lg+ -->
                        <div class="">
                            <table class="w-full h-px">
                                <caption class="sr-only">
                                    Pricing plan comparison
                                </caption>
                                <thead
                                    class="sticky top-0 inset-x-0 bg-white dark:bg-neutral-900"
                                >
                                    <tr>
                                        <th
                                            class="py-4 ps-6 pe-6 text-sm font-medium text-gray-800 text-start"
                                            scope="col"
                                        >
                                            <span class="sr-only"
                                                >Feature by</span
                                            >
                                            <span class="dark:text-white"
                                                >Plans</span
                                            >
                                        </th>

                                        <th
                                            class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white"
                                            scope="col"
                                        >
                                            Basic Plan
                                        </th>
                                        <th
                                            class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white"
                                            scope="col"
                                        >
                                            Startup
                                        </th>
                                        <th
                                            class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white"
                                            scope="col"
                                        >
                                            Team
                                        </th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="border-t border-gray-200 divide-y divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700"
                                >
                                    <tr>
                                        <th
                                            class="py-3 ps-6 bg-gray-50 font-bold text-gray-800 text-start dark:bg-neutral-800 dark:text-white"
                                            colspan="5"
                                            scope="colgroup"
                                        >
                                            Services Offered
                                        </th>
                                    </tr>

                                    <tr>
                                        <th
                                            class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                            scope="row"
                                        >
                                            Open/High/Low/Close
                                        </th>

                                        <td class="py-5 px-6">
                                            <!-- Check -->
                                            <svg
                                                class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
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
                                                <polyline
                                                    points="20 6 9 17 4 12"
                                                />
                                            </svg>
                                            <!-- End Solid Check -->
                                            <span class="sr-only"
                                                >Included in Free</span
                                            >
                                        </td>

                                        <td class="py-5 px-6">
                                            <!-- Check -->
                                            <svg
                                                class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
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
                                                <polyline
                                                    points="20 6 9 17 4 12"
                                                />
                                            </svg>
                                            <!-- End Solid Check -->
                                            <span class="sr-only"
                                                >Included in Startup</span
                                            >
                                        </td>

                                        <td class="py-5 px-6">
                                            <!-- Check -->
                                            <svg
                                                class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
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
                                                <polyline
                                                    points="20 6 9 17 4 12"
                                                />
                                            </svg>
                                            <!-- End Solid Check -->
                                            <span class="sr-only"
                                                >Included in Team</span
                                            >
                                        </td>
                                    </tr>

                                    <tr>
                                        <th
                                            class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                            scope="row"
                                        >
                                            Price-volume difference indicator
                                        </th>

                                        <td class="py-5 px-6">
                                            <!-- Minus -->
                                            <svg
                                                class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600"
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
                                                <path d="M5 12h14" />
                                            </svg>
                                            <!-- Minus -->
                                            <span class="sr-only"
                                                >Not included in Free</span
                                            >
                                        </td>

                                        <td class="py-5 px-6">
                                            <!-- Check -->
                                            <svg
                                                class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
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
                                                <polyline
                                                    points="20 6 9 17 4 12"
                                                />
                                            </svg>
                                            <!-- End Solid Check -->
                                            <span class="sr-only"
                                                >Included in Startup</span
                                            >
                                        </td>

                                        <td class="py-5 px-6">
                                            <!-- Check -->
                                            <svg
                                                class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
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
                                                <polyline
                                                    points="20 6 9 17 4 12"
                                                />
                                            </svg>
                                            <!-- End Solid Check -->
                                            <span class="sr-only"
                                                >Included in Team</span
                                            >
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End lg+ -->
                    </div>
                    <!-- End Comparison table -->
                </div>
                <!-- End Pricing -->
            </div>
        </div>
    </AuthenticatedLayout>
</template>
