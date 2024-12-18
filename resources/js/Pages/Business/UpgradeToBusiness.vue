<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";

const form = useForm({
    business_name: "",
    business_subdomain: "",
    tax_id: "",
    contact_email: "",
    phone: "",
});

const submit = () => {
    form.post(route("business.store"), {
    });
};
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
                class="max-w-4xl mx-auto bg-white shadow-md rounded-md p-6 dark:bg-gray-800 dark:text-gray-300"
            >
                <h1 class="text-2xl font-bold mb-6">
                    Upgrade to Business Account
                </h1>
                <form @submit.prevent="submit">
                    <div class="mb-4">
                        <label
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300"
                        >
                            Business Name
                        </label>
                        <input
                            type="text"
                            v-model="form.business_name"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300"
                        >
                            Business Subdomain
                        </label>
                        <input
                            type="text"
                            v-model="form.business_subdomain"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300"
                        >
                            Tax ID
                        </label>
                        <input
                            type="text"
                            v-model="form.tax_id"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300"
                        />
                    </div>
                    <div class="mb-4">
                        <label
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300"
                        >
                            Contact Email
                        </label>
                        <input
                            type="email"
                            v-model="form.contact_email"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300"
                        >
                            Phone Number
                        </label>
                        <input
                            type="tel"
                            v-model="form.phone"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300"
                            required
                        />
                    </div>
                    <button
                        type="submit"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md shadow-sm hover:bg-blue-700"
                    >
                        Upgrade Now
                    </button>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
