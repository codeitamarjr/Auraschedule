<template>
    <div>
        <!-- Tenant Header -->
        <TenantHeader
            :placeName="tenant.name"
            :ownerName="ownerName"
            customMessage="Your satisfaction is our priority!"
            logoUrl="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
        />

        <!-- Service List -->
        <h1 class="text-xl font-bold my-4">Available Services</h1>
        <ul
            role="list"
            class="divide-y divide-gray-100 overflow-hidden bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl"
        >
            <li
                v-for="service in services"
                :key="service.id"
                class="relative flex justify-between gap-x-6 px-4 py-5 hover:bg-gray-50 sm:px-6"
            >
                <div class="flex min-w-0 gap-x-4">
                    <img
                        class="size-12 flex-none rounded-full bg-gray-50"
                        :src="service.image_url || defaultImage"
                        alt="Service Image"
                    />
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm/6 font-semibold text-gray-900">
                            {{ service.name }}
                        </p>
                        <p class="mt-1 flex text-xs/5 text-gray-500">
                            {{ service.description }}
                        </p>
                    </div>
                </div>
                <div class="flex shrink-0 items-center gap-x-4">
                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm/6 text-gray-900">
                            €{{ service.price }}
                        </p>
                        <p class="mt-1 text-xs/5 text-gray-500">
                            Duration: {{ service.duration }} mins
                        </p>
                    </div>
                    <svg
                        class="size-5 flex-none text-gray-400"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd"
                        />
                    </svg>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
import TenantHeader from "@/Components/TenantHeader.vue";

export default {
    components: {
        TenantHeader,
    },
    props: {
        tenant: {
            type: Object,
            required: true,
        },
        services: {
            type: Array,
            required: true,
        },
        ownerName: {
            type: String,
            required: true,
        },
    },
    data() {
        return {
            defaultImage: "https://via.placeholder.com/150?text=No+Image", // Fallback image
        };
    },
};
</script>
