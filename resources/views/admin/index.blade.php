@extends('layouts.section')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endpush

@section('top')
<div id="section_topper" class="w-full">
    <div class="w-full bg-opacity-50 bg-black"></div>
</div>
@include('admin.menu')
@endsection

@section('content')
<section id="sections" class="py-16 relative bg-green-100">
    <h1 class="text-center">WELCOME ADMIN!</h1>
    <p class="text-center">Use the above menu and do what you do best ;)</p>
</section>
@endsection
