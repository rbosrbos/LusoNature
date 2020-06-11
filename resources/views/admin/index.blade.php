@extends('layouts.app')


@section('top')
<div id="section_topper" class="w-full">
    <div class="w-full bg-opacity-50 bg-black"></div>
</div>
@endsection

@section('content')
<section id="sections" class="pt-16 relative bg-green-100">
    @component('components.who')
    @endcomponent
</section>
@endsection
