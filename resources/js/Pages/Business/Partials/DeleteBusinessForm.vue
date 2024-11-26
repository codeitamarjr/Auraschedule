<script setup lang="ts">
import DangerButton from "@/Components/DangerButton.vue";
import InputError from "@/Components/InputError.vue";
import Modal from "@/Components/Modal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";

const confirmingBusinessDeletion = ref(false);

const form = useForm({});

const confirmBusinessDeletion = () => {
    confirmingBusinessDeletion.value = true;
};

const deleteBusiness = () => {
    form.delete(route("business.destroy"), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
        onError: () => {},
        onFinish: () => {
            form.reset();
        },
    });
};

const closeModal = () => {
    confirmingBusinessDeletion.value = false;
    form.clearErrors();
    form.reset();
};
</script>

<template>
    <section class="space-y-6">
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Delete Business
            </h2>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Once your business is deleted, all of its resources and data
                will be permanently deleted. Please ensure you have saved any
                necessary information before proceeding.
            </p>
        </header>

        <DangerButton @click="confirmBusinessDeletion">
            Delete Business
        </DangerButton>

        <Modal :show="confirmingBusinessDeletion" @close="closeModal">
            <div class="p-6">
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    Are you sure you want to delete your business?
                </h2>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    Once your business is deleted, all its data will be
                    permanently removed. This action cannot be undone.
                </p>

                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="closeModal">
                        Cancel
                    </SecondaryButton>

                    <DangerButton
                        class="ms-3"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                        @click="deleteBusiness"
                    >
                        Delete Business
                    </DangerButton>
                </div>
            </div>
        </Modal>
    </section>
</template>
