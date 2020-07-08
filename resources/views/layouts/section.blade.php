@extends('layouts.template.app')
@section('top')
<div id="section_topper" class="w-full relative h-full text-center text-white">
    <div class="w-full absolute h-full bg-opacity-50 bg-black"></div>
    <div class="h-full w-full absolute flex items-end justify-center">
    <h1 class="xl:w-3/5 lg:w-4/5 w-5/5 text-xl text-right mr-5 sm:text-4xl">@yield('title','User')</h1>
    {{-- <div class="xl:w-3/5 lg:w-4/5 w-5/5 z-20 flex justify-between items-center px-5 m-auto text-white relative"></div> --}}
    </div>
</div>
@endsection
@section('content')
@yield('content')
@endsection
@push('scripts')
@yield('scripts')
@endpush
