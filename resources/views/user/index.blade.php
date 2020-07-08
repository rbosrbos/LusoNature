@extends('layouts.user')
@section('title')
User Area
@endsection
@section('usercontent')
<div class="flex justify-center items-start flex-wrap">
    <h2 class="w-full mt-5 sm:mt-0 text-center">Joke of the day</h2>
    <joke></joke>
    <p class="w-full text-xs mb-20 text-center">Provided by <img width="20" class="m-auto" src="https://assets.chucknorris.host/img/avatar/chuck-norris.png" alt="ChuckNorrisAvatar"><a target="_blank" href="https://chucknorris.io">chucknorris.io</a></p>
    
    @component('components.user-button',[
    'title' => 'Add New Place',
    'icon' => 'add-circle-outline',
    'route' => route('place.create')
    ])
    @endcomponent
</div>
@endsection
