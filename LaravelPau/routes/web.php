<?php

use App\Http\Controllers\CookieController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ServiceController;
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

// Enlace a la página principal.
Route::get('/', function () {
    return view('index');
})->name('index');

// Enlaces a las páginas que no involucran la base de datos o la sesión.
Route::get('service/terms', [ServiceController::class, 'terms'])->name('service.terms');
Route::get('cookies/politics', [CookieController::class, 'politics'])->name('cookies.politics');
Route::get('cookies/settings', [CookieController::class, 'settings'])->name('cookies.settings');
Route::get('privacy', [PrivacyController::class, 'politics'])->name('privacy.politics');
Route::get('location', [LocationController::class, 'index'])->name('location.index');

// Enlaces a registro e inicio de sesión.
Route::get('signup', [LoginController::class, 'signupForm'])->name('signupForm');
Route::post('signup', [LoginController::class, 'signup'])->name('signup');
Route::get('login', [LoginController::class, 'loginForm'])->name('loginForm');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// Enlaces de recursos que no requieren inicio de sesión.
Route::resource('players', PlayerController::class)->only('index');
Route::get('events/{event}/like', [EventController::class, 'eventLike'])->name('events.like')->middleware('auth');
Route::resource('events', EventController::class)->only('index');
Route::resource('messages', MessageController::class)->only('create', 'store');
Route::resource('products', ProductController::class)->only('index');

// Enlaces de recursos que requieren que un usario administrador haya iniciado sesión
Route::middleware('admin')->group(function () {
    Route::get('players/{player}/visible', [PlayerController::class, 'makeVisibleInvisible'])->name('players.make_visible_invisible');
    Route::resource('players', PlayerController::class)->only('create', 'store');
    Route::get('events/{event}/visible', [EventController::class, 'makeVisibleInvisible'])->name('events.make_visible_invisible');
    Route::resource('events', EventController::class)->except('index', 'show');
    Route::resource('messages', MessageController::class)->only('index', 'show', 'destroy');
});

// Enlaces de recursos que requieren que un usuario haya iniciado sesión.
Route::middleware('auth')->group(function () {
    Route::resource('players', PlayerController::class)->only('show');
    Route::get('events/{event}/like', [EventController::class, 'eventLike'])->name('events.like')->middleware('auth');
    Route::resource('events', EventController::class)->only('show');
    Route::resource('users', UserController::class)->only('show', 'edit', 'update');
});
