<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('signup', [LoginController::class, 'signupForm'])->name('signupForm');
Route::post('signup', [LoginController::class, 'signup'])->name('signup');
Route::get('login', [LoginController::class, 'loginForm'])->name('loginForm');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// Terminar de pulir los enlaces.
Route::resource('users', UserController::class)->only('show')->middleware('auth');
Route::get('players/{player}/visible', [PlayerController::class, 'makeVisibleInvisible'])->name('players.make_visible_invisible')->middleware('admin');
Route::resource('players', PlayerController::class);
Route::get('events/{event}/visible', [EventController::class, 'makeVisibleInvisible'])->name('events.make_visible_invisible')->middleware('admin');
Route::get('events/{event}/like', [EventController::class, 'eventLike'])->name('events.like')->middleware('auth');
Route::resource('events', EventController::class);
Route::resource('messages', MessageController::class);
Route::resource('products', ProductController::class)->only('index');
