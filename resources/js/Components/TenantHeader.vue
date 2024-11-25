<template>
    <header class="bg-white">
        <div class="relative overflow-hidden bg-white">
            <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
                <div
                    class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8"
                >
                    <div class="sm:max-w-lg">
                        <h1
                            class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl"
                        >
                            {{ placeName }}
                        </h1>
                        <p class="mt-4 text-xl text-gray-500">
                            Your satisfaction is our priority!
                            <span class="text-indigo-600"
                                >By {{ ownerName }}</span
                            >
                        </p>
                    </div>
                    <div>
                        <div class="mt-10">
                            <!-- Decorative image grid -->
                            <div
                                aria-hidden="true"
                                class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl"
                            >
                                <div
                                    class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8"
                                >
                                    <div
                                        class="flex items-center space-x-6 lg:space-x-8"
                                    >
                                        <div
                                            class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8"
                                        >
                                            <div
                                                class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100"
                                            >
                                                <img
                                                    src="https://cdn.pixabay.com/photo/2016/08/11/02/23/massage-therapy-1584711_1280.jpg"
                                                    alt=""
                                                    class="size-full object-cover"
                                                />
                                            </div>
                                            <div
                                                class="h-64 w-44 overflow-hidden rounded-lg"
                                            >
                                                <img
                                                    src="https://cdn.pixabay.com/photo/2022/07/06/12/04/candles-7304948_1280.jpg"
                                                    alt=""
                                                    class="size-full object-cover"
                                                />
                                            </div>
                                        </div>
                                        <div
                                            class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8"
                                        >
                                            <div
                                                class="h-64 w-44 overflow-hidden rounded-lg"
                                            >
                                                <img
                                                    src="https://cdn.pixabay.com/photo/2014/12/13/18/27/woman-567021_1280.jpg"
                                                    alt=""
                                                    class="size-full object-cover"
                                                />
                                            </div>
                                            <div
                                                class="h-64 w-44 overflow-hidden rounded-lg"
                                            >
                                                <img
                                                    src="https://cdn.pixabay.com/photo/2019/09/16/17/18/spa-4481538_1280.jpg"
                                                    alt=""
                                                    class="size-full object-cover"
                                                />
                                            </div>
                                            <div
                                                class="h-64 w-44 overflow-hidden rounded-lg"
                                            >
                                                <img
                                                    src="https://cdn.pixabay.com/photo/2022/09/13/21/47/massage-7452918_1280.jpg"
                                                    alt=""
                                                    class="size-full object-cover"
                                                />
                                            </div>
                                        </div>
                                        <div
                                            class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8"
                                        >
                                            <div
                                                class="h-64 w-44 overflow-hidden rounded-lg"
                                            >
                                                <img
                                                    src="https://cdn.pixabay.com/photo/2022/09/13/21/47/massage-7452918_1280.jpg"
                                                    alt=""
                                                    class="size-full object-cover"
                                                />
                                            </div>
                                            <div
                                                class="h-64 w-44 overflow-hidden rounded-lg"
                                            >
                                                <img
                                                    src="https://cdn.pixabay.com/photo/2023/11/14/23/01/beauty-8388840_1280.jpg"
                                                    alt=""
                                                    class="size-full object-cover"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a
                                href="#services"
                                class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700"
                            >
                                See Services
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
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
    },
};
</script>
