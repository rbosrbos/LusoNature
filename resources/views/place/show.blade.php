@extends('layouts.section')

@push('styles')
<link href="{{ asset('css/place.css') }}" rel="stylesheet">
<style>

</style>
@endpush

@section('content')
<section class="flex justify-center flex-wrap">
    <div class="w-full ml-5 my-5">
        <a class="mr-3 text-green-500" href="{{ route('mainpage') }}">Home</a>/<a class="mx-3 text-green-500"
            href="{{ route('place.index') }}">Places</a>/<span class="ml-3">{{ $place->name }}</span>
    </div>
    <div id="main_slider_container" class="relative m-auto w-full">
        @foreach ($images as $img)
        @if ($loop->first)
        <div class="main_slide w-full absolute active overflow-hidden">
            @else
            <div class="main_slide w-full absolute overflow-hidden">
                @endif
                <div class="main_slide_bg w-full bg-no-repeat bg-center absolute z-0"
                    style="background-image: url('{{ Storage::url("places/$place->uuid/$img->uuid.jpg") }}');"></div>
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
        <div class="w-full lg:w-2/3 my-10">
            <h1 class="px-3 text-center sm:px-5 lg:px-0 w-full">{{ $place->name }}</h1>
            <table class="m-auto table-auto">
                <tr>
                    @if(!empty($average))
                    <td>Access:</td>
                    <td>
                        @for ($i = 0; $i < intval($average['access']); $i++) <img class="inline-block" width="15"
                            src="{{ asset('/images/star.svg') }}" alt="">
                            @endfor
                            @if(intval($average['access']) < $average['access']) @if(($average['access'] -
                                intval($average['access']))>= 0.5)
                                <img class="inline-block" width="15" src="{{ asset('/images/star-half-outline.svg') }}"
                                    alt="">
                                @endif
                                @endif
                    </td>
                    @endif
                </tr>
                <tr>

                    @if(!empty($average))
                    <td>Location:</td>
                    <td>
                        @for ($i = 0; $i < intval($average['location']); $i++) <img class="inline-block" width="15"
                            src="{{ asset('/images/star.svg') }}" alt="">
                            @endfor
                            @if(intval($average['location']) < $average['location']) @if(($average['location'] -
                                intval($average['location']))>= 0.5)
                                <img class="inline-block" width="15" src="{{ asset('/images/star-half-outline.svg') }}"
                                    alt="">
                                @endif
                                @endif
                    </td>
                    @endif
                </tr>
                <tr>

                    @if(!empty($average))
                    <td>Giftshops:</td>
                    <td>
                        @for ($i = 0; $i < intval($average['giftshops']); $i++) <img class="inline-block" width="15"
                            src="{{ asset('/images/star.svg') }}" alt="">
                            @endfor
                            @if(intval($average['giftshops']) < $average['giftshops']) @if(($average['giftshops'] -
                                intval($average['giftshops']))>= 0.5)
                                <img class="inline-block" width="15" src="{{ asset('/images/star-half-outline.svg') }}"
                                    alt="">
                                @endif
                                @endif
                    </td>
                    @endif
                </tr>
                <tr>

                    @if(!empty($average))
                    <td>Restaurants:</td>
                    <td>
                        @for ($i = 0; $i < intval($average['restaurants']); $i++) <img class="inline-block" width="15"
                            src="{{ asset('/images/star.svg') }}" alt="">
                            @endfor
                            @if(intval($average['restaurants']) < $average['restaurants']) @if(($average['restaurants']
                                - intval($average['restaurants']))>= 0.5)
                                <img class="inline-block" width="15" src="{{ asset('/images/star-half-outline.svg') }}"
                                    alt="">
                                @endif
                                @endif
                    </td>
                    @endif
                </tr>
            </table>
            <div class="mb-5 text-center">({{$votes}} ratings)</div>
            <div class="px-3 sm:px-5 lg:px-0">{!! $place->description !!}</div>
        </div>
</section>

<div class="map_container my-20">
    <div class="m-auto rounded-lg shadow-xl w-full lg:w-2/4" id="map"></div>
</div>
<div data-aos="flip-left" class="flex flex-wrap justify-center py-20 items-center">
    <div class="item mx-5 text-green-500">
        <div>
            <div>
                <p class="icon" title="Has Restaurants">
                    <svg role="img" aria-labelledby="svg-inline--fa-title-L1915zVEKoix" data-prefix="fas"
                        data-icon="utensils" class="svg-inline--fa fa-utensils fa-w-13"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 416 512" width='30' height='30'>
                        <title id="svg-inline--fa-title-L1915zVEKoix">Has Restaurants</title>
                        <path fill="currentColor"
                            d="M207.9 15.2c.8 4.7 16.1 94.5 16.1 128.8 0 52.3-27.8 89.6-68.9 104.6L168 486.7c.7 13.7-10.2 25.3-24 25.3H80c-13.7 0-24.7-11.5-24-25.3l12.9-238.1C27.7 233.6 0 196.2 0 144 0 109.6 15.3 19.9 16.1 15.2 19.3-5.1 61.4-5.4 64 16.3v141.2c1.3 3.4 15.1 3.2 16 0 1.4-25.3 7.9-139.2 8-141.8 3.3-20.8 44.7-20.8 47.9 0 .2 2.7 6.6 116.5 8 141.8.9 3.2 14.8 3.4 16 0V16.3c2.6-21.6 44.8-21.4 48-1.1zm119.2 285.7l-15 185.1c-1.2 14 9.9 26 23.9 26h56c13.3 0 24-10.7 24-24V24c0-13.2-10.7-24-24-24-82.5 0-221.4 178.5-64.9 300.9z">
                        </path>
                    </svg>
                    <p class="ml-4 absolute item-type text-black text-lg tracking-tighter mt-12 font-black">
                        Restaurants</p>
                </p>
            </div>
        </div>
    </div>

    <div data-aos="flip-left" class="item mx-5 text-green-600">
        <div>
            <div>
                <p class="icon" title="Has WC">
                    <svg role="img" width='30' height='30' aria-labelledby="svg-inline--fa-title-UFDYLAMfWSSN"
                        data-prefix="fas" data-icon="restroom" class="svg-inline--fa fa-restroom fa-w-20"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <title id="svg-inline--fa-title-UFDYLAMfWSSN">Has WC</title>
                        <path fill="currentColor"
                            d="M128 128c35.3 0 64-28.7 64-64S163.3 0 128 0 64 28.7 64 64s28.7 64 64 64zm384 0c35.3 0 64-28.7 64-64S547.3 0 512 0s-64 28.7-64 64 28.7 64 64 64zm127.3 226.5l-45.6-185.8c-3.3-13.5-15.5-23-29.8-24.2-15 9.7-32.8 15.5-52 15.5-19.2 0-37-5.8-52-15.5-14.3 1.2-26.5 10.7-29.8 24.2l-45.6 185.8C381 369.6 393 384 409.2 384H464v104c0 13.3 10.7 24 24 24h48c13.3 0 24-10.7 24-24V384h54.8c16.2 0 28.2-14.4 24.5-29.5zM336 0h-32c-8.8 0-16 7.2-16 16v480c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V16c0-8.8-7.2-16-16-16zM180.1 144.4c-15 9.8-32.9 15.6-52.1 15.6-19.2 0-37.1-5.8-52.1-15.6C51.3 146.5 32 166.9 32 192v136c0 13.3 10.7 24 24 24h8v136c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V352h8c13.3 0 24-10.7 24-24V192c0-25.1-19.3-45.5-43.9-47.6z">
                        </path>
                    </svg>
                    <p class="ml-4 absolute item-type text-black text-lg tracking-tighter mt-12 font-black">WC</p>
                </p>
            </div>
        </div>
    </div>
    <div data-aos="flip-left" class="item mx-5 text-green-600">
        <div>
            <div>
                <p class="icon" title="Has Parking">
                    <svg role="img" width='30' height='30' aria-labelledby="svg-inline--fa-title-vkXdK1rk96GT"
                        data-prefix="fas" data-icon="parking" class="svg-inline--fa fa-parking fa-w-14"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <title id="svg-inline--fa-title-vkXdK1rk96GT">Has Parking</title>
                        <path fill="currentColor"
                            d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM240 320h-48v48c0 8.8-7.2 16-16 16h-32c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16h96c52.9 0 96 43.1 96 96s-43.1 96-96 96zm0-128h-48v64h48c17.6 0 32-14.4 32-32s-14.4-32-32-32z">
                        </path>
                    </svg>
                    <p class="ml-4 absolute item-type text-black text-lg tracking-tighter mt-12 font-black">Parking
                    </p>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="flex flex-wrap flex-col mt-20 bg-green-100 py-20 items-center">
    <h1 class="w-full text-gray-700 text-center mb-5">Rate IT!</h1>
    @if(Auth::user())
    <table class="table-auto">
        <tr>
            <td class="sm:w-40">
                <p class="sm:text-lg font-bold">Access:</p>
            </td>
            <td>
                <input type="checkbox" @if(!empty($ratings) && $ratings->access>0) checked class="checke @else
                class=" @endif custom-cb"
                name="access[]" id="">
                <input type="checkbox" @if(!empty($ratings) && $ratings->access>1) checked class="checke @else
                class=" @endif custom-cb"
                name="access[]" id="">
                <input type="checkbox" @if(!empty($ratings) && $ratings->access>2) checked class="checke @else
                class=" @endif custom-cb"
                name="access[]" id="">
                <input type="checkbox" @if(!empty($ratings) && $ratings->access>3) checked class="checke @else
                class=" @endif custom-cb"
                name="access[]" id="">
                <input type="checkbox" @if(!empty($ratings) && $ratings->access>4) checked class="checke @else
                class=" @endif custom-cb"
                name="access[]" id="">
            </td>
        </tr>
        <tr>
            <td class="sm:w-40">
                <p class="sm:text-lg font-bold">Giftshops:</p>
            </td>
            <td>
                <input type="checkbox" @if(!empty($ratings) && $ratings->giftshops>0) checked class="checke @else
                class=" @endif
                custom-cb" name="giftshops[]" id="">
                <input type="checkbox" @if(!empty($ratings) && $ratings->giftshops>1) checked class="checke @else
                class=" @endif
                custom-cb" name="giftshops[]" id="">
                <input type="checkbox" @if(!empty($ratings) && $ratings->giftshops>2) checked class="checke @else
                class=" @endif
                custom-cb" name="giftshops[]" id="">
                <input type="checkbox" @if(!empty($ratings) && $ratings->giftshops>3) checked class="checke @else
                class=" @endif
                custom-cb" name="giftshops[]" id="">
                <input type="checkbox" @if(!empty($ratings) && $ratings->giftshops>4) checked class="checke @else
                class=" @endif
                custom-cb" name="giftshops[]" id="">
            </td>
        </tr>
        <tr>
            <td class="sm:w-40">
                <p class="sm:text-lg font-bold">Location:</p>
            </td>
            <td>
                <input type="checkbox" @if(!empty($ratings) && $ratings->location>0) checked class="checke @else
                class=" @endif
                custom-cb" name="location[]" id="">
                <input type="checkbox" @if(!empty($ratings) && $ratings->location>1) checked class="checke @else
                class=" @endif
                custom-cb" name="location[]" id="">
                <input type="checkbox" @if(!empty($ratings) && $ratings->location>2) checked class="checke @else
                class=" @endif
                custom-cb" name="location[]" id="">
                <input type="checkbox" @if(!empty($ratings) && $ratings->location>3) checked class="checke @else
                class=" @endif
                custom-cb" name="location[]" id="">
                <input type="checkbox" @if(!empty($ratings) && $ratings->location>4) checked class="checke @else
                class=" @endif
                custom-cb" name="location[]" id="">
            </td>
        </tr>
        <tr>
            <td class="sm:w-40">
                <p class="sm:text-lg font-bold">Restaurants:</p>
            </td>
            <td>
                <input type="checkbox" @if(!empty($ratings) && $ratings->restaurants>0) checked class="checke @else
                class=" @endif
                custom-cb" name="restaurants[]" id="">
                <input type="checkbox" @if(!empty($ratings) && $ratings->restaurants>1) checked class="checke @else
                class=" @endif
                custom-cb" name="restaurants[]" id="">
                <input type="checkbox" @if(!empty($ratings) && $ratings->restaurants>2) checked class="checke @else
                class=" @endif
                custom-cb" name="restaurants[]" id="">
                <input type="checkbox" @if(!empty($ratings) && $ratings->restaurants>3) checked class="checke @else
                class=" @endif
                custom-cb" name="restaurants[]" id="">
                <input type="checkbox" @if(!empty($ratings) && $ratings->restaurants>4) checked class="checke @else
                class=" @endif
                custom-cb" name="restaurants[]" id="">
            </td>
        </tr>
    </table>
    @else
    <p class="italic">Only registered users</p>
    @endif
</div>
<div class="flex flex-wrap bg-green-600 justify-center">
    <h2 class="text-white w-full text-center">Comments</h2>
</div>
<div>
    @if(Auth::guard('web')->check())
    <form action="" class="transition duration-500 w-full sm:w-1/2 m-auto pt-5 overflow-hidden"
        style="max-height:0;transition: max-height 2s ease-in">
        <textarea id="comment" name="description" type="text" placeholder="Write your comment here"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-24"></textarea>
            <p id="response" class="text-green-500"></p>
    </form>
    <button type="button" id="addComment"
        class="m-auto block bg-transparent my-5 hover:bg-green-300 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded">
        Add New
    </button>
    @endif
    @if($comments)
    <div class="w-full flex items-center overflow-x-scroll py-12" id="comments">
        @foreach ($comments as $c)
        <div class="inline-block">
            <div class="flex flex-wrap rounded mx-5 shadow-lg p-5 comment-card">
                <div class="w-full sm:w-3/12 py-5 sm:py-0 flex items-center">
                    @if ($c->user->avatar)
                    <img class="rounded-full" src="{{Storage::url('avatars/'.$c->user->id.'.jpg')}}"
                        alt="{{ $c->user->name }} avatar Image">
                    @else
                    <div
                        class="rounded-full text-white font-bold text-4xl flex items-center justify-center avatar bg-{{ $colors[array_rand($colors)] }}-500">
                        {{substr($c->user->name,0,1)}}</div>
                    @endif
                </div>
                <div class="flex flex-col w-full sm:w-9/12">
                    <div>
                        <p class="pb-2"><strong>{{ $c->user->name }}</strong> on {{$c->updated_at}}</p>
                        <hr class="pb-2">
                    </div>
                    <div>{{ $c->comment }}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
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
    $('#addComment').click(function () {
        if ($(this).hasClass('submitComment')) {

            $.ajax({
                type: 'POST',
                url: '/comment/',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    place_id: '{{$place->uuid ?? ''}}',
                    comment: $('#comment').val()
                },
                success: function (data) {
                    $('textarea').prop('disabled', true);
                    $('#response').text(data);
                },
                error: function (data) {
                    console.log(data);
                }
            });
        } else {
            $('form').css('max-height', '9999px');
            $(this).text('Submit');
            $(this).addClass('submitComment');
        }
    });
    $('.custom-cb').click(function () {
        $(this).addClass("checke");
        $(this).prop("checked", true);
        $(this).prevAll().prop("checked", true);
        $(this).prevAll().addClass("checke");
        $(this).nextAll().removeClass("checke");
        $(this).nextAll().prop("checked", false);
        let points = $(".checke:checkbox").length;
        $.ajax({
            type: 'POST',
            url: '/rating/{{$ratings->id ?? ''}}',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {
                place_id: '{{$place->id ?? ''}}',
                access: $('.checke:input[name="access[]"]').length,
                giftshops: $('.checke:input[name="giftshops[]"]').length,
                location: $('.checke:input[name="location[]"]').length,
                restaurants: $('.checke:input[name="restaurants[]"]').length
            },
            success: function (data) {
                console.log(data);
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
    var map;

    function initMap() {
        var myLatLng = {
            lat: parseFloat('{{$place->latitude}}'),
            lng: parseFloat('{{$place->longitude}}')

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
<script src="{{asset('js/place.js')}}"></script>
@endpush
