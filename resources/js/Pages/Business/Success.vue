<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Upgrade to Business Account" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Upgrade to Business Account Success
            </h2>
        </template>

        <div class="py-12">
            <div
                class="max-w-6xl mx-auto bg-white shadow-md rounded-md p-6 dark:bg-gray-800 dark:text-gray-300"
            >

            Congratulations! Your account has been successfully upgraded to Business Account.
           
            </div>
        </div>
    </AuthenticatedLayout>
</template>
