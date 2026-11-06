<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return 'Halo! ini aplikasi thriftin, app shop anak muda ';
});

// Route::get('/products/{id}', function($id){
//     return "Detail produk nomor ${id}";
// });

Route::get('/products', [ProductController::class, 'index']) ->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show']) ->name('products.show');
