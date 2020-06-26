@extends('layouts.app')
@section('top')
<div id="section_topper" class="w-full">
    <div class="w-full bg-opacity-50 bg-black"></div>
</div>
@endsection
@section('content')
<div class="text-green-400 md:w-1/2 xl:w-1/4 m-auto mb-10 text-center mt-5">
    <div class="text-center text-gray-700">
        <p class="text-2xl">Admin {{ __('Reset Password') }}</p>
        <p>Fill the following form</p>
        <form method="POST" action="{{ route('admin.password.request') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
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
                class="block m-auto bg-transparent mt-5 hover:bg-green-300 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded">{{ __('Reset Password') }}</button>
        </form>
    </div>
</div>
@endsection
