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
  <section class="flex justify-center flex-wrap">
      <div class="w-full ml-5 my-5">
        <a class="mr-3 text-orange-500" href="{{ route('mainpage') }}">Home</a>/<a class="mx-3 text-orange-500" href="{{ route('news.index') }}">News</a>/<span class="ml-3">{{ $new->title }}</span>
      </div>
      <div class="w-full lg:w-2/3 my-10">
          <img src="https://picsum.photos/1920/500" alt="">
          <h1 class="w-full">{{ $new->title }}</h1>
          <h3 class="w-full">{{ $new->summary }}</h3>
          <p>{{ $new->body }}</p>
          <p class="text-orange-300 text-right">
              <ion-icon style="transform:translateY(4px)" class="text-xl" name="person-circle-outline"></ion-icon> <a
                  class="mr-5" href="mailto:{{ $new->user->email }}">{{ $new->user->name }}</a>
              <ion-icon style="transform:translateY(4px)" class="text-xl" name="calendar-outline"></ion-icon>
              {{ $new->created_at->format('d/m/y') }}
          </p>
      </div>

  </section>
  @endsection
