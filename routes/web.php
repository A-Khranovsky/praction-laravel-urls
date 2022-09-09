<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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
//Route::get('/{id}/post', [PostController::class, 'index'])->name('post.first');
