<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

interface Props {
    isBusinessAccount: boolean;
    isSubscribed: boolean;
}

const props = defineProps<Props>();
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                v-if="props.isBusinessAccount"
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Welcome to Your Business Dashboard
            </h2>
            <div
                v-else
                class="flex justify-between items-center text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                <span>Dashboard</span>
                <div class="relative inline-flex group">
                    <div
                        class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-lg blur-sm group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt"
                    ></div>
                    <a
                        href="/upgrade-to-business"
                        title="Upgrade to a Business Account"
                        class="relative inline-flex items-center justify-center px-8 py-2 text-md font-bold text-white transition-all duration-200 dark:bg-gray-900 bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                    >
                        Upgrade to a Business Account
                    </a>
                </div>
            </div>
        </template>

        <div class="py-12" v-if="isSubscribed">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        You have a valid subscription.
                        <span
                            v-if="!isBusinessAccount"
                            class="block mt-2 text-sm text-gray-500 dark:text-gray-400"
                        >
                            To use the Business Dashboard, please upgrade to a Business Account.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
