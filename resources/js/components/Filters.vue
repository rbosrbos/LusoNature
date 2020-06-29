<template>
    <div class="flex justify-center flex-wrap items-center">
        <div class="w-full">
            <h3 class="text-center">Filters</h3>
        </div>
        <select v-model="vmCat" @change="change($event)" name="categories" id="categories"
            class="bg-gray-200 w-40 sm:w-64 text-gray-700 border border-gray-200 rounded p-1 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mr-2">
            <option value="0" disabled>Categories</option>
            <option value="all">All</option>
            <option v-for="category in categories" :key='category.id' :value='category.id'>{{category.name}}</option>
        </select>
        <select v-model="vmCity" @change="change($event)" name="cities" id="cities"
            class="bg-gray-200 w-40 sm:w-64 text-gray-700 border border-gray-200 rounded p-1 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mr-2">
            <option value="0" disabled>Cities</option>
            <option value="all">All</option>
            <option v-for="city in cities" :key='city.id' :value='city.id'>{{city.name}}</option>
        </select>
        <label class="custom-label flex my-5 mr-5 md:mr-10">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                <input @change="change($event)" v-model="parking" type="checkbox" name="parking" value="1"
                    class="hidden" checked>
                <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172">
                    <g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none"
                        font-size="none" text-anchor="none" style="mix-blend-mode:normal">
                        <path d="M0 172V0h172v172z" />
                        <path
                            d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                            fill="currentColor" stroke-width="1" />
                    </g>
                </svg>
            </div>
            <span class="select-none">Parking</span>
        </label>
        <label class="custom-label flex my-5 mr-5 md:mr-10">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                <input @change="change($event)" v-model="wc" type="checkbox" name="wc" value="1" class="hidden" checked>
                <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172">
                    <g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none"
                        font-size="none" text-anchor="none" style="mix-blend-mode:normal">
                        <path d="M0 172V0h172v172z" />
                        <path
                            d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                            fill="currentColor" stroke-width="1" />
                    </g>
                </svg>
            </div>
            <span class="select-none">WC</span>
        </label>
        <label class="custom-label flex my-5 mr-5 md:mr-10">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                <input @change="change($event)" v-model="restaurants" type="checkbox" name="restaurants" value="1"
                    class="hidden" checked>
                <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172">
                    <g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none"
                        font-size="none" text-anchor="none" style="mix-blend-mode:normal">
                        <path d="M0 172V0h172v172z" />
                        <path
                            d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                            fill="currentColor" stroke-width="1" />
                    </g>
                </svg>
            </div>
            <span class="select-none">Restaurants</span>
        </label>
    </div>
</template>
<script scoped>
    export default {
        mounted() {
            let urlParams = new URLSearchParams(window.location.search);
            this.vmCat = urlParams.get('category') ? urlParams.get('category') : 0;
            this.vmCity = urlParams.get('city') ? urlParams.get('city') : 0;
            this.wc = urlParams.get('wc') ? false : true;
            this.restaurants = urlParams.get('restaurants') ? false : true;
            this.parking = urlParams.get('parking') ? false : true;
        },
        props: {
            categories: Array,
            cities: Array
        },
        data() {
            return {
                vmCat: 0,
                vmCity: 0,
                wc: 1,
                restaurants: 1,
                parking: 1,
                link: 'place'
            }
        },
        methods: {
            change(e) {
                let count = 0;
                this.link = 'place';
                if ((this.vmCat != '' && this.vmCat != 'all') ||
                (this.vmCity != '' && this.vmCity != 'all') ||
                this.wc != 1 ||
                this.restaurants != 1 ||
                this.parking != 1) {
                    this.link += '?';
                }
                if (this.vmCat != '' && this.vmCat != 'all') {
                    this.link += 'category=' + this.vmCat;
                    count = 1;
                }
                if (this.vmCity != '' && this.vmCity != 'all') {
                    if (count > 0) this.link += '&';
                    this.link += 'city=' + this.vmCity;
                    count = 1;
                }
                if (this.wc != 1) {
                    if (count > 0) this.link += '&';
                     this.link += 'wc=false';
                     count = 1;
                }
                if (this.restaurants != 1) {
                    if (count > 0) this.link += '&';
                     this.link += 'restaurants=false';
                     count = 1;
                }
                if (this.parking != 1) {
                    if (count > 0) this.link += '&';
                     this.link += 'parking=false';
                     count = 1;
                }
                window.location.href = this.link;
            }
        }
    }

</script>
