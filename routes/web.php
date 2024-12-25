<?php
use App\Http\Controllers\FirstPageController;

use App\Http\Controllers\AboutMeController;

use App\Http\Controllers\MyCityController;

use App\Http\Controllers\MyContactController;

use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;



Route::controller(FirstPageController::class)->group(function () {
    Route::get('/', 'index');

});

Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index');
});

Route::controller(PostController::class)->group(function () {
    Route::get('/posts/create', 'create');
});

Route::controller(PostController::class)->group(function () {
    Route::get('/posts/update', 'update');
});


Route::controller(AboutMeController::class)->group(function () {
    Route::get('/about', 'index');

});

Route::controller(MyCityController::class)->group(function () {
    Route::get('/city', 'index');

});

Route::controller(MyContactController::class)->group(function () {
    Route::get('/contact', 'index');

});
