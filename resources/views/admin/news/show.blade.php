@extends('layouts.admin')

@section('content')
<div class="flex-wrap w-50 ms-5 px-0 mt-3">
    @foreach ($news->images as $image)
        <img src="{{ asset('storage/' . $image->url) }}" width="480" height="640" class="img-fluid rounded-start">
    @endforeach
</div>
@endsection