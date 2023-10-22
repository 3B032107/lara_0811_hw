<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('home.blade.php');
//});
//
//Route::get('/about', function () {
//    return view('about.blade.php');
//});
//
//Route::get('/news', function () {
//    return view('news.blade.php');
//});
//
//Route::get('home/{name?}',['as'=>'home.index',function ($name = 'home'){
//    return 'Hello, '.$name;
//}])->name('hello.index');
//Route::get('about/{name?}',['as'=>'about.index',function ($name = 'about'){
//    return 'Hello, '.$name;
//}])->name('about.index');
//Route::get('news/{name?}',['as'=>'news.index',function ($name = 'news'){
//    return 'Hello, '.$name;
//}])->name('news.index');

Route::get('/',['as'=>'home.index','uses'=>'HomeController@index']);
Route::get('/about',['as'=>'about.index','uses'=>'AboutController@index']);
Route::get('/news',['as'=>'news.index','uses'=>'NewsController@index']);
