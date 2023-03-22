@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.news.index') }}"><p>Новости</p></a>
    <a href="{{ route('admin.news.create') }}"><p>Добавить новость</p></a>
@endsection