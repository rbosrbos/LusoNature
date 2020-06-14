@extends('layouts.section')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endpush
@section('title')
Where do you wish to go today?
@endsection
@section('scripts')
<script src="{{ asset('js/user.js') }}"></script>
<script src="{{ asset('js/datatable.js') }}"></script>
@endsection
@section('content')
<div class="flex flex-wrap justify-center">
    @foreach ($places as $place)
    <place-card :place='@json($place)'></place-card>
    @endforeach
</div>
<div class="w-full bg-black bg-opacity-50 fixed bottom-0 pb-6 pt-1 lg:static lg:pb-0 lg:pt-0 lg:bg-transparent">
    <div class="w-10/12 m-auto">
        {{$places->links()}}
    </div>
</div>
{{-- @foreach ($place as $place)
<div>
    <div>{{ $place->name ?? '' }}</div>
<div>{{ $place->description ?? '' }}</div>
<div>@if($place->parking) Yes @else No @endif</div>
<div>@if($place->wc) Yes @else No @endif</div>
<div>@if($place->restaurants) Yes @else No @endif</div>
<div>{{ $place->latitude ?? '' }}</div>
<div>{{ $place->longitude ?? '' }}</div>
<div>@if($place->status) Published @else Awaiting @endif</div>
</div>
@endforeach --}}
@endsection
