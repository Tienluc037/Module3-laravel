<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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
    return redirect()->route("login.showFormLogin");
});

Route::middleware("auth")->group(function (){
    Route::prefix('users')->group(function (){
        Route::get('/',[UserController::class,"index"])->name('users.index');
        Route::get('/create',[UserController::class,"create"])->name('users.create');
        Route::post('/create',[UserController::class,"login"])->name('users.store');
        Route::get('/{id}/detail',[UserController::class,"show"])->name('users.show');
        Route::get('/{id}/delete',[UserController::class,"destroy"])->name('users.destroy');
        Route::get('/{id}/update',[UserController::class,"edit"])->name('users.edit');
        Route::post('/{id}/update',[UserController::class,"update"])->name('users.update');
    });


    Route::prefix('posts')->group(function (){
        Route::get('/',[PostController::class,"index"])->name('posts.index');
        Route::get('/create',[PostController::class,"create"])->name('posts.create');
        Route::post('/create',[PostController::class,"store"])->name('posts.store');
        Route::get('/{id}/update',[PostController::class,"edit"])->name('posts.edit');
        Route::post('/{id}/update',[PostController::class,"update"])->name('posts.update');
        Route::get('/{id}/detail',[PostController::class,"show"])->name('posts.show');
        Route::get('/{id}/delete',[PostController::class,"destroy"])->name('posts.destroy');
        Route::get('/{id}/bookmark',[PostController::class,"addToFavorite"])->name('posts.addToFavorite');
        Route::get('/favorite',[PostController::class,"showFavoriteList"])->name('posts.showFavoriteList');
        Route::get('/{id}/deleteFavorite',[PostController::class,"deleteFavorite"])->name('posts.deleteFavorite');
    });
});


Route::get('/login',[AuthController::class,"showFormLogin"])->name("login.showFormLogin");
Route::post('/login',[AuthController::class,"login"])->name("login");
Route::get('/logout',[AuthController::class,"logout"])->name("logout");
Route::get('/register',[AuthController::class,"showFormRegister"])->name("register.showFormRegister");
Route::post('/register',[AuthController::class,"register"])->name("register");



