<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Всё связанное с админкой
Route::group([
    'namespace' => 'App\Http\Controllers\Admin',
    'middleware' => 'admin',
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {
    // Основная часть админ панели
    Route::get('/', IndexController::class)->name('index');

    // Новости сайта в админке
    Route::group([
        'namespace' => 'News',
        'prefix' => 'news',
        'as' => 'news.',
    ], function () {
        Route::get('/', IndexController::class)->name('index');
        Route::get('/create', CreateController::class)->name('create');
        Route::post('/', StoreController::class)->name('store');
        Route::get('/{news}', ShowController::class)->name('show');
        Route::get('/{news}/edit', EditController::class)->name('edit');
        Route::put('/{news}', UpdateController::class)->name('update');
        Route::delete('/{news}', DestroyController::class)->name('destroy');
    });

    Route::group([
        'namespace' => 'User',
        'prefix' => 'users',
        'as' => 'users.',
    ], function () {
        Route::get('/', IndexController::class)->name('index');
        Route::put('/{user}', ChangeController::class)->name('change');
    });
});

// Пользовательская часть
Route::get('/', [HomeController::class, 'index']);

// Новости сайта
Route::group([
    'namespace' => 'App\Http\Controllers\News',
    'prefix' => 'news',
    'as' => 'news.',
], function () {
    // Новости
    Route::get('/', IndexController::class)->name('index');
});

Auth::routes();