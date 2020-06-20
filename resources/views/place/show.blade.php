@extends('layouts.section')

@push('styles')
<link href="{{ asset('css/news.css') }}" rel="stylesheet">
<style>
    #main_slider_container {
        height: 600px !important;
    }
    .main_slide_bg {
        background-size: auto 100% !important;
    }

    #main_slider_pager,
    .main_slide_bg,
    .main_slide {
        height: 600px !important;
    }
    .map_container {
        height: 500px;
    }
    #map {
        height: 100%;
    }
    .item {
        text-align: center;
        width: 60px;
        height: 60px;
        border-radius: 5px;
        background-color: #fff;
        position: relative;
        box-shadow: 0 0 20px rgba(0,0,0,.3);
        opacity: 1;
        }
    .item div {
        text-align: center;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 20px rgba(0,0,0,.3);
        position: absolute;
        width: 100%;
        height: 100%;
        transform: rotate(10deg);
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .icon, .item-type {
        line-height: 1.15;
        text-align: center;
        display: block;
        transform: rotate(-20deg);
    }
</style>
@endpush

@section('content')
<section class="flex justify-center flex-wrap">
    <div class="w-full ml-5 my-5">
        <a class="mr-3 text-orange-500" href="{{ route('mainpage') }}">Home</a>/<a class="mx-3 text-orange-500"
            href="{{ route('place.main') }}">Places</a>/<span class="ml-3">{{ $place->name }}</span>
    </div>
    <div class="w-full lg:w-2/3 my-10">
        <h1 class="px-3 sm:px-5 lg:px-0 w-full">{{ $place->name }}</h1>
        <p class="px-3 sm:px-5 lg:px-0">{!! $place->description !!}</p>
    </div>
</section>
<div id="main_slider_container" class="relative m-auto w-8/12">
    @foreach ($images as $img)
    @if ($loop->first)
    <div class="main_slide w-full absolute active overflow-hidden">
        @else
        <div class="main_slide w-full absolute overflow-hidden">
            @endif
            <div class="main_slide_bg w-full bg-no-repeat bg-center absolute z-0"
                style="background-image: url('{{ Storage::url("places/$img->place_id/$img->id.jpg") }}');"></div>
        </div>
        @endforeach
        <div id="main_slider_pager" class="absolute w-full flex items-end z-10 justify-center pb-5">
            @foreach ($images as $img)
            @if ($loop->first)
            <div class="page cursor-pointer rounded-full w-3 h-3 mr-2 bg-black bg-white"></div>
            @elseif(!$loop->last)
            <div class="page cursor-pointer rounded-full w-3 h-3 mr-2 bg-black"></div>
            @else
            <div class="page cursor-pointer rounded-full w-3 h-3 bg-black"></div>
            @endif
            @endforeach
        </div>
    </div>
    <div class="map_container my-20">
        <div class="m-auto rounded-lg shadow-xl w-full lg:w-2/3" id="map"></div>
    </div>
    <div data-aos="flip-left" class="flex flex-wrap justify-center py-20 items-center">
        <div class="item mx-5 text-orange-500">
            <div>
                <div>
                    <p class="icon" title="Has Restaurants">
                        <svg 
                        role="img" 
                        aria-labelledby="svg-inline--fa-title-L1915zVEKoix" 
                        data-prefix="fas" 
                        data-icon="utensils" 
                        class="svg-inline--fa fa-utensils fa-w-13" 
                        xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 416 512" width='30' height='30'>
                        <title id="svg-inline--fa-title-L1915zVEKoix">Has Restaurants</title>
                        <path fill="currentColor" d="M207.9 15.2c.8 4.7 16.1 94.5 16.1 128.8 0 52.3-27.8 89.6-68.9 104.6L168 486.7c.7 13.7-10.2 25.3-24 25.3H80c-13.7 0-24.7-11.5-24-25.3l12.9-238.1C27.7 233.6 0 196.2 0 144 0 109.6 15.3 19.9 16.1 15.2 19.3-5.1 61.4-5.4 64 16.3v141.2c1.3 3.4 15.1 3.2 16 0 1.4-25.3 7.9-139.2 8-141.8 3.3-20.8 44.7-20.8 47.9 0 .2 2.7 6.6 116.5 8 141.8.9 3.2 14.8 3.4 16 0V16.3c2.6-21.6 44.8-21.4 48-1.1zm119.2 285.7l-15 185.1c-1.2 14 9.9 26 23.9 26h56c13.3 0 24-10.7 24-24V24c0-13.2-10.7-24-24-24-82.5 0-221.4 178.5-64.9 300.9z"></path></svg>
                        <p class="ml-4 absolute item-type text-black text-lg tracking-tighter mt-12 font-black">Restaurants</p>
                    </p>
                </div>
            </div>
        </div>
        
        <div data-aos="flip-left" class="item mx-5 text-orange-600">
            <div>
                <div>
                    <p class="icon" title="Has WC">
                        <svg role="img" width='30' height='30' aria-labelledby="svg-inline--fa-title-UFDYLAMfWSSN" data-prefix="fas" data-icon="restroom" class="svg-inline--fa fa-restroom fa-w-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><title id="svg-inline--fa-title-UFDYLAMfWSSN">Has WC</title><path fill="currentColor" d="M128 128c35.3 0 64-28.7 64-64S163.3 0 128 0 64 28.7 64 64s28.7 64 64 64zm384 0c35.3 0 64-28.7 64-64S547.3 0 512 0s-64 28.7-64 64 28.7 64 64 64zm127.3 226.5l-45.6-185.8c-3.3-13.5-15.5-23-29.8-24.2-15 9.7-32.8 15.5-52 15.5-19.2 0-37-5.8-52-15.5-14.3 1.2-26.5 10.7-29.8 24.2l-45.6 185.8C381 369.6 393 384 409.2 384H464v104c0 13.3 10.7 24 24 24h48c13.3 0 24-10.7 24-24V384h54.8c16.2 0 28.2-14.4 24.5-29.5zM336 0h-32c-8.8 0-16 7.2-16 16v480c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V16c0-8.8-7.2-16-16-16zM180.1 144.4c-15 9.8-32.9 15.6-52.1 15.6-19.2 0-37.1-5.8-52.1-15.6C51.3 146.5 32 166.9 32 192v136c0 13.3 10.7 24 24 24h8v136c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V352h8c13.3 0 24-10.7 24-24V192c0-25.1-19.3-45.5-43.9-47.6z"></path></svg>
                        <p class="ml-4 absolute item-type text-black text-lg tracking-tighter mt-12 font-black">WC</p>
                    </p>
                </div>
            </div>
        </div>
        <div data-aos="flip-left" class="item mx-5 text-orange-600">
            <div>
                <div>
                    <p class="icon" title="Has Parking">
                        <svg role="img" width='30' height='30' aria-labelledby="svg-inline--fa-title-vkXdK1rk96GT" data-prefix="fas" data-icon="parking" class="svg-inline--fa fa-parking fa-w-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><title id="svg-inline--fa-title-vkXdK1rk96GT">Has Parking</title><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM240 320h-48v48c0 8.8-7.2 16-16 16h-32c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16h96c52.9 0 96 43.1 96 96s-43.1 96-96 96zm0-128h-48v64h48c17.6 0 32-14.4 32-32s-14.4-32-32-32z"></path></svg>
                        <p class="ml-4 absolute item-type text-black text-lg tracking-tighter mt-12 font-black">Parking</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @push('scripts')

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default">
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9DGej9ucJeg_z3jQutl1g_v2BWvvNltU&callback=initMap&libraries=&v=weekly"
        defer>
    </script>
    <script>
        document.getElementById('main_slider_pager').onclick = function () {
            const slides = this.parentElement.children;
            for (let i = 0; i < slides.length; i++) {
                if (slides[i].classList.contains('active')) {
                    let bg = slides[i].children[0].style.backgroundImage;
                    bg = bg.replace('url("', '').replace('")', '');
                    window.open(bg, '_blank');
                }
            }
        }
        var map;

        function initMap() {
            var myLatLng = {
                lat: {{$place->latitude}}, 
                lng: {{$place->longitude}}
            };
            map = new google.maps.Map(document.getElementById("map"), {
                center: myLatLng,
                zoom: 8
            });
            
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: '{{$place->name}}'
            });
        }

    </script>
    @endpush
