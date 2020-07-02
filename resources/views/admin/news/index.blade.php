@extends('layouts.section')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endpush
@section('scripts')
<script src="{{ asset('js/datatable.js') }}"></script>
@endsection
@section('top')
<div id="section_topper" class="w-full">
    <div class="w-full bg-opacity-50 bg-black"></div>
</div>
@include('admin.menu')
@endsection

@section('content')
<section id="sections" class="py-16 relative bg-green-100">
    <h1 class="text-center">News Section</h1>
    <div class="w-11/12 mx-auto">
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <table id="datatable" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">ID</th>
                        <th data-priority="3">By</th>
                        <th data-priority="4">Title</th>
                        <th data-priority="5">Summary</th>
                        <th data-priority="9">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $new)
                    <tr>
                        <td>{{ $new->id ?? '' }}</td>
                        <td><a class="text-blue-500 font-bold" href="">{{ $new->user->name ?? '' }}</a></td>
                        <td class="font-bold">{{ $new->title ?? '' }}</td>
                        <td>{{ $new->summary ?? '' }}</td>
                        <td><a class="text-blue-500 font-bold"
                                href="{{ route('place.edit',['place'=>$new]) }}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
