  @extends('layouts.app')

  @push('styles')
  <link href="{{ asset('css/news.css') }}" rel="stylesheet">
  @endpush

  @section('top')
  <div id="section_topper" class="w-full">
      <div class="w-full bg-opacity-50 bg-black h-full flex items-end justify-center">
          <h1 class="text-center text-white w-full lg:hidden">News</h1>
      </div>
  </div>
  @endsection

  @section('content')
  <section class="flex flex-wrap">
    <div class="w-full ml-5 my-5">
        <a class="mr-3 text-orange-500" href="{{ route('mainpage') }}">Home</a>/<a class="mx-3 text-orange-500" href="{{ route('news.index') }}">News</a>
      </div>
      <div class="filters w-full text-center md:text-left xl:w-1/6">
          <h1 class="text-xl lg:text-4xl text-center">Filters</h1>
      </div>
      <div class="news-container w-full md:w-5/5 xl:w-5/6 flex flex-wrap justify-around">
          <h1 class="text-black text-center w-full hidden lg:inline">News</h1>
          <div
              class="w-full bg-black bg-opacity-50 fixed bottom-0 pb-6 pt-1 lg:static lg:pb-0 lg:pt-0 lg:bg-transparent">
              <div class="w-10/12 m-auto">
                  {{$news->links()}}
              </div>
          </div>
          @foreach ($news as $new)
          <div onclick="window.location.href='{{route('news.show', $new->id)}}'"
              class="cursor-pointer news w-11/12 sm:w-5/12 flex items-end text-white mt-10">
              <div class="w-full p-5 bg-black bg-opacity-50 font-bold">
                  <p class="text-2xl">{{ $new->title }}</p>
                  <p class="summary overflow-hidden">{{ $new->summary }} </p>
                  <p class="text-orange-300 text-right">
                      <ion-icon style="transform:translateY(4px)" class="text-xl" name="person-circle-outline">
                      </ion-icon> <a class="mr-5" href="mailto:{{ $new->user->email }}">{{ $new->user->name }}</a>
                      <ion-icon style="transform:translateY(4px)" class="text-xl" name="calendar-outline"></ion-icon>
                      {{ $new->created_at->format('d/m/y') }}
                  </p>

              </div>
          </div>
          @endforeach

      </div>
  </section>
  @endsection
