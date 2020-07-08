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
        let answer = confirm('Do you really mean it? This action is irreversible: DELETE NEW NR ' + e.target
        .id);
        if (answer === true) {

            $.ajax({
                type: 'POST',
                url: '/news/' + e.target.id,
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
<section id="sections" class="py-16 relative bg-green-100">
    <h1 class="text-center">News Section</h1>
    <div class="w-11/12 mx-auto">
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <table id="datatable" class="dt-body-center stripe hover"
                style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">ID</th>
                        <th data-priority="4">Title</th>
                        <th data-priority="5">Summary</th>
                        <th class="no-sort" data-priority="9"></th>
                        <th class="no-sort" data-priority="10"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $new)
                    <tr>
                        <td class="dt-center">{{ $new->id ?? '' }}</td>
                        <td class="dt-center font-bold">{{ Str::limit($new->title,40) ?? '' }}</td>
                        <td class="dt-center">{{ Str::limit($new->summary,150) ?? '' }}</td>
                        <td class="dt-center"><a class="text-blue-500 font-bold"
                                href="{{ route('news.edit',$new->uuid) }}">Edit</a></td>
                        <td class="dt-center"><a id="{{$new->id}}" class="delete text-blue-500 font-bold"
                                href="{{ route('news.edit',$new->uuid) }}">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
