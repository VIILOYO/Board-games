@extends('layouts.admin')

@section('content')
<div class="row flex-wrap w-50">
    <div class="list-group mt-3 ms-3">
        <h2>Список пользователей</h2><hr>
        @foreach ($users as $user)
            @if ($user->name === Auth::user()->name)
                @continue
            @endif
            <h2>{{ $user->name }} | {{ $user->role }}</h2>
            @if ($user->role !== 'admin')
                <form action="{{ route('admin.users.change', $user) }}" method="post">
                    @csrf
                    @method('put')
                    <button type="submit" class="btn btn-primary">Дать админку</button>
                </form>
            @else
                <form action="{{ route('admin.users.change', $user) }}" method="post">
                    @csrf
                    @method('put')
                    <button type="submit" class="btn btn-danger">Снять админку</button>
                </form>
            @endif<hr>
        @endforeach
    </div>
</div>
@endsection