@extends('layouts.admin')

@section('content')

<div class="row flex-wrap w-50">
    <div class="list-group mt-3 ms-3">
    @foreach($news as $n)
        <a href="{{ route('admin.news.show', $n) }}" class="list-group-item list-group-item-action">{{ $n->id }}. {{ $n->title }}</a>
        @endforeach
    </div>
    
    {{ $news->withQueryString()->links() }}
</div>
@endsection