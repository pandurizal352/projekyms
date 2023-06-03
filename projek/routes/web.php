<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaControllers;  
use App\Http\Controllers\PostControllers; 
use App\Http\Controllers\UserControllers; 


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
    return view('template');
});

Route::resource('sisw',SiswaControllers::class);
//Route::resource('post', PostController::class);
Route::resource('post', 'App\Http\Controllers\PostController');
Route::resource('user',UserControllers::class);