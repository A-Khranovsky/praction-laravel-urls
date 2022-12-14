<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'home'])->name('home');
Route::get('/post/{id}', [PostController::class, 'index'])->name('post.show');
Route::get('/tmp', [PostController::class, 'temporaryLink'])->name('tmp')->middleware('signed');
Route::get('/{id}/post_reversed', [PostController::class, 'index'])->name('post_reversed.show');
Route::patch('/post/{id}', [PostController::class, 'edit'])->name('post.edit');
