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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login' ,function(){
    return view('login');
});

Route::get('/ToDoList' ,function(){
    return view('ToDoList');});

Route::get('/edit' ,function(){
    return view('edit');});

Route::get('/add' ,function(){
    return view('add');});

Route::get('/delete' ,function(){
    return view('delete');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
