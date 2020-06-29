@extends('layouts.user')
@section('title')
User Area
@endsection
@section('usercontent')
<div class="flex justify-center items-start flex-wrap">
    <h2 class="w-full text-center">Joke of the day</h2>
    <p class="w-full text-xs mb-5 text-center">Provided by <img width="20" class="m-auto" src="https://assets.chucknorris.host/img/avatar/chuck-norris.png" alt="ChuckNorrisAvatar"><a target="_blank" href="https://chucknorris.io">chucknorris.io</a></p>
    <joke></joke>
    @component('components.user-button',[
    'title' => 'Add New Place',
    'icon' => 'add-circle-outline',
    'route' => route('place.create')
    ])
    @endcomponent
</div>
@endsection
