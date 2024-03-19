<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/','App\Http\Controllers\ProjectController@index' );

Route::get('/ToDoList' ,'App\Http\Controllers\ProjectController@index1');

Route::get('/edit' ,'App\Http\Controllers\ProjectController@index2');

Route::get('/add' ,'App\Http\Controllers\ProjectController@index3');

Route::get('/delete' ,'App\Http\Controllers\ProjectController@index4');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
