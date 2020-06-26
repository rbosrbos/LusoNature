@extends('layouts.section')

@push('styles')
<link href="{{ asset('css/news.css') }}" rel="stylesheet">
@endpush
@section('title')
Contact
@endsection
@section('content')
<section class="flex flex-wrap h-screen-55">
    <div class="w-full ml-5 my-5">
        <a class="mr-3 text-green-500" href="{{ route('mainpage') }}">Home</a>/<span class="mx-3">Contact</span>
    </div>
    <div class="w-full flex flex-wrap">
        @if($status === 1)
        <h2 class="w-full text-center">Thank you for contacting us. We'll get back to you asap!</h2>
        @else
        <h2 class="w-full text-center">An error occurred. Please try again later.</h2>
        @endif
    </div>
</section>
@endsection
