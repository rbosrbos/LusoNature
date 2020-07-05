@extends('layouts.section')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endpush
@section('scripts')
<script src="{{ asset('js/datatable.js') }}"></script>
<script>
    $('.aprove').click(function (e) {
        e.preventDefault();
        let answer = confirm('Do you really mean it? APROVE PLACE NR ' + e.target
            .dataset.id);
        if (answer === true) {

            $.ajax({
                type: 'POST',
                url: '/admin/places/' + e.target.dataset.id,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function (data) {
                    alert(data);
                    location.reload();
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }
    });
    $('.delete').click(function (e) {
        e.preventDefault();
        let answer = confirm('Do you really mean it? This action is irreversible: DELETE PLACE NR ' + e.target
            .dataset.id);
        if (answer === true) {

            $.ajax({
                type: 'POST',
                url: '/admin/places/' + e.target.dataset.id,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    _method: 'DELETE'
                },
                success: function (data) {
                    alert(data);
                    location.reload();
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }
    });

</script>
@endsection
@section('top')
<div id="section_topper" class="w-full">
    <div class="w-full bg-opacity-50 bg-black"></div>
</div>
@include('admin.menu')
@endsection

@section('content')
<input type="hidden" id="order" value=0></input>
<input type="hidden" id="way" value='asc'></input>
<section id="sections" class="py-16 relative bg-green-100">
    <h1 class="text-center">Places: @if($status === 0) New Submissions @else Permanent @endif Section</h1>
    <div class="w-11/12 mx-auto">
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <table id="datatable" class="dt-body-center stripe hover"
                style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">ID</th>
                        <th data-priority="2">Name</th>
                        <th data-priority="3">Description</th>
                        <th data-priority="4">By</th>
                        <th class="no-sort" data-priority="5"></th>
                        <th class="no-sort" data-priority="6"></th>
                        @if($status === 0) <th class="no-sort" data-priority="7"></th> @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($places as $place)
                    <tr>
                        <td class="dt-center">{{ $place->id ?? '' }}</td>
                        <td class="dt-center font-bold">{{ Str::limit($place->name,40) ?? '' }}</td>
                        <td class="dt-center">{{ Str::limit($place->description,150) ?? '' }}</td>
                        <td class="dt-center">{{ $place->user->name }}</td>
                        @if($status === 0) <td class="dt-center"><a data-id="{{$place->id}}" class="aprove text-blue-500 font-bold"
                                href="#">Aprove</a></td> @endif
                        <td class="dt-center"><a class="text-blue-500 font-bold"
                        href="{{route('place.edit',$place->uuid)}}">Edit/View</a></td>
                        <td class="dt-center"><a data-id="{{$place->id}}" class="delete text-blue-500 font-bold"
                                href="#">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
