@extends('layouts.app')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://a.d-cd.net/sC6BNEzZwU-f2acthkkRqoy8ctU-1920.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://wallpapers.com/images/hd/4k-dual-monitor-man-overlooking-city-4lxu5ve4jwq8cf51.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://res.klook.com/image/upload/activities/jgbpq0omwyaqmrsou10b.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Назад</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Дальше</span>
    </button>
</div>

@endsection