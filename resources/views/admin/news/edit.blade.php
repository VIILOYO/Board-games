@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.news.update', $news) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="flex-wrap w-50 ms-5 px-0 mt-3">
        <h2>Добавление новости</h2>
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input name="title" type="text" class="form-control me-5" placeholder="Заголовок" value="{{ old('title') ?? '' }}">
            @error('title')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="url" class="form-label">URL-адрес</label>
            <input name="url" type="text" class="form-control" placeholder="url" value="{{ old('url') ?? '' }}">
            @error('url')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="content" class="form-label">Содержание</label><br>
            <textarea name="content" id="content" cols="113" rows="6" placeholder="Содержание">{{ old('content') ?? '' }}</textarea>
            @error('content')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="image" class="form-label">Изображения</label>
            <input class="form-control" type="file" name="images[]" multiple>
            @error('images')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </div>
</form>
@endsection