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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

// Route::prefix('/blog')->group(function(){
//     Route::get('/create', [App\Http\Controllers\PostController::class, 'create'])->name('blog.create');
//     Route::get('/store', [App\Http\Controllers\PostController::class, 'store'])->name('blog.store');
//     Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('blog.index');
//     Route::get('/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('blog.show');
//     Route::get('/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('blog.edit');
//     Route::patch('/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('blog.update');
//     Route::delete('/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('blog.destroy');

// });

// Route::get('/addresses', [App\Http\Controllers\AddressController::class, 'index'])->name('addresses.index');

// Route::get('/filemanager', [App\Http\Controllers\FileManagerController::class, 'index'])->name('filemanager');

// Route::get('/image', [ImageController::class,'index'])->name('image.index');
// Route::post('/image', [ImageController::class,'store'])->name('image.store');

Route::resource('blog', PostController::class);
