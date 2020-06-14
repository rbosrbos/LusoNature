@extends('layouts.user')
@section('title')
User Area
@endsection
@section('usercontent')
<div class="flex justify-center items-start pt-10">
    @component('components.user-button',[
    'title' => 'Add New Place',
    'icon' => 'add-circle-outline',
    'route' => route('place.create')
    ])
    @endcomponent
</div>
@endsection
