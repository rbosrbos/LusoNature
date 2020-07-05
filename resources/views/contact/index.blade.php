@extends('layouts.section')

@push('styles')
<link href="{{ asset('css/news.css') }}" rel="stylesheet">
@endpush
@section('title')
Contact
@endsection
@section('content')
<section class="flex flex-wrap h-screen-55">
    <div class="w-full ml-5 my-5">
        <a class="mr-3 text-green-500" href="{{ route('mainpage') }}">Home</a>/<span class="mx-3">Contact</span>
    </div>
    <div class="w-full sm:w-2/3 p-5 sm:p-0 flex flex-wrap mx-auto">
        <form action="{{ route('contact.create') }}" enctype="multipart/form-data" method="POST"
            class="w-full">
            @csrf
            <div class="flex flex-wrap mx-0 mb-6">
                <div class="w-full ">
                    @if(session('status'))
                    <div class="text-center mb-2 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative alert transition duration-500"
                        role="alert">
                        <span class="block sm:inline">Thank you for helping us grow. We'll read your messager as soon as
                            possible and get back to you!</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <ion-icon name="close-outline"></ion-icon>
                        </span>
                    </div>
                    @endif
                    <div class="flex flex-wrap w-full">
                        <div class="w-1/2 pr-5">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="name">
                                Name
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="name" type="text" name="name" placeholder="Your name">
                            @error('name')
                            <div class="text-red-500 italic font-bold">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="w-1/2 pl-5">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="name">
                                Email
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="email" type="text" name="email" placeholder="email@example.com">
                            @error('email')
                            <div class="text-red-500 italic font-bold">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="w-full mt-10">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-2" for="description">
                        Message
                    </label>
                    <textarea
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-24"
                        id="message" name="contact_message" type="text"
                        placeholder="Please write your message"></textarea>
                    @error('message')
                    <div class="text-red-500 italic font-bold">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" id="formSubmit"
                class="m-auto block bg-transparent my-5 hover:bg-green-300 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded">
                Submit
            </button>
        </form>
    </div>
</section>
@endsection
