@extends('layouts.section')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endpush
@section('scripts')
<script src="{{ asset('js/datatable.js') }}"></script>
<script>
    const pic = document.getElementById('picture');
    if (pic) {
        pic.onclick = outside
    }

    function outside() {
        document.body.onfocus = inside
    }

    function inside() {
        document.body.onfocus = null;
        setTimeout(() => {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
            }
            if (pic.files[0] != null) {
              $('#preview').addClass('h-64');
              $('#previewlabel').removeClass('hidden');
              reader.readAsDataURL(pic.files[0]);
            } else {
              if (!$('#previewlabel').hasClass('hidden')) {
                $('#previewlabel').addClass('hidden');
              }
              $('#preview').attr('src', '');
              $('#preview').removeClass('h-64');
            }
        }, 100);
    }

</script>
@endsection
@section('top')
<div id="section_topper" class="w-full">
    <div class="w-full bg-opacity-50 bg-black"></div>
</div>
@include('admin.menu')
@endsection

@section('content')
<div class="flex justify-center flex-wrap">
    <h2 class="w-full text-center">Create New</h2>
    @if(session('message')) <script>
        alert("{{session('message')}}");

    </script> @endif
    <form action="{{ route('news.store') }}" id="createNew" enctype="multipart/form-data" method="POST"
        class="w-11/12 max-w-6xl">
        @csrf
        <div class="flex flex-wrap mx-0 mb-6">
            <div class="w-full ">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                    Title
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="title" type="text" name="title" placeholder="An awesome new!" value="{{ old('title')}}">
                @error('title')
                <div class="text-red-500 italic font-bold">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full ">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-2" for="summary">
                    Summary
                </label>
                <textarea
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-24"
                    id="summary" name="summary" type="text"
                    placeholder="Brief description of new content">{{ old('summary') }}</textarea>
                @error('summary')
                <div class="text-red-500 italic font-bold">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full ">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-2" for="body">
                    Body (HTML)
                </label>
                <textarea
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="body" style="height: 500px;" name="body" type="text" placeholder="">{{ old('body') }}</textarea>
                @error('body')
                <div class="text-red-500 italic font-bold">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full text-center">
                <h3 class="text-center mt-10">Get a nice picture</h3>
                <input type="file" class="hidden" name="picture" accept="image/*" id="picture">
                <label
                    class="m-auto cursor-pointer w-40 block bg-transparent my-5 hover:bg-green-300 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded"
                    for="picture">
                    <span id="file_value">Go get it!</span>
                </label>
                <p class="hidden" id="previewlabel">Selected image for upload:</p>
                <img id="preview" class="m-auto" src="">
                @error('picture')
                <div class="text-red-500 italic font-bold">{{ $message }}
                </div>
                @enderror
                <p id="list_label" class="hidden">Selected pictures:</p>
                <ul class="list-disc whitespace-no-wrap inline-block text-gray-700 italic m-auto text-left"
                    id="file_list">
                </ul>
            </div>
            <button type="submit" id="formSubmit"
                class="m-auto block bg-transparent my-5 hover:bg-green-300 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded">
                Save Changes
            </button>
        </div>

    </form>

</div>
@endsection
