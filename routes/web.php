<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Page\IndexPageController::class, 'index'])->name('index');


Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login_index'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('admin.login');




Route::middleware(['auth'])
    ->prefix('admin_')
    ->name('admin.')
    ->group(function () {




        Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');


        // index page routes
        Route::get('/index', [\App\Http\Controllers\Page\IndexPageController::class, 'admin_index'])->name('page.index');
        Route::post('/index/update', [\App\Http\Controllers\Page\IndexPageController::class, 'update'])->name('page.index.update');


        // slider routes
        Route::get('/slider', [\App\Http\Controllers\Component\SliderController::class, 'index'])->name('slider');
        Route::get('/slider/get', [\App\Http\Controllers\Component\SliderController::class, 'get'])->name('slider.get');
        Route::post('/slider/add', [\App\Http\Controllers\Component\SliderController::class, 'add'])->name('slider.add');
        Route::post('/slider/update', [\App\Http\Controllers\Component\SliderController::class, 'update'])->name('slider.update');
        Route::get('/slider/delete/{id}', [\App\Http\Controllers\Component\SliderController::class, 'delete'])->name('slider.delete');


        // system settings routes
        Route::get('/', [\App\Http\Controllers\SystemController::class, 'index'])->name('index');
        Route::post('/update', [\App\Http\Controllers\SystemController::class, 'update'])->name('system.update');

        // header routes

        Route::get('/header', [\App\Http\Controllers\Component\HeaderController::class, 'index'])->name('header');
        Route::post('/header/update', [\App\Http\Controllers\Component\HeaderController::class, 'update'])->name('header.update');



});
