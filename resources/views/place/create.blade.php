@extends('layouts.user')
@section('title')
Add New Place
@endsection
@section('scripts')
<script src="{{ asset('js/user.js') }}"></script>
@endsection
@section('usercontent')
<div class="flex justify-center">
    <form action="{{ route('place.store') }}" enctype="multipart/form-data" method="POST" class="w-11/12 max-w-6xl">
        @csrf
        <div class="flex flex-wrap mx-0 mb-6">
            <div class="w-full ">
                @if(session('status'))
                <div class="text-center mb-2 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative alert transition duration-500"
                    role="alert">
                    <span class="block sm:inline">Thank you for helping us grow. Your submission will be avaliated
                        by an administrator before appears in our website.</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <ion-icon name="close-outline"></ion-icon>
                    </span>
                </div>
                @endif
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    Name
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="name" type="text" name="name" placeholder="Parque Natural da Ribeira dos Caldeirões"
                    value="{{ old('name') ?? ''}}">
                @error('name')
                <div class="text-red-500 italic font-bold">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full ">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-2" for="description">
                    Description
                </label>
                <textarea
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-24"
                    id="description" name="description" type="text"
                    placeholder="Ribeira dos Caldeirões Natural Park is an Azorean protected area, located along part of the Ribeira dos Caldeirões watercourse, in the parish of Achada, municipality of Nordeste, on the island of São Miguel. This natural park is located on the slopes of Serra da Tronqueira and occupies part of the Ribeira do Guilherme course, where the Ribeira do Guilherme Botanical Garden is also located.">{{ old('description') }}</textarea>
                @error('description')
                <div class="text-red-500 italic font-bold">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full ">
                <h3 class="text-center mt-10">GPS Coordinates</h3>
                <div class="flex flex-wrap justify-center mb-6">
                    <div class="w-full md:w-1/4 sm:mr-5">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 sm:text-center"
                            for="latitude">
                            Latitude
                        </label>
                        <input
                            class="sm:text-center appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="latitude" name="latitude" type="text" placeholder="38.728467"
                            value="{{ old('latitude') }}">
                    </div>
                    <div class="w-full md:w-1/4">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 sm:text-center"
                            for="longitude">
                            Longitude
                        </label>
                        <input
                            class="sm:text-center appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="longitude" name="longitude" type="text" placeholder="-9.152565"
                            value="{{ old('longitude') }}">
                    </div>
                </div>
            </div>
            <div class="w-full text-center ">
                <h3 class="text-center mt-10">Give us some nice pictures!</h3>
                <input type="file" class="hidden" name="pictures[]" accept="image/*" multiple id="pictures">
                <label
                    class="m-auto cursor-pointer w-40 block bg-transparent my-5 hover:bg-orange-300 text-orange-500 font-semibold hover:text-white py-2 px-4 border border-orange-300 hover:border-transparent rounded"
                    for="pictures">
                    <span id="file_value">Go get'em!</span>
                </label>
                @error('pictures')
                <div class="text-red-500 italic font-bold">{{ $message }}</div>
                @enderror
                @error('pictures.*')
                <div class="text-red-500 italic font-bold">{{ $message }}</div>
                @enderror
                <p id="list_label" class="hidden">Selected pictures:</p>
                <ul class="list-disc whitespace-no-wrap inline-block text-gray-700 italic m-auto text-left"
                    id="file_list">
                </ul>
            </div>
            <div class="w-full ">
                <h3 class="text-left sm:text-center mt-10">Facilities</h3>
                <div class="flex justify-center flex-col sm:flex-row">
                    <label class="custom-label flex my-5 mr-5 md:mr-10">
                        <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                            <input type="checkbox" name="parking" value="1" class="hidden"
                                @if(intval(old('parking'))===1) checked @endif>
                            <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172">
                                <g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none"
                                    font-weight="none" font-size="none" text-anchor="none"
                                    style="mix-blend-mode:normal">
                                    <path d="M0 172V0h172v172z" />
                                    <path
                                        d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                                        fill="currentColor" stroke-width="1" />
                                </g>
                            </svg>
                        </div>
                        <span class="select-none">Parking</span>
                    </label>
                    <label class="custom-label flex my-5 mr-5 md:mr-10">
                        <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                            <input type="checkbox" name="wc" value="1" class="hidden" @if(intval(old('wc'))===1) checked
                                @endif>
                            <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172">
                                <g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none"
                                    font-weight="none" font-size="none" text-anchor="none"
                                    style="mix-blend-mode:normal">
                                    <path d="M0 172V0h172v172z" />
                                    <path
                                        d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                                        fill="currentColor" stroke-width="1" />
                                </g>
                            </svg>
                        </div>
                        <span class="select-none">WC</span>
                    </label>
                    <label class="custom-label flex my-5">
                        <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                            <input type="checkbox" name="restaurants" value="1" class="hidden"
                                @if(intval(old('restaurants'))===1) checked @endif>
                            <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172">
                                <g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none"
                                    font-weight="none" font-size="none" text-anchor="none"
                                    style="mix-blend-mode:normal">
                                    <path d="M0 172V0h172v172z" />
                                    <path
                                        d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                                        fill="currentColor" stroke-width="1" />
                                </g>
                            </svg>
                        </div>
                        <span class="select-none">Restaurants</span>
                    </label>
                </div>

            </div>
        </div>
        <p class="text-center text-gray-600 text-xs italic">
            All submitted place requires admin approval before they're available to other users
        </p>
        <button
            class="m-auto block bg-transparent my-5 hover:bg-orange-300 text-orange-500 font-semibold hover:text-white py-2 px-4 border border-orange-300 hover:border-transparent rounded">
            Submit
        </button>
    </form>
</div>
@endsection
