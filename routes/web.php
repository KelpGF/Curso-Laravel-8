<?php

use App\Http\Controllers\{
    PostController,
    TestePostController
};
use App\Models\TestePost;
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

Route::prefix('posts')->group(function() {
    Route::get('', [PostController::class, 'index'] )->name('posts.index');
    Route::get('/create', [PostController::class, 'create'] )->name('posts.create');
    Route::get('/show/{id}', [PostController::class, 'show'] )->name('posts.show');
    Route::post('/store', [PostController::class, 'store'])->name('posts.store');
    Route::delete('/destroy/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
});


Route::get('/', function () {
    return view('welcome');
});























Route::prefix('teste-posts')->group(function() {
    Route::get('', [TestePostController::class, 'index'])->name('teste-posts.index');
    Route::get('/create', [TestePostController::class, 'create'])->name('teste-posts.create');
    Route::post('/store', [TestePostController::class, 'store'])->name('teste-posts.store');
});

















