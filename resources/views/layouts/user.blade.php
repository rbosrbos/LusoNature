@extends('layouts.section')
@section('content')
@push('styles')
<style>
    .left {
        font-family: 'Lobster', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
</style>
@endpush
<div class="flex flex-col sm:flex-row">
    <div class="text-green-400 px-5 sm:py-5 inline-block">
        @if ($errors->avatar->any())
        @foreach ($errors->avatar->all() as $error)
        <div class="text-center bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative alert transition duration-500"
            role="alert">
            <span class="block sm:inline">{{ $error }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <ion-icon name="close-outline"></ion-icon>
            </span>
        </div>
        @endforeach
        @endif
        <div class="text-center text-gray-700">
            <div class="text-2xl">
                @if(!empty($avatar))
                <a href="{{ route('user.index') }}">
                    <img class="block m-auto" width="70" src="{{ $avatar }}" alt="">
                </a>
                @else
                <ion-icon class="text-green-400" size="large" name="person-circle-outline"></ion-icon>
                @endif
                <p class="left text-base">{{ Auth::user()->name ?? '' }}</p>
            </div>
        <a class="text-xs cursor-pointer inline-block sm:block w-24 m-auto bg-transparent sm:mb-2 hover:bg-green-300 text-green-500 font-semibold hover:text-white border border-green-300 hover:border-transparent rounded" href="{{ route('user.index') }}">Home</a>
            <form method="POST" id="avatar_form" class="inline-block sm:block" action="{{ route('user.store',Auth::user()->id) }}"
                enctype="multipart/form-data">
                @csrf
                <input type="file" class="hidden" name="avatar" id="avatar">
                <label
                    class="text-xs cursor-pointer block w-24 m-auto bg-transparent hover:bg-green-300 text-green-500 font-semibold hover:text-white border border-green-300 hover:border-transparent rounded"
                    for="avatar">
                    <span id="file_value">@if(!empty($avatar)) Change @else New @endif Avatar</span>
                </label>

            </form>
            @if(!empty($avatar))
            <form method="POST" class="inline-block sm:block" action="{{ route('user.destroy',Auth::user()->id) }}" enctype="multipart/form-data">
                @csrf
                @method('delete')
                <a id="delete_avatar"
                    class="text-xs cursor-pointer block w-24 m-auto bg-transparent mt-2 hover:bg-green-300 text-green-500 font-semibold hover:text-white border border-green-300 hover:border-transparent rounded">Delete
                    Avatar</a>
            </form>
            @endif
            <div class="sm:mt-2 inline-block sm:block">
                @if (Route::has('logout'))
                <form action="{{ route('user.logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="text-xs cursor-pointer block w-24 m-auto bg-transparent hover:bg-green-300 text-green-500 font-semibold hover:text-white border border-green-300 hover:border-transparent rounded">Logout</button>
                </form>
                @endif
            </div>
        </div>
        <div id="user_menu" class="mt-3 sm:mt-10">
            <p class="left text-black text-base text-center">Submissions</p>
            <ul class="text-center">
                <li class="inline-block sm:block"><a class="text-xs cursor-pointer block w-24 m-auto bg-transparent hover:bg-green-300 text-green-500 font-semibold hover:text-white border border-green-300 hover:border-transparent rounded text-center"
                        href="{{ route('user.places') }}">Places</a></li>
                <li class="inline-block sm:block"><a class="text-xs my-2 cursor-pointer block w-24 m-auto bg-transparent hover:bg-green-300 text-green-500 font-semibold hover:text-white border border-green-300 hover:border-transparent rounded text-center"
                        href="{{ route('user.index') }}">Other Activities</a></li>
            </ul>
        </div>
    </div>
    <div class="w-full">
        @yield('usercontent')
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/profile.js') }}"></script>
@yield('scripts')
@endsection
