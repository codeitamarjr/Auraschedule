<script setup lang="ts">
defineProps<{
    title: string;
    subtitle: string;
    route?: string; // Route name for internal links
    buttonText?: string;
}>();
</script>

<template>
    <!-- Announcement Banner -->
    <div class="bg-gradient-to-r from-red-500 via-purple-400 to-blue-500">
        <div class="max-w-[65rem] px-4 py-1 sm:px-6 lg:px-8 mx-auto">
            <!-- Grid -->
            <div
                class="grid justify-center md:grid-cols-2 md:justify-between md:items-center gap-2"
            >
                <div class="text-center md:text-start">
                    <p class="text-xs text-white/80 uppercase tracking-wider">
                        {{ title }}
                    </p>
                    <p class="text-white font-medium">
                        {{ subtitle }}
                    </p>
                </div>
                <!-- End Col -->

                <div
                    v-if="route"
                    class="mt-0 text-center md:text-start md:flex md:justify-end md:items-center"
                >
                    <a
                        class="py-1 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                        :href="route"
                    >
                        {{ buttonText }}
                    </a>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
    </div>
    <!-- End Announcement Banner -->
</template>
