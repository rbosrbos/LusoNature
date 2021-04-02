@extends('layouts.template.app')
@section('top')
    <div id="main_slider_container" class="relative">
        @foreach ($latest as $item)
            <div class="main_slide w-full absolute @if ($loop->first) active @endif overflow-hidden">
                <div class="main_slide_bg w-full absolute z-0"
                     style="background-image: url('{{ Storage::url('places/'.$item->uuid.'/'.$item->images->random(1)[0]->uuid.'.jpg') }}');">
                </div>
                <div
                    class="overlay bg-black bg-opacity-50 w-full h-full z-10 relative flex flex-col justify-center items-center px-10 sm:px-20 text-white">
                    <h1 class="text-center text-4xl sm:text-6xl">{{$item->name}}</h1>
                    <h3 class="text-center text-xs sm:text-sm lg:text-lg xl:text-xl">{{Str::limit($item->description, 400)}}</h3>
                </div>
            </div>
        @endforeach
        <div id="main_slider_pager" class="absolute w-full flex items-end z-10 justify-center pb-5">
            <div class="page cursor-pointer rounded-full w-3 h-3 mr-2 bg-black bg-white"></div>
            <div class="page cursor-pointer rounded-full w-3 h-3 mr-2 bg-black"></div>
            <div class="page cursor-pointer rounded-full w-3 h-3 bg-black"></div>
        </div>
    </div>
@endsection
@section('content')
    @yield('content')
@endsection
@push('scripts')
    @yield('scripts')
    <script>
        let vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);

        function changeMobileBgs() {
            const backgrounds = document.querySelectorAll('.main_slide_bg');
            if (window.innerHeight > window.innerWidth) {
                backgrounds.forEach(element => {
                    const img = element.style.backgroundImage;
                    let prepare = img.split('.pt');
                    prepare = prepare[1].split('.');

                    if (element.style.backgroundImage.includes('-mobile') === false) {
                        element.style.backgroundImage = 'url("{{url('/')}}' + prepare[0] + '-mobile.' + prepare[1];
                    }
                });
            } else {
                backgrounds.forEach(element => {
                    element.style.backgroundImage = element.style.backgroundImage.replace('-mobile', '');
                });
            }
        }

        if (vw <= 640) {
            changeMobileBgs();
        }
        $(window).resize(function () {

            vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
            changeMobileBgs();
        });

    </script>
@endpush
