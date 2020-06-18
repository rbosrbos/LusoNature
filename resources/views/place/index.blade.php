@extends('layouts.user')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endpush
@section('title')
Your contributed places
@endsection
@section('scripts')
<script src="{{ asset('js/datatable.js') }}"></script>
@endsection
@section('usercontent')
<div class="w-11/12 mx-auto">
    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
        <table id="datatable" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th data-priority="1">Name</th>
                    <th data-priority="2">Description</th>
                    <th data-priority="3">Parking</th>
                    <th data-priority="4">WC</th>
                    <th data-priority="5">Restaurants</th>
                    <th data-priority="6">Latitude</th>
                    <th data-priority="7">Longitude</th>
                    <th data-priority="8">Status</th>
                    <th data-priority="9">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($places as $place)
                <tr>
                    <td>{{ $place->name ?? '' }}</td>
                    <td>{{ $place->description ?? '' }}</td>
                    <td>@if($place->parking) Yes @else No @endif</td>
                    <td>@if($place->wc) Yes @else No @endif</td>
                    <td>@if($place->restaurants) Yes @else No @endif</td>
                    <td>{{ $place->latitude ?? '' }}</td>
                    <td>{{ $place->longitude ?? '' }}</td>
                    <td>@if($place->status) Published @else Awaiting @endif</td>
                    <td><a class="text-blue-500 font-bold" href="{{ route('place.edit',['place'=>$place]) }}">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
