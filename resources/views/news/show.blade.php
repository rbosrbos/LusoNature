  @extends('layouts.section')

  @push('styles')
  <link href="{{ asset('css/news.css') }}" rel="stylesheet">
  @endpush

  @section('content')
  <section class="flex justify-center flex-wrap">
      <div class="w-full ml-5 my-5">
        <a class="mr-3 text-green-500" href="{{ route('mainpage') }}">Home</a>/<a class="mx-3 text-green-500" href="{{ route('news.index') }}">News</a>/<span class="ml-3">{{ $new->title }}</span>
      </div>
      <div class="w-full lg:w-2/3 my-10">
          <img class="m-auto" src="{{ Storage::url('news/'.$new->uuid.'/'.$new->uuid.'.jpg') }}" alt="">
          <h1 class="px-3 sm:px-5 lg:px-0 w-full text-center">{{ $new->title }}</h1>
          <h3 class="px-3 sm:px-5 lg:px-0 mb-5 text-md w-full">{{ $new->summary }}</h3>
          <div class="px-3 sm:px-5 lg:px-0">{!! $new->body !!}</div>
          <p class="px-3 sm:px-5 lg:px-0 text-green-300 text-right">
              <ion-icon style="transform:translateY(4px)" class="text-xl" name="person-circle-outline"></ion-icon> <a
                  class="mr-5" href="mailto:{{ $new->admin->email }}">{{ $new->admin->name }}</a>
              <ion-icon style="transform:translateY(4px)" class="text-xl" name="calendar-outline"></ion-icon>
              {{ $new->created_at->format('d/m/y') }}
          </p>
      </div>

  </section>
  @endsection
