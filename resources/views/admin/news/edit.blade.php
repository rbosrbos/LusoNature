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
        document.getElementById('loader').classList.remove('hidden');
        setTimeout(() => {
            $.ajax({
                type: 'POST',
                url: "{{ route('news.update', $new->id) }}",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: new FormData(document.querySelector('#editNew')),
                success: function (data) {
                    pic.type = 'text';
                    pic.type = 'file';
                    var d = new Date();
                    $("#image").attr("src", "{{Storage::url('news/'.$new->uuid.'/'.$new->uuid.'-card.jpg')}}?" + d.getTime());
                    document.getElementById('loader').classList.add('hidden');
                },
                error: function (data) {
                    alert('Error uploading the image');
                },
                cache: false,
                contentType: false,
                processData: false
            });
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
    <h2 class="w-full text-center">Editting new nr {{$new->id}}</h2>
    @if(session('message')) <script>alert("{{session('message')}}");</script> @endif
    <form action="{{ route('news.update', $new->id) }}" id="editNew" enctype="multipart/form-data" method="POST"
        class="w-11/12 max-w-6xl">
        @csrf
        @method('PUT')
        <div class="flex flex-wrap mx-0 mb-6">
            <div class="w-full ">

                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                    Title
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="title" type="text" name="title" placeholder="Parque Natural da Ribeira dos Caldeirões"
                    value="{{ old('title',$new->title)}}">
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
                    placeholder="Ribeira dos Caldeirões Natural Park is an Azorean protected area, located along part of the Ribeira dos Caldeirões watercourse, in the parish of Achada, municipality of Nordeste, on the island of São Miguel. This natural park is located on the slopes of Serra da Tronqueira and occupies part of the Ribeira do Guilherme course, where the Ribeira do Guilherme Botanical Garden is also located.">{{ old('summary',$new->summary) }}</textarea>
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
                    id="body" style="height: 500px;" name="body" type="text"
                    placeholder="Ribeira dos Caldeirões Natural Park is an Azorean protected area, located along part of the Ribeira dos Caldeirões watercourse, in the parish of Achada, municipality of Nordeste, on the island of São Miguel. This natural park is located on the slopes of Serra da Tronqueira and occupies part of the Ribeira do Guilherme course, where the Ribeira do Guilherme Botanical Garden is also located.">{{ old('body',$new->body) }}</textarea>
                @error('body')
                <div class="text-red-500 italic font-bold">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" id="formSubmit"
                class="m-auto block bg-transparent my-5 hover:bg-green-300 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded">
                Save Changes
            </button>
            @if(Storage::exists('news/'.$new->uuid.'/'.$new->uuid.'-card.jpg'))
            <div class="w-full flex flex-wrap justify-center text-center">
                <h3 class="text-center w-full mt-10">Current picture: (click to change)</h3>
                <input type="file" class="hidden" name="picture" accept="image/*" id="picture">
                <label class="cursor-pointer" for="picture">
                    <img id="image" src="{{Storage::url('news/'.$new->uuid.'/'.$new->uuid.'-card.jpg')}}">
                </label>
            </div>
@endif
</div>

</form>

</div>
@endsection
