@extends('layouts.section')

@push('styles')
<link href="{{ asset('css/news.css') }}" rel="stylesheet">
@endpush
@section('title')
Search results
@endsection
@section('content')
<section class="flex flex-wrap">
    <div class="m-auto container flex flex-wrap">
        @if(count($results) === 0)
        Your query returned 0 results
        @else
        @foreach ($results as $r)
        <div class="w-full flex items-center shadow border my-1 p-5 rounded-md mx-2">
            <div class="w-11/12">
                <h1 class="text-lg">{{ substr(get_class($r),11,strlen(get_class($r))) }}</h1>
                @if(!empty($r->comment))
                <p>Comment:
                    {!! preg_replace("/\w*?$search\w*/i", "<span class='bg-green-300'>$0</span>",
                    Str::limit($r->comment,100)) !!}</p>
                @endif
                @if(!empty($r->title))
                <p>Title:
                    {!! preg_replace("/\w*?$search\w*/i", "<span class='bg-green-300'>$0</span>",
                    Str::limit($r->title,100)) !!}</p>
                @endif
                @if(!empty($r->summary))
                <p>Summary:
                    {!! preg_replace("/\w*?$search\w*/i", "<span class='bg-green-300'>$0</span>",
                    Str::limit($r->summary,100)) !!}</p>
                @endif
                @if(!empty($r->body))
                <p>Body:
                    {!! preg_replace("/\w*?$search\w*/i", "<span class='bg-green-300'>$0</span>",
                    Str::limit($r->body,100)) !!}</p>
                @endif
                @if(!empty($r->name))
                <p>Name:
                    {!! preg_replace("/\w*?$search\w*/i", "<span class='bg-green-300'>$0</span>",
                    Str::limit($r->name,100)) !!}</p>
                @endif
                @if(!empty($r->description))
                <p>Description:
                    {!! preg_replace("/\w*?$search\w*/i", "<span class='bg-green-300'>$0</span>",
                    Str::limit($r->description,100)) !!}</p>
                @endif
            </div>
            <div>
                <a href="@if(substr(get_class($r),11,strlen(get_class($r))) == 'News') {{route('news.show',$r->uuid)}} @elseif(substr(get_class($r),11,strlen(get_class($r))) == 'Place') {{route('place.show',$r->uuid)}} @else {{route('place.show',App\Models\Place::find($r->place_id)->uuid)}} @endif"
                    class="bg-transparent mt-1 hover:bg-green-300 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-300 hover:border-transparent rounded">Go</a>
            </div>
        </div>
        @endforeach
        <div class="w-full bg-black bg-opacity-50 fixed bottom-0 pb-6 pt-1 lg:static lg:pb-0 lg:pt-0 lg:bg-transparent">
            <div class="w-10/12 m-auto">
                {{ $results->appends(request()->only('search'))->links() }}
            </div>
        </div>
        @endif
    </div>
</section>
@endsection
