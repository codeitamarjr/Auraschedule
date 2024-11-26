<script setup lang="ts">
import { useForm } from "@inertiajs/vue3";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/InputError.vue";

// Define TypeScript type for props
interface Business {
    id: number;
    business_name: string;
    tax_id: string;
    contact_email: string;
    phone: string;
}

const props = defineProps<{
    business: Business;
}>();

const form = useForm({
    business_name: props.business.business_name,
    tax_id: props.business.tax_id,
    contact_email: props.business.contact_email,
    phone: props.business.phone,
});

const submitForm = () => {
    form.patch(route("business.update"));
};
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Business Information
            </h2>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Update your business's profile information and details.
            </p>
        </header>

        <form @submit.prevent="submitForm" class="mt-6 space-y-6">
            <div>
                <InputLabel for="name" value="Name" />
                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.business_name"
                    required
                    autofocus
                    autocomplete="name"
                />
                <InputError class="mt-2" :message="form.errors.business_name" />
            </div>

            <div>
                <InputLabel for="tax_id" value="Tax ID" />
                <TextInput
                    id="tax_id"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.tax_id"
                    autocomplete="tax_id"
                />
                <InputError class="mt-2" :message="form.errors.tax_id" />
            </div>

            <div>
                <InputLabel for="email" value="Email" />
                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.contact_email"
                    required
                    autocomplete="email"
                />
                <InputError class="mt-2" :message="form.errors.contact_email" />
            </div>

            <div>
                <InputLabel for="phone" value="Phone" />
                <TextInput
                    id="phone"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.phone"
                    autocomplete="phone"
                />
                <InputError class="mt-2" :message="form.errors.phone" />
            </div>

            <div class="flex items-center gap-4">
                <PrimaryButton :disabled="form.processing">Save</PrimaryButton>
                <p
                    v-if="form.recentlySuccessful"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >
                    Saved.
                </p>
            </div>
        </form>
    </section>
</template>
