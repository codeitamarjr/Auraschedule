<script setup lang="ts">
import AnnouncementBanner from "@/Components/AnnouncementBanner.vue";
import { Head, Link } from "@inertiajs/vue3";
import { ref } from "vue";

defineProps<{
    canLogin?: boolean;
    canRegister?: boolean;
    totalUsers?: number;
}>();

const name = ref("");
const email = ref("");
</script>

<template>
    <Head title="Welcome to Auraschedule" />

    <AnnouncementBanner
        title="Close beta"
        subtitle="Sign up for early access"
        route="register"
        buttonText="Get started"
    />

    <div
        class="relative flex min-h-screen flex-col items-center justify-center selection:bg-indigo-500 selection:text-white dark:bg-gray-900"
    >
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <header
                class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3"
            >
                <div class="flex lg:col-start-2 lg:justify-center"></div>
                <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-end">
                    <Link
                        v-if="$page.props.auth.user"
                        :href="route('dashboard')"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Dashboard
                    </Link>
                </nav>
            </header>

            <main class="mt-6">
                <!-- Hero -->
                <div class="overflow-hidden">
                    <div
                        class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-20"
                    >
                        <div
                            class="relative mx-auto max-w-4xl grid space-y-5 sm:space-y-10"
                        >
                            <!-- Title -->
                            <div class="text-center">
                                <div
                                    class="mb-5 flex justify-center items-center"
                                >
                                    <p
                                        class="text-xs font-semibold text-gray-500 tracking-wide uppercase mb-3 dark:text-neutral-200"
                                    >
                                        Streamline Your Bookings with
                                        <span
                                            class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-500 to-teal-500 font-black"
                                        >
                                            Auraschedule
                                        </span>
                                    </p>
                                </div>
                                <h1
                                    class="text-3xl text-gray-800 font-bold sm:text-5xl lg:text-6xl lg:leading-tight dark:text-neutral-200"
                                >
                                    Seamlessly
                                    <span class="text-blue-500">
                                        create, list, and grow🚀</span
                                    >
                                </h1>
                                <p
                                    class="mt-3 text-gray-600 dark:text-neutral-400"
                                >
                                    Auraschedule is the go-to marketplace for
                                    scheduled service businesses like barbers,
                                    massage therapists, salons, and more. With
                                    intuitive booking tools and secure Stripe
                                    Connect payments, you can start getting paid
                                    through local and international payment
                                    methods in just minutes.
                                </p>
                            </div>
                            <!-- End Title -->

                            <!-- Avatar Group -->
                            <div class="hidden md:block">
                                <div
                                    class="sm:flex sm:justify-center sm:items-center text-center sm:text-start"
                                >
                                    <div
                                        class="shrink-0 pb-5 sm:flex sm:pb-0 sm:pe-5"
                                    >
                                        <!-- Avatar Group -->
                                        <div
                                            class="flex justify-center -space-x-3"
                                        >
                                            <img
                                                class="inline-block size-8 rounded-full ring-2 ring-white dark:ring-neutral-900"
                                                src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                                alt="Avatar"
                                            />
                                            <img
                                                class="inline-block size-8 rounded-full ring-2 ring-white dark:ring-neutral-900"
                                                src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                                alt="Avatar"
                                            />
                                            <img
                                                class="inline-block size-8 rounded-full ring-2 ring-white dark:ring-neutral-900"
                                                src="https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&&auto=format&fit=facearea&facepad=3&w=300&h=300&q=80"
                                                alt="Avatar"
                                            />
                                            <img
                                                class="inline-block size-8 rounded-full ring-2 ring-white dark:ring-neutral-900"
                                                src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                                alt="Avatar"
                                            />
                                            <span
                                                class="inline-flex items-center justify-center size-8 rounded-full ring-2 ring-white bg-gray-800 dark:bg-neutral-900 dark:ring-neutral-900"
                                            >
                                                <span
                                                    class="text-xs font-medium leading-none text-white uppercase"
                                                    >{{
                                                        $page.props.totalUsers
                                                    }}+</span
                                                >
                                            </span>
                                        </div>
                                        <!-- End Avatar Group -->
                                    </div>

                                    <div class="pt-5 sm:pt-0 sm:ps-5">
                                        <div
                                            class="text-lg font-semibold text-gray-800 dark:text-neutral-200"
                                        >
                                            Join over
                                            <span class="text-blue-500"
                                                >{{
                                                    $page.props.totalUsers
                                                }}+</span
                                            >
                                            users
                                        </div>
                                        <div
                                            class="text-sm text-gray-500 dark:text-neutral-500"
                                        >
                                            Auraschedule is the best way to
                                            manage your bookings and
                                            appointments.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Avatar Group -->

                            <!-- Form -->
                            <div v-if="!$page.props.auth.user">
                                <form>
                                    <div
                                        class="mx-auto max-w-2xl my-8 sm:flex sm:space-x-3 p-3 bg-white border rounded-lg shadow-lg shadow-gray-100 dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-gray-900/20"
                                    >
                                        <div class="w-full pb-2 sm:pb-0">
                                            <label
                                                for="hs-hero-name-1"
                                                class="block text-sm font-medium dark:text-white"
                                                ><span class="sr-only"
                                                    >Your name</span
                                                ></label
                                            >
                                            <input
                                                v-model="name"
                                                type="text"
                                                id="hs-hero-name-1"
                                                class="py-3 px-4 block w-full border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder="Your name"
                                            />
                                        </div>
                                        <div
                                            class="pt-2 sm:pt-0 sm:ps-3 border-t border-gray-200 sm:border-t-0 sm:border-s w-full dark:border-neutral-700"
                                        >
                                            <label
                                                for="hs-hero-email-1"
                                                class="block text-sm font-medium dark:text-white"
                                                ><span class="sr-only"
                                                    >Your email address</span
                                                ></label
                                            >
                                            <input
                                                v-model="email"
                                                type="email"
                                                id="hs-hero-email-1"
                                                class="py-3 px-4 block w-full border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder="Your email"
                                            />
                                        </div>
                                        <div
                                            class="whitespace-nowrap pt-2 sm:pt-0 grid sm:block"
                                        >
                                            <a
                                                v-if="canRegister"
                                                :href="
                                                    route('register', {
                                                        name: name,
                                                        email: email,
                                                    })
                                                "
                                                class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                            >
                                                Get started
                                            </a>
                                        </div>
                                        <div
                                            class="sm:ps-3 border-t border-gray-200 sm:border-t-0 sm:border-s whitespace-nowrap pt-2 sm:pt-0 grid sm:block"
                                        >
                                            <a
                                                v-if="canLogin"
                                                :href="route('login')"
                                                class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-purple-600 text-white hover:bg-purple-700 focus:outline-none focus:bg-purple-700 disabled:opacity-50 disabled:pointer-events-none"
                                            >
                                                Log in
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
                <!-- End Hero -->
            </main>
        </div>

        <!-- Footer -->
        <footer
            class="w-full max-w-2xl px-6 lg:max-w-7xl text-center text-sm text-gray-500 dark:text-white/70"
        >
            Crafted with ❤️ by
            <a
                href="https://itjunior.dev/"
                target="_blank"
                rel="noopener"
                class="text-blue-500 hover:underline"
                >Itamar Junior</a
            >
        </footer>
        <!-- End Footer -->
    </div>
</template>
