@extends('layouts.admin')

@section('content')

@foreach ($news as $n)
    <h4>{{ $n->title }}</h4>
    <p>{{ $n->content }}</p>
@endforeach


{{ $news->withQueryString()->links() }}
@endsection