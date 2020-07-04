  @extends('layouts.section')

  @push('styles')
  <link href="{{ asset('css/news.css') }}" rel="stylesheet">
  @endpush
  @section('title')
  News
  @endsection
  @section('content')
  <section class="flex flex-wrap">
    <div class="w-full ml-5 my-5">
        <a class="mr-3 text-green-500" href="{{ route('mainpage') }}">Home</a>/<a class="mx-3 text-green-500" href="{{ route('news.index') }}">News</a>
      </div>
      {{-- <div class="filters w-full text-center md:text-left xl:w-1/6">
          <h1 class="text-xl lg:text-4xl text-center">Filters</h1>
      </div> --}}
      <div class="news-container w-full mb-10 flex flex-wrap justify-center">
          
          <div
              class="w-full bg-black bg-opacity-50 fixed bottom-0 pb-6 pt-1 lg:static lg:pb-0 lg:pt-0 lg:bg-transparent">
              <div class="w-10/12 m-auto">
                  {{$news->links()}}
              </div>
          </div>
          @foreach ($news as $new)
          <div onclick="window.location.href='{{route('news.show', $new->uuid)}}'"
          class="cursor-pointer news flex items-end text-white mt-10 mx-5 sm:mx-10" style="background-image: url('{{ Storage::url('news/'.$new->uuid.'/'.$new->uuid.'-card.jpg') }}');">
              <div class="w-full p-5 bg-black bg-opacity-50 font-bold">
                  <p class="text-lg sm:text-2xl">{{ $new->title }}</p>
                  <p class="summary text-xs sm:text-sm overflow-hidden">{{ Str::limit($new->summary, 200) }} </p>
                  <p class="text-green-300 text-right">
                      <ion-icon style="transform:translateY(4px)" class="text-xl" name="person-circle-outline">
                      </ion-icon> <a class="mr-5" href="mailto:{{ $new->admin->email }}">{{ $new->admin->name }}</a>
                      <ion-icon style="transform:translateY(4px)" class="text-xl" name="calendar-outline"></ion-icon>
                      {{ $new->created_at->format('d/m/y') }}
                  </p>

              </div>
          </div>
          @endforeach

      </div>
  </section>
  @endsection
