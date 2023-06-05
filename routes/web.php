<?php

use App\Http\Controllers\PostsController;
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

Route::prefix('posts')->group(function() {
    Route::get('/create', [PostsController::class, 'create'])->name('posts.create');
    Route::post('/', [PostsController::class, 'store'])->name('posts.store');
    Route::get('/{post}/edit', [PostsController::class, 'edit'])->name('posts.edit');
    Route::put('/{post}', [PostsController::class, 'update'])->name('posts.update');
    Route::delete('/{post}', [PostsController::class, 'destroy'])->name('posts.destroy');
});
