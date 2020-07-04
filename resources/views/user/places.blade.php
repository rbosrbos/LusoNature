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
<input type="hidden" id="order" value=0></input>
<div class="w-11/12 xl:w-9/12 mx-auto">
    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
        <table id="datatable" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th data-priority="1">Date</th>
                    <th data-priority="2">Name</th>
                    <th data-priority="3">Parking</th>
                    <th data-priority="4">WC</th>
                    <th data-priority="5">Restaurants</th>
                    <th data-priority="6">Latitude</th>
                    <th data-priority="7">Longitude</th>
                    <th data-priority="8">Status</th>
                    <th class="no-sort" data-priority="9">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($places as $place)
                <tr>
                    <td class="dt-center">{{ $place->created_at ?? '' }}</td>
                    <td class="dt-center">{{ $place->name ?? '' }}</td>
                    <td class="dt-center">@if($place->parking) Yes @else No @endif</td>
                    <td class="dt-center">@if($place->wc) Yes @else No @endif</td>
                    <td class="dt-center">@if($place->restaurants) Yes @else No @endif</td>
                    <td class="dt-center">{{ $place->latitude ?? '' }}</td>
                    <td class="dt-center">{{ $place->longitude ?? '' }}</td>
                    <td class="dt-center">@if($place->status) Published @else Awaiting @endif</td>
                    <td class="dt-center"><a class="text-blue-500 font-bold" href="{{ route('place.edit',$place->uuid) }}">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
