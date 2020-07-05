@extends('layouts.section')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endpush
@section('scripts')
<script src="{{ asset('js/datatable.js') }}"></script>
<script>
    $('.delete').click(function (e) {
        e.preventDefault();
        let answer = confirm('Do you really mean it? This action is irreversible: DELETE USER ' + e.target
            .dataset.email);
        if (answer === true) {

            $.ajax({
                type: 'POST',
                url: '/admin/users/' + e.target.dataset.id,
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
    <h1 class="text-center">Users list</h1>
    <div class="w-11/12 mx-auto">
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white m-auto w-full xl:w-8/12">
            <table id="datatable" class="dt-body-center stripe hover"
                style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">ID</th>
                        <th data-priority="2">Name</th>
                        <th data-priority="3">Email</th>
                        <th class="no-sort" data-priority="5"></th>
                        <th class="no-sort" data-priority="6"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td class="dt-center">{{ $user->id ?? '' }}</td>
                        <td class="dt-center">{{ $user->name }}</td>
                        <td class="dt-center">{{ $user->email }}</td>
                        <td class="dt-center"><a class="edit text-blue-500 font-bold"
                        href="{{route('admin.users.edit',$user->id)}}">Edit/View</a></td>
                        <td class="dt-center"><a data-email="{{$user->email}}" data-id="{{$user->id}}" class="delete text-blue-500 font-bold"
                                href="#">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
