@extends('layouts.app')
@section('top')
<div id="section_topper" class="w-full">
    <div class="w-full bg-opacity-50 bg-black"></div>
</div>
@endsection
@section('content')
<div class="text-green-400 md:w-1/2 xl:w-1/4 m-auto mb-10 text-center">
    <ion-icon style="font-size: 8em;" name="mail-outline"></ion-icon>
    <div class="text-center text-gray-700">
        @if (session('status'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative alert" role="alert">
            <span class="block sm:inline">{{ session('status') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <ion-icon name="mail-outline"></ion-icon>
            </span>
        </div>
        @endif
        <p class="text-2xl">{{ __('Reset Password') }}</p>
        <p>Enter your email</p>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <input
                class="@error('email') text-red-500 @enderror bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block m-auto mt-10 mb-5 appearance-none leading-normal w-3/4"
                type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" autofocus
                required>
            @error('email')
            <span class="text-red-500" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <button type="submit"
                class="block m-auto bg-transparent mt-5 hover:bg-green-300 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded">{{ __('Send Password Reset Link') }}</button>
        </form>
        <div class="mt-10">
            @if (Route::has('register'))
            <a class="block transition duration-200 hover:text-green-500" href="{{ route('register') }}">Register</a>
            @endif
        </div>
    </div>
</div>
@endsection
