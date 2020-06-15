<template>
    <div class="w-full">
        <div class="w-1/3 mx-auto text-xl text-center mb-20" v-if="joke">
            {{ joke}}
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            // delete axios.defaults.headers.common['X-Requested-With'];
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
                });
        },
        props: {
            joke: Object
        }
    }

</script>
