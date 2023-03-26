@extends('layouts.admin')

@section('content')
<div class="row flex-wrap w-50">
    <div class="list-group mt-3 ms-3">
        <h2>Список пользователей</h2>
        @foreach ($users as $user)
            <h2>{{ $user->name }} | {{ $user->role }}</h2><hr>
        @endforeach
    </div>
</div>
@endsection