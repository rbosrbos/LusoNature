@extends('layouts.section')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endpush

@section('top')
<div id="section_topper" class="w-full">
    <div class="w-full bg-opacity-50 bg-black"></div>
</div>
<div class="flex m-0 flex-wrap justify-center">
    <div
        class="admin-menu relative z-10 bg-green-700 px-12 hover:bg-green-500 shadow-inner transition duration-100 py-2 text-white rounded-bl-lg">
        News
        <div class="admin-submenu absolute left-0 w-full flex items-center overflow-hidden flex-col">
            <a href="#"
                class="text-white text-green-400 hover:text-white hover:bg-green-500 w-full text-center py-1 block">Add/Edit</a>
            <a href="#"
                class="text-white text-green-400 hover:text-white hover:bg-green-500 w-full text-center py-1 block">Delete</a>
        </div>
    </div>
    <div
        class="admin-menu relative z-10 bg-green-700 px-12 hover:bg-green-500 shadow-inner transition duration-100 py-2 text-white">
        Places
        <div class="admin-submenu absolute left-0 w-full flex items-center overflow-hidden flex-col">
            <a href="#"
                class="text-white text-green-400 hover:text-white hover:bg-green-500 w-full text-center py-1 block">Add/Edit</a>
            <a href="#"
                class="text-white text-green-400 hover:text-white hover:bg-green-500 w-full text-center py-1 block">Delete</a>
        </div>
    </div>
    <div
        class="admin-menu relative z-10 bg-green-700 px-12 hover:bg-green-500 shadow-inner transition duration-100 py-2 text-white">
        Users
        <div class="admin-submenu absolute left-0 w-full flex items-center overflow-hidden flex-col">
            <a href="#"
            class="text-white text-green-400 hover:text-white hover:bg-green-500 w-full text-center py-1 block">Edit</a>
        </div>
    </div>
    <div
        class="admin-menu relative z-10 bg-green-700 px-12 hover:bg-green-500 shadow-inner transition duration-100 py-2 text-white">
        Comments
        <div class="admin-submenu absolute left-0 w-full flex items-center overflow-hidden flex-col">
            <a href="#" class="text-white text-green-400 hover:text-white hover:bg-green-500 w-full text-center py-1 block">Approve/Edit</a>
        </div>
    </div>
    <div
        class="admin-menu relative z-10 bg-green-700 px-12 hover:bg-green-500 shadow-inner transition duration-100 py-2 text-white">
        Ratings
        <div class="admin-submenu absolute left-0 w-full flex items-center overflow-hidden flex-col">
            <a href="#" class="text-white text-green-400 hover:text-white hover:bg-green-500 w-full text-center py-1 block">Modify</a>
        </div>
    </div>
    <div
        class="admin-menu relative z-10 bg-green-700 px-12 hover:bg-green-500 shadow-inner transition duration-100 py-2 text-white rounded-br-lg">
            <form id="logout" action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <a onclick="$('#logout').submit();">Logout</a>
            </form>
    </div>
</div>
@endsection

@section('content')
<section id="sections" class="pt-16 relative bg-green-100">
    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button type="submit"
            class="block m-auto bg-transparent mt-5 hover:bg-green-300 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded">Logout</button>
    </form>
</section>
@endsection
