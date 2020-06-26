@extends('layouts.section')
@section('content')
<div class="text-green-400 md:w-1/2 xl:w-1/4 m-auto mb-10 text-center mt-5">
    <ion-icon style="font-size: 8em;" name="person-add-outline"></ion-icon>
    <div class="text-center text-gray-700">
        <p class="text-2xl">{{ __('Register') }}</p>
        <p>Fill the following form</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input id="name" type="text" class="@error('name') text-red-500 @enderror bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block m-auto mt-10 mb-5 appearance-none leading-normal w-3/4" name="name"
                value="{{ old('name') }}" placeholder="{{ __('Name') }}" required autocomplete="name" autofocus>
            @error('name')
            <span class="text-red-500" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input
                class="@error('email') text-red-500 @enderror bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block m-auto mb-5 appearance-none leading-normal w-3/4"
                type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" autofocus
                required autocomplete="email">
            @error('email')
            <span class="text-red-500" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    
            <input
                class="@error('password') text-red-500 @enderror bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block m-auto my-5 appearance-none leading-normal w-3/4"
                type="password" placeholder="{{ __('Password') }}" name="password" required
                autocomplete="new-password">
            @error('password')
            <span class="text-red-500" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="password-confirm" type="password" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block m-auto my-5 appearance-none leading-normal w-3/4" name="password_confirmation" required
                autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">

            <button type="submit"
                class="block m-auto bg-transparent mt-5 hover:bg-green-300 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded">{{ __('Register') }}</button>
        </form>
    </div>
</div>
@endsection
