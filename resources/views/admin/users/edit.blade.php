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
                url: "{{ route('admin.users.update', $user->id) }}",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: new FormData(document.querySelector('#editNew')),
                success: function (data) {
                    pic.type = 'text';
                    pic.type = 'file';
                    var d = user Date();
                    $("#image").attr("src",
                        "{{Storage::url('users/'.$user->uuid.'/'.$user->uuid.'-card.jpg')}}?" +
                        d.getTime());
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
    <h2 class="w-full text-center">Editting user</h2>
    @if(session('message')) <script>
        alert("{{session('message')}}");

    </script> @endif
    <form action="{{ route('admin.users.update', $user->id) }}" id="editNew" enctype="multipart/form-data" method="POST"
        class="w-11/12 max-w-6xl">
        @csrf
        @method('PUT')
        <div class="flex justify-center flex-wrap mx-0 mb-6">
            <div class="w-full">
            <img class="m-auto rounded-full my-10" src="{{Storage::url('avatars/'.$user->id.'.jpg')}}" alt="">
            </div>
            <div class="w-1/2 sm:w-1/4 px-5">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    Name
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="name" type="text" name="name" placeholder="Parque Natural da Ribeira dos Caldeirões"
                    value="{{ old('name',$user->name)}}">
                @error('title')
                <div class="text-red-500 italic font-bold">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-1/2 sm:w-1/4 px-5">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="email" type="text" name="email" placeholder="Parque Natural da Ribeira dos Caldeirões"
                    value="{{ old('email',$user->email)}}">
                @error('title')
                <div class="text-red-500 italic font-bold">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full text-center">
                <button type="submit" id="formSubmit"
                class="m-auto block bg-transparent my-5 hover:bg-green-300 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded">
                Save Changes
            </button>
            </div>
            <div class="w-full">
                <div class="m-auto text-center">
                    <button type="button" id="changePassword"
                        class="bg-transparent my-5 hover:bg-green-300 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded">
                        Change Password
                    </button>
                    <button type="button" id="changeAvatar"
                        class="bg-transparent my-5 hover:bg-green-300 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded">
                        Change Avatar
                    </button>
                </div>
            </div>
           
            @if(Storage::exists('users/'.$user->uuid.'/'.$user->uuid.'-card.jpg'))
            <div class="w-full flex flex-wrap justify-center text-center">
                <h3 class="text-center w-full mt-10">Current picture: (click to change)</h3>
                <input type="file" class="hidden" name="picture" accept="image/*" id="picture">
                <label class="cursor-pointer" for="picture">
                    <img id="image" src="{{Storage::url('users/'.$user->uuid.'/'.$user->uuid.'-card.jpg')}}">
                </label>
            </div>
            @endif
        </div>

    </form>

</div>
@endsection
