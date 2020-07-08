<template>
    <div class="w-full">
        <div class="w-11/12 sm:w-1/3 mx-auto mb-10 text-xs sm:text-xl italic text-center" v-if="joke">
            {{ joke }}
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            axios
                .get('https://api.chucknorris.io/jokes/random', {
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    responseType: 'json'
                })
                .then(response => (this.joke = response.data.value))
                .catch(error => {
                    this.joke = error.response
                })
        },
        data: function () {
            return {
                joke: ''
            }
        }
    }

</script>
