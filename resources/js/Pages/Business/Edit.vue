<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import UpdateBusinessInformationForm from "./Partials/UpdateBusinessInformationForm.vue";
import DeleteBusinessForm from "./Partials/DeleteBusinessForm.vue";
import { Head } from "@inertiajs/vue3";

interface Business {
    id: number;
    business_name: string;
    tax_id?: string;
    contact_email: string;
    phone: string;
}

defineProps<{ business: Business }>();
</script>

<template>
    <Head title="My Business" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                My Business
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
                <div
                    class="bg-white p-4 shadow sm:rounded-lg sm:p-8 dark:bg-gray-800"
                >
                    <UpdateBusinessInformationForm
                        :business="business"
                        class="max-w-xl"
                    />
                </div>

                <div
                    class="bg-white p-4 shadow sm:rounded-lg sm:p-8 dark:bg-gray-800"
                >
                    <DeleteBusinessForm class="max-w-xl" />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
