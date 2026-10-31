<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return 'Halo! ini aplikasi thriftin, app shop anak muda ';
});

Routes::get('/products', [ProductController::class, 'index']) ->name('products.index');
Routes::get('/products', [ProductController::class, 'show']) ->name('products.show');
