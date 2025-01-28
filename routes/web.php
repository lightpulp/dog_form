<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/main');
});

Route::get('/fetch_dog', [App\Http\Controllers\DogController::class, 'produce_image'])->name('produce_image');
Route::get('/get_breeds', [App\Http\Controllers\DogController::class, 'get_breeds'])->name('get_breeds');