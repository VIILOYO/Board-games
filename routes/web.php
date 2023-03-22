<?php

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
    });
});

// Пользовательская часть
Route::group([
    'namespace' => 'App\Http\Controllers\News',
    'prefix' => 'news',
    'as' => 'news.',
], function () {
    // Новости
    //Route::get('/', IndexController::class)->name('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
