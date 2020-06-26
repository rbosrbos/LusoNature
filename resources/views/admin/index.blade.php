@extends('layouts.section')


@section('top')
<div id="section_topper" class="w-full">
    <div class="w-full bg-opacity-50 bg-black"></div>
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
