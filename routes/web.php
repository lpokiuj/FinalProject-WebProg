<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WatchlistController;

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

Route::group(['middleware' => ['isAdmin']], function(){
    Route::resource('actors', ActorController::class);
    Route::resource('movies', MovieController::class);
    Route::resource('watchlists', WatchlistController::class);
});

Route::resource('actors', ActorController::class)->only([
    'index',
    'show'
]);
Route::resource('movies', MovieController::class)->only([
    'index',
    'show'
]);
Route::resource('watchlists', WatchlistController::class)->only([
    'index',
    'show'
]);

Route::get('/', function () {
    return redirect('/movies');
});

Route::get('/login', function(){
    return view('login');
})->middleware('guest');
Route::post('/login', [UserController::class, 'login'])->middleware('guest');

Route::get('/register', function(){
    return view('register');
})->middleware('guest');
Route::post('/register', [UserController::class, 'register'])->middleware('guest');

Route::post('/logout', [UserController::class, 'logout']);
