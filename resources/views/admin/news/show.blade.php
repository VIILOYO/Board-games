@extends('layouts.admin')

@section('content')

<div class="row flex-wrap w-75 ms-3 mt-3" style="height: 20rem;">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-4">
                <div class="carousel slide" id="carouselControls" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($news->images as $image)
                        <div class="carousel-item {{ $image == $news->images[0] ? 'active' : '' }}">
                            <img class="d-block w-100 mt-3" style="max-height: 500px;" src="{{ asset('storage/' . $image->url) }}" alt="">
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" role="button" href="#carouselControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" role="button" href="#carouselControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">{{ $news->title }}</h3>
                    <h5 class="card-text">{{ $news->content }}</h5>
                    <p class="card-text"><small class="text-body-secondary">{{ $news->created_at }}</small></p>

                    <form action="{{ route('admin.news.edit', $news) }}" method="post" style="float: left;">
                        @csrf
                        <button type="submit" class="btn btn-success">Редактировать</button>
                    </form>

                    <form action="{{ route('admin.news.destroy', $news) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Удалить безвозвратно</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection