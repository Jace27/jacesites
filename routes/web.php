<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;

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

Route::get('/', [\App\Http\Controllers\PageController::class, 'PageMain'])->name('main');
Route::get('/about', [\App\Http\Controllers\PageController::class, 'PageAbout'])->name('about');

Route::get('/profile', [\App\Http\Controllers\PageController::class, 'PageProfile'])->name('profile');
//Route::get('/profile/{user}', [\App\Http\Controllers\PageController::class, 'PageProfile'])->name('profile');
