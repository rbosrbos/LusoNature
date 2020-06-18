<template>
    <div class="flex flex-wrap items-start" id="place_images">
        <div class="relative mr-5" :id="image.id" v-for="image in images" :key="image.id"> 
            <img class="w-20" :src="storelink + '/' + image.id + '.jpg'" alt="Images">
            <div v-on:click="click" class="absolute flex justify-center items-center w-full cursor-pointer h-full top-0 left-0 bg-transparent text-transparent hover:text-red-700 hover:bg-white hover:bg-opacity-50 transition duration-500"><span class="text-6xl">&times;</span></div>
        </div>
    </div>
</template>
<script scoped>
    export default {
        props: {
            images: Array,
            storelink: String
        },
        methods: {
            click: (e) => {
                e.srcElement.closest('.relative .mr-5').remove()
            }
        },
    }
</script>
