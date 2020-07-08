@extends('layouts.section')
@section('content')
<div class="flex w-full flex-wrap justify-center">

    <h1 class="w-full text-center">{{ __('Verify Your Email Address') }}</h1>

    <div class="card-body">

        @if (session('resent'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative w-11/12 m-auto" role="alert">
            <span
                class="block sm:inline">{{ __('A fresh verification link has been sent to your email address.') }}</span>
        
        </div>
        @endif
       <div class="text-center mt-10">
        {{ __('Before proceeding, please check your email for a verification link.') }}
        {{ __('If you did not receive the email') }}:<br>
        <form class="inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button class="bg-transparent mt-5 hover:bg-green-300 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded" type="submit">{{ __('click here to request another') }}</button>
        </form>
       </div>
    </div>
</div>
@endsection
