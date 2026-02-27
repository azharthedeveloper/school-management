<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/posts')->controller(PostController::class)->group(function(){
    // Route::get('/', 'getData');
    // Route::get('/add-data', 'addData');
    // Route::get('/update-data', 'updateData');
    // Route::get('/delete-data', 'deleteData');
    // Route::get('/first-method', 'firstMethod');
    // Route::get('/second-method', 'secondMethod');

    Route::get('/', 'index')->name('posts-index');
    Route::get('/create', 'create')->name('posts-create');
    Route::post('/store', 'store')->name('posts-store');
    Route::get('/edit/{id}', 'edit')->name('posts-edit');
    Route::put('/update/{id}', 'update')->name('posts-update');
    Route::delete('/delete/{id}', 'destroy')->name('posts-delete');


});





// Route::fallback(function () {
//     return view('errors.404');
// });
