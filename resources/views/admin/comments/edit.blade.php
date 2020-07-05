@extends('layouts.section')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endpush
@section('top')
<div id="section_topper" class="w-full">
    <div class="w-full bg-opacity-50 bg-black"></div>
</div>
@include('admin.menu')
@endsection

@section('content')
<div class="flex justify-center flex-wrap">
    <h2 class="w-full text-center">Editting comment {{$comment->id}}</h2>
    @if(session('message')) <script>
        alert("{{session('message')}}");

    </script> @endif
    <form action="{{ route('comment.update', $comment->id) }}" id="editNew" enctype="multipart/form-data"
        method="POST" class="w-11/12 max-w-6xl">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$comment->id}}">
        <input type="hidden" name="type" value=2>
        <div class="flex justify-center flex-wrap mx-0 mb-6">
            <div class="w-full">
                @if($comment->user->avatar == 1)
                <a href="{{route('admin.users.edit',$comment->user->id)}}">
                    <img class="m-auto rounded-full block mt-10"
                        src="{{Storage::url('avatars/'.$comment->user->id.'.jpg')}}"
                        alt="{{$comment->user->name}} Avatar">
                </a>
                @else
                <div onclick="window.location = '{{route('admin.users.edit',$comment->user->id)}}';"
                    class="cursor-pointer rounded-full text-white font-bold text-4xl mx-auto mt-10 flex items-center justify-center w-16 h-16 bg-{{ $colors[array_rand($colors)] }}-500">
                    {{substr($comment->user->name,0,1)}}</div>
                @endif
                <div class="text-center text-green-600 font-bold"><a
                        href="{{route('admin.users.edit',$comment->user->id)}}">{{$comment->user->name}}</a></div>
                <div class="text-center">{{$comment->created_at}}</div>
                <div class="text-center text-blue-500 font-bold italic mb-8"><a
                        href="{{route('place.edit',$comment->place->uuid)}}">{{$comment->place->name}}</a></div>
            </div>
            <div class="w-full ">
                <label class="block uppercase tracking-wide text-gray-700 text-center text-xs font-bold my-2"
                    for="comment">
                    Commentary
                </label>
                <textarea
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-32"
                    id="comment" name="comment" type="text">{{ old('comment',$comment->comment) }}</textarea>
                @error('comment')
                <div class="text-red-500 italic font-bold">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full text-center">
                <button type="submit" id="formSubmit"
                    class="m-auto block bg-transparent my-5 hover:bg-green-300 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded">
                    Save Changes
                </button>
            </div>
            @if(isset($comment->avatar) && $comment->avatar == 1)
            <div class="w-full">
                <div class="m-auto text-center">
                    <button type="button" id="deleteAvatar"
                        class="bg-transparent my-5 hover:bg-green-300 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded">
                        Delete Avatar
                    </button>
                </div>
            </div>
            @endif
        </div>
    </form>
</div>
@endsection
