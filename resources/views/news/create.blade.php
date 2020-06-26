@extends('layouts.user')
@section('title')
Add New Place
@endsection
@section('usercontent')
<div class="flex justify-center">
    <form action="{{ route('news.store') }}" method="POST" class="w-11/12 max-w-6xl">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            {{-- <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Name
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name" type="text" placeholder="Jane">
                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
            </div> --}}
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Name
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-last-name" type="text" name="name" placeholder="Parque Natural da Ribeira dos Caldeirões">
                @error('name')
                <div class="text-red-500 italic font-bold">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-2" for="grid-last-name">
                    Description
                </label>
                <textarea
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-24"
                    id="grid-last-name" name="description" type="text"
                    placeholder="Ribeira dos Caldeirões Natural Park is an Azorean protected area, located along part of the Ribeira dos Caldeirões watercourse, in the parish of Achada, municipality of Nordeste, on the island of São Miguel. This natural park is located on the slopes of Serra da Tronqueira and occupies part of the Ribeira do Guilherme course, where the Ribeira do Guilherme Botanical Garden is also located."></textarea>
                    @error('description')
                <div class="text-red-500 italic font-bold">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full px-3">
                <h3 class="text-center mt-10">GPS Coordinates</h3>
                <div class="flex flex-wrap justify-center -mx-3 mb-6">
                    <div class="w-full md:w-1/4 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name">
                            Latitude
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-last-name" name="latitude" type="text" placeholder="Doe">
                    </div>
                    <div class="w-full md:w-1/4 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name">
                            Longitude
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-last-name" name="longitude" type="text" placeholder="Doe">
                    </div>
                </div>
            </div>
            <div class="w-full px-3">
                <h3 class="text-left sm:text-center mt-10">Facilities</h3>
                <div class="flex justify-center flex-col sm:flex-row">
                    <label class="custom-label flex my-5 mr-5 md:mr-10">
                        <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                            <input type="checkbox" name="facilities[]" value="parking" class="hidden">
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
                            <input type="checkbox" name="facilities[]" value="wc" class="hidden">
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
                            <input type="checkbox" name="facilities[]" value="restaurants" class="hidden">
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
            class="m-auto block bg-transparent my-5 hover:bg-green-300 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded">
            Submit
        </button>
    </form>
</div>
@endsection
