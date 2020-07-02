<template>
    <div :id="place.id" v-on="{mouseover: over, mouseleave: leave, click: goto}"
        class="parent cursor-pointer shadow-md transition duration-500 transform hover:scale-110 flex items-end bg-cover justify-center m-5"
        v-bind:style="{ backgroundImage: 'url(../storage/places/'+this.place.uuid + '/' + this.place.images[0].uuid + '.jpg)', height: '500px', width: '400px' }">
        <div
            class="bg-white bg-opacity-75 w-full font-bold h-40 text-green-500 flex items-center flex-col justify-center">
            <p class="text-lg">{{place.categories.name}}</p>
            <p class="text-black text-2xl">{{place.name}}</p>
            <p class="text-lg ">{{place.cities.name}}</p>
            <p class="text-black hidden text-center font-normal p-3">{{place.description | limit}}</p>
        </div>
    </div>
</template>
<style scoped lang="scss">
    .parent {
        overflow: hidden;

        .normal {
            transition: transform 0.2s ease-in;
            transform: none !important;
        }

        .opacity-1 {
            transition: opacity 0.8s ease-in;
        }

        &:hover {
            .text-lg {
                &:first-child {
                    transform: translate(-500px);
                }

                &:nth-child(3) {
                    transform: translate(500px);
                }

            }
        }
    }

</style>
<script>
    export default {
        props: {
            place: Object
        },
        filters: {
            limit: function (value) {
                if (!value) return ''
                value = value.toString()
                return value.substring(0, 300) + '...'
            }
        },
        methods: {
            over: function () {
                let animDiv = this.$el.childNodes[0];
                animDiv.classList.add('h-full')
                animDiv.children[3].classList.remove('hidden')
                animDiv.children[3].classList.add('opacity-0', 'transition', 'duration-500')
                setTimeout(() => {
                    animDiv.children[0].classList.add('normal')
                    animDiv.children[2].classList.add('normal')
                    animDiv.children[3].classList.remove('opacity-0')
                    animDiv.children[3].classList.add('opacity-1')
                }, 500);
            },
            leave: function () {
                let animDiv = this.$el.childNodes[0];
                animDiv.children[3].classList.add('hidden', 'opacity-0')
                animDiv.children[3].classList.remove('opacity-1')
                animDiv.children[0].classList.remove('normal')
                animDiv.children[2].classList.remove('normal')
                animDiv.classList.remove('h-full')
            },
            goto: function (e) {
                window.location.href = 'place/' + this.place.uuid;
            }
        }
    }

</script>
