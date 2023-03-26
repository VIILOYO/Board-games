@extends('layouts.admin')

@section('content')
<div class="col ps-md-2 pt-2">
    <a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse" class="border rounded-3 p-1 text-decoration-none"><i class="fa-solid fa-bars"></i></a>
    <div class="page-header pt-3">
        <h2>Общая статистика</h2>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body text-start">
                    <h5 class="card-title">Пользователи</h5>
                    <p class="card-text"><i class="fa-regular fa-user"></i> {{ count($statUsers) }}</p>
                    <a href="#" class="btn btn-primary">Список</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body text-start">
                    <h5 class="card-title">Новости</h5>
                    <p class="card-text"><i class="fa-regular fa-paper-plane"></i> {{ count($statNews) }}</p>
                    <a href="{{ route('admin.news.index') }}" class="btn btn-primary">Список</a>
                    <a href="{{ route('admin.news.create') }}" class="btn btn-primary ms-2">Добавить</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body text-start">
                    <h5 class="card-title">Игры</h5>
                    <p class="card-text"><i class="fa-regular fa-chess-rook"></i> 10+</p>
                    <a href="#" class="btn btn-primary">Список</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection