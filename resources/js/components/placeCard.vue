<template>
    <div class="flex items-end bg-cover justify-center m-5 bg-pink-500" style="background-image: url('https://picsum.photos/400/500'); height: 500px; width: 400px;">
        <div class="bg-white bg-opacity-75 w-full font-bold h-20 text-orange-500 flex items-center flex-col justify-center">
            <p>{{place.categories.name}}</p>
            <p>{{place.name}}</p>
            <p></p>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            place: Object
        }
    }

</script>
