@extends('layouts.template.app')
@section('top')
<div id="section_topper" class="w-full relative h-full text-center text-white">
    <div class="w-full absolute h-full bg-opacity-50 bg-black"></div>
    <div class="h-full w-full absolute flex items-end justify-center">
    <h1 class="w-10/12 sm:w-full text-2xl text-right sm:text-center sm:text-4xl">@yield('title')</h1>
    </div>
</div>
@endsection
@section('content')
@yield('content')
@endsection
@push('scripts')
@yield('scripts')
@endpush
