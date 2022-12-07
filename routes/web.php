<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SongController;


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
// User Login Route
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/login_url', [UserController::class,'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'authenticate'])->name('auth.login');
Route::post('/register', [UserController::class, 'store'])->name('auth.register');
Route::get('/register_url', [UserController::class, 'showRegister'])->name('register');
Route::post('/ind_login', [UserController::class, 'ind_authenticate'])->name('indauth.login');
Route::get('/user-management', [UserController::Class, 'listUser'])->name('user.management');

// Video Route
Route::get('/video-management', [VideoController::class,'listVideo'])->name('video.management');
Route::get('/video-add', [VideoController::class, 'add'])->name('video.add');
Route::post('/video-add-success', [VideoController::class, 'store'])->name('video.store');
Route::get('/video-update/{id}', [VideoController::class, 'edit'])->name('video.update');
Route::post('/video-update-success', [VideoController::class,'update'])->name('video.edit');
Route::get('/video-delete/{id}', [VideoController::class, 'destroy'])->name('video.delete');

// Index Route
Route::get('/home', [IndexController::class, 'showIndex'])->name('home');
Route::get('/individual-song',[IndexController::class, 'SongDetail'])->name('songdetail');
Route::post('/search-result', [IndexController::class, 'search'])->name('search');

// Song Route
Route::get('/admin', [SongController::class, 'AdminLogin'])->name('song.login');
Route::post('/admin-index', [SongController::class,'AdminLogged'])->name('song.logged');
Route::get('/admin-index', [SongController::class,'AdminIndex'])->name('song.index');
Route::get('/song-management', [SongController::class,'listSong'])->name('song.management');
Route::get('/song-add', [SongController::class, 'add'])->name('song.add');
Route::post('/song-add-success', [SongController::class, 'store'])->name('song.store');
Route::get('/song-update/{id}', [SongController::class, 'edit'])->name('song.edit');
Route::post('/song-update-success', [SongController::class,'update'])->name('song.update');
Route::get('/song-delete/{id}', [SongController::class, 'destroy'])->name('song.delete');
Route::get('/guest/song-detail/{id}', [SongController::class, 'unlogged_detail'])->name('unloggedsong.detail');
Route::get('/song-detail/{id}', [SongController::class, 'logged_detail'])->name('loggedsong.detail');


// Cart Route
Route::get('/cart/{id}', [SongController::class, 'checkout'])->name('cart.checkout');
Route::post('/order-confirmation',[SongController::class, 'Orderstore'])->name('order.success');

// Order Route
Route::get('/order-management', [SongController::class,'listOrder'])->name('order.management');