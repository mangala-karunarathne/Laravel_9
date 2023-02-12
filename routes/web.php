<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/blog')->group(function(){
    Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('blog.index');
    // Route::get('/show', [App\Http\Controllers\PostController::class, 'show'])->name('blog.show');
    Route::get('/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('blog.show');

    Route::get('/create', [App\Http\Controllers\PostController::class, 'create'])->name('blog.create');
//     Route::get('/', [App\Http\Controllers\PostController::class, 'store'])->name('blog.store');

//     Route::get('/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('blog.edit');
//     Route::patch('/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('blog.update');

//     Route::delete('/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('blog.destroy');

});
