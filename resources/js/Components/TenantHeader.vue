<template>
    <header class="bg-white shadow-sm ring-1 ring-gray-900/5">
      <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-6 sm:px-6 lg:px-8">
        <!-- Logo -->
        <div class="flex items-center gap-x-4">
          <img
            v-if="logoUrl"
            :src="logoUrl"
            alt="Logo"
            class="h-12 w-12 rounded-full bg-gray-50"
          />
          <div>
            <h1 class="text-lg font-semibold text-gray-900">{{ placeName }}</h1>
            <p class="text-sm text-gray-500">Owned by {{ ownerName }}</p>
          </div>
        </div>
  
        <!-- Custom Message -->
        <div class="hidden sm:block">
          <p class="text-sm text-gray-500">{{ customMessage }}</p>
        </div>
      </div>
    </header>
  </template>
  
  <script>
  export default {
    props: {
      placeName: {
        type: String,
        required: true,
      },
      ownerName: {
        type: String,
        required: true,
      },
      customMessage: {
        type: String,
        default: "Welcome to our services!",
      },
      logoUrl: {
        type: String,
        default: null, // Default to no logo
      },
    },
  };
  </script>
  