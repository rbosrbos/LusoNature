@extends('layouts.section')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endpush
@section('title')
Where do you wish to go today?
@endsection
@section('scripts')
{{-- <script src="{{ asset('js/user.js') }}"></script> --}}
<script src="{{ asset('js/datatable.js') }}"></script>
@endsection
@section('content')
<filters :categories='@json($categories)' :cities='@json($cities)'></filters>
<div class="flex flex-wrap justify-center">
    @foreach ($places as $place)
    <place-card :place='@json($place)'></place-card>
    @endforeach
</div>
<div class="w-full bg-black bg-opacity-50 fixed bottom-0 pb-6 pt-1 lg:static lg:pb-0 lg:pt-0 lg:bg-transparent">
    <div class="w-10/12 mx-auto my-10">
        {{$places->links()}}
    </div>
</div>
@endsection
