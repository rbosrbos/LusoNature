@extends('layouts.app')
@section('top')
<div id="section_topper" class="w-full">
    <div class="w-full bg-opacity-50 bg-black"></div>
</div>
@endsection
@section('content')
<div class="text-orange-400 md:w-1/2 xl:w-1/3 m-auto mb-10 pt-5">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative alert transition duration-500"
        role="alert">
        <span class="block sm:inline">{{ $error }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20">
                <title>Close</title>
                <path
                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
            </svg>
        </span>
    </div>
    @endforeach
    @endif
    <svg class="block m-auto mt-10 fill-current" xmlns='http://www.w3.org/2000/svg' width='100' height='100'
        viewBox='0 0 512 512'>
        <path
            d='M258.9,48C141.92,46.42,46.42,141.92,48,258.9,49.56,371.09,140.91,462.44,253.1,464c117,1.6,212.48-93.9,210.88-210.88C462.44,140.91,371.09,49.56,258.9,48ZM385.32,375.25a4,4,0,0,1-6.14-.32,124.27,124.27,0,0,0-32.35-29.59C321.37,329,289.11,320,256,320s-65.37,9-90.83,25.34a124.24,124.24,0,0,0-32.35,29.58,4,4,0,0,1-6.14.32A175.32,175.32,0,0,1,80,259C78.37,161.69,158.22,80.24,255.57,80S432,158.81,432,256A175.32,175.32,0,0,1,385.32,375.25Z' />
        <path
            d='M256,144c-19.72,0-37.55,7.39-50.22,20.82s-19,32-17.57,51.93C191.11,256,221.52,288,256,288s64.83-32,67.79-71.24c1.48-19.74-4.8-38.14-17.68-51.82C293.39,151.44,275.59,144,256,144Z' />
    </svg>
    <div class="text-center text-gray-700">
        <p class="text-2xl">Hello {{ Auth::user()->name }}</p>
        @if(!empty($avatar))
        <p class="my-5">Current Avatar:</p>
        <img class="block m-auto" width="70" src="{{ $avatar }}" alt="">
        @endif
        <form method="POST" id="avatar_form" action="{{ route('profile.store',Auth::user()->id) }}" enctype="multipart/form-data">
            @csrf
            <input type="file" class="hidden" name="avatar" id="avatar">
            <label
                class="cursor-pointer block w-1/2 m-auto bg-transparent mt-5 hover:bg-orange-300 text-orange-500 font-semibold hover:text-white py-2 px-4 border border-orange-300 hover:border-transparent rounded"
                for="avatar">
                <span id="file_value">@if(!empty($avatar)) Change @else New @endif Avatar</span>
            </label>
            {{-- <button type="submit"
             class="block m-auto bg-transparent mt-5 hover:bg-orange-300 text-orange-500 font-semibold hover:text-white py-2 px-4 border border-orange-300 hover:border-transparent rounded">Change Avatar</button> --}}
        </form>
        @if(!empty($avatar))
        <form method="POST" action="{{ route('profile.destroy',Auth::user()->id) }}" enctype="multipart/form-data">
            @csrf
            @method('delete')
            <a id="delete_avatar"
                class="cursor-pointer block w-1/2 m-auto bg-transparent mt-1 hover:bg-orange-300 text-orange-500 font-semibold hover:text-white py-2 px-4 border border-orange-300 hover:border-transparent rounded"
                for="avatar">Delete Avatar</a>
            {{-- <button type="submit"
             class="block m-auto bg-transparent mt-5 hover:bg-orange-300 text-orange-500 font-semibold hover:text-white py-2 px-4 border border-orange-300 hover:border-transparent rounded">Change Avatar</button> --}}
        </form>
        @endif
        <div class="mt-10">
            @if (Route::has('logout'))
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="block m-auto bg-transparent mt-5 hover:bg-orange-300 text-orange-500 font-semibold hover:text-white py-2 px-4 border border-orange-300 hover:border-transparent rounded">Logout</button>
            </form>
            @endif
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('js/profile.js') }}"></script>
@endpush
