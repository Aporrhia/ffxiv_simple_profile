<div class="overflow-hidden w-full max-w-6xl">
    <h1 class="text-4xl font-bold mb-4 text-white text-center">Profile</h1>
    <div class="bg-gray-800 bg-opacity-50 rounded-lg shadow-lg w-full max-w-6xl p-2">
        <div class="grid grid-cols-5 gap-4">
            <div x-data="{ currentImage: 0, images: ['{{ asset('images/img1.png') }}', '{{ asset('images/img2.png') }}'] }" class="relative h-80 col-span-3">
                <template x-for="(image, index) in images" :key="index">
                    <div x-show="currentImage === index" class="absolute inset-0 transition-opacity duration-500" x-transition:enter="transition-opacity ease-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-500" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        <img :src="image" class="w-full h-full object-cover rounded-lg" alt="Image">
                    </div>
                </template>
                <button @click="currentImage = (currentImage > 0) ? currentImage - 1 : images.length - 1" class="absolute left-1 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button @click="currentImage = (currentImage < images.length - 1) ? currentImage + 1 : 0" class="absolute right-1 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
            <div class="p-4 rounded-r-lg grid grid-col-1 gap-2 content-center text-xl col-span-2">
                <div><p class="text-white"><strong>Name:</strong> Astra Noctis</p></div>
                <div class="flex items-end space-x-2">
                    <p class="text-white inline"><strong>FFXIV Lodestone:</strong> 43118064</p>
                    <a href="https://eu.finalfantasyxiv.com/lodestone/character/43118064/" target="_blank" class="text-white inline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                        </svg>
                    </a>
                </div>
                <div><p class="text-white"><strong>Main Job:</strong> Black Mage</p></div>
                <div><p class="text-white"><strong>Title:</strong> Fashion Leader</p></div>
            </div>
        </div>
    </div>
</div>
