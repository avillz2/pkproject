<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PagesController;

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

//Route::get('/', function () {
   // return view('welcome');

  // return 'precious';
//});

//Route::get('/users/{id}', function ($id) {
    // return view('welcome');

  //  return 'precious '.$id;
 //});



 //Route::resource('/pages',PagesController::class);

 Route::get('/','App\Http\Controllers\PagesController@index');
 Route::get('/about','App\Http\Controllers\PagesController@about');
 Route::get('/services','App\Http\Controllers\PagesController@services');

  Route::resource('posts','App\Http\Controllers\PostsController');


 // {
    //return view('welcome');

  // return 'precious';
//});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
