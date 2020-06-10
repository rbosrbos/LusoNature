@extends('layouts.app')
@section('top')
<div id="section_topper" class="w-full">
    <div class="w-full bg-opacity-50 bg-black"></div>
</div>
@endsection
@section('content')
<div class="text-orange-400 md:w-1/2 xl:w-1/4 m-auto mb-10">
    <svg class="block m-auto mt-10 fill-current" xmlns='http://www.w3.org/2000/svg' width='100' height='100'
        viewBox='0 0 512 512'>
        <path
            d='M258.9,48C141.92,46.42,46.42,141.92,48,258.9,49.56,371.09,140.91,462.44,253.1,464c117,1.6,212.48-93.9,210.88-210.88C462.44,140.91,371.09,49.56,258.9,48ZM385.32,375.25a4,4,0,0,1-6.14-.32,124.27,124.27,0,0,0-32.35-29.59C321.37,329,289.11,320,256,320s-65.37,9-90.83,25.34a124.24,124.24,0,0,0-32.35,29.58,4,4,0,0,1-6.14.32A175.32,175.32,0,0,1,80,259C78.37,161.69,158.22,80.24,255.57,80S432,158.81,432,256A175.32,175.32,0,0,1,385.32,375.25Z' />
        <path
            d='M256,144c-19.72,0-37.55,7.39-50.22,20.82s-19,32-17.57,51.93C191.11,256,221.52,288,256,288s64.83-32,67.79-71.24c1.48-19.74-4.8-38.14-17.68-51.82C293.39,151.44,275.59,144,256,144Z' />
    </svg>
    <div class="text-center text-gray-700">
        <p class="text-2xl">{{ __('Login') }}</p>
        <p>Enter your credentials below</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input
                class="@error('email') text-red-500 @enderror bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block m-auto mt-10 mb-5 appearance-none leading-normal w-3/4"
                type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" autofocus
                required>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input
                class="@error('password') text-red-500 @enderror bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block m-auto my-5 appearance-none leading-normal w-3/4"
                type="password" placeholder="{{ __('Password') }}" name="password" required
                value="{{ old('password') }}">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
            <button type="submit"
                class="block m-auto bg-transparent mt-5 hover:bg-orange-300 text-orange-500 font-semibold hover:text-white py-2 px-4 border border-orange-300 hover:border-transparent rounded">Login</button>
        </form>
        <div class="mt-10">
            @if (Route::has('password.request'))
            <a class="block transition duration-200 hover:text-orange-500" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
            @if (Route::has('register'))
            <a class="block transition duration-200 hover:text-orange-500" href="{{ route('register') }}">Register</a>
            @endif
        </div>
    </div>
</div>
@endsection
