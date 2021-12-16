<?php

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

route::get('/', function (){
    echo "<h2>This is home page</h2>";
});

route::get('/about', function (){
    echo "<h2>This is about page</h2>";
});

route::get('/contact', function (){
    echo "<h2>This is contact page</h2>";
});

route::get('/user', function (){
    return view ( 'user' ,['name'=>'hihi']);
});

route::get('/user/{name}', function ($name){
    echo "<h2>xin chao $name</h2>";
//    echo "xin chao " . $name;
});

route::get('/user-name/{name?}', function ($name = 'abc'){
    echo "<h2>xin chao $name</h2>";
//    echo "xin chao " . $name;
});

route::get('/', 'App\Http\Controllers\HomeController@index');
