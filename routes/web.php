<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignUpController;
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
})->middleware('guest');

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', [ProfileController::class, 'index']);
        Route::get('/profile/{user:username}', [ProfileController::class, 'getUser']);
        Route::get('/profile/{user:username}/{post:id}', [ProfileController::class, 'getPost']);
    });
});

Route::resource('/profile', ProfileController::class)->middleware('auth');


Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

Route::controller(SignUpController::class)->group(function () {
    Route::get('/signup', 'index')->middleware('guest');
    Route::post('/signup', 'store');
});

Route::resource('/post', PostsController::class)->middleware('auth');
