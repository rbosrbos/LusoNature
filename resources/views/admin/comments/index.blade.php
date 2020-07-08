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
            $.ajax({
                type: 'POST',
                url: '/comment/' + e.target.dataset.id,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    _method: 'PUT',
                    type: 1
                },
                success: function (data) {
                    alert(data);
                    location.reload();
                },
                error: function (data) {
                    console.log(data);
                }
            });
    });
    $('.delete').click(function (e) {
        e.preventDefault();
        let answer = confirm('Do you really mean it? This action is irreversible: DELETE USER ' + e.target
            .dataset.email);
        if (answer === true) {

            $.ajax({
                type: 'POST',
                url: '/comment/' + e.target.dataset.id,
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
<input type="hidden" id="order" value=0>
<input type="hidden" id="way" value='desc'>
<section id="sections" class="py-16 relative bg-green-100">
    <h1 class="text-center">Comments list</h1>
    <div class="w-11/12 mx-auto">
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white m-auto w-full xl:w-8/12">
            <table id="datatable" class="dt-body-center stripe hover"
                style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">ID</th>
                        <th data-priority="2">User</th>
                        <th data-priority="3">Place</th>
                        <th data-priority="4">Status</th>
                        <th class="no-sort" data-priority="5"></th>
                        <th class="no-sort" data-priority="6"></th>
                        <th class="no-sort" data-priority="7"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)
                    <tr>
                        <td class="dt-center">{{ $comment->id ?? '' }}</td>
                    <td class="dt-center"><a class="text-blue-500 font-bold" target="_blank" href="{{route('admin.users.edit',$comment->user->id)}}">{{ $comment->user->name }}</a></td>
                    <td class="dt-center"><a class="text-green-500 font-bold" target="_blank" href="{{route('place.show',$comment->place->uuid)}}">{{ $comment->place->name }}</a></td>
                        <td class="dt-center">@if($comment->status == 0) <span class="text-red-500 font-bold">PENDING</span> @else <span class="text-green-500 font-bold">APROVED</span> @endif</td>
                        <td class="dt-center">
                            @if($comment->status == 0)
                            <a data-id="{{$comment->id}}" class="aprove text-blue-500 font-bold"
                        href="#">Aprove</a>
                            @endif
                        </td>
                        <td class="dt-center"><a class="text-blue-500 font-bold"
                        href="{{route('comment.edit',$comment->id)}}">Edit/View</a></td>
                        <td class="dt-center"><a data-email="{{$comment->email}}" data-id="{{$comment->id}}" class="delete text-blue-500 font-bold"
                                href="#">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
