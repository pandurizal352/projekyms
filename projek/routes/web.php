<?php

use App\Http\Middleware\CheckPinMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaControllers;  
use App\Http\Controllers\UserControllers; 
use App\Http\Controllers\LoginController; 
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SpmController;
use GuzzleHttp\Middleware;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



Route::resource('sisw',SiswaControllers::class)->middleware('admin');
Route::resource('user',UserControllers::class)->middleware('auth');
//Route::resource('user',UserControllers::class);
Route::get('/search', [UserControllers::class, 'search'])->name('search');

Route::get('/',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/change-password',[UserControllers::class,'ChangePassword'])->middleware('auth');;
Route::post('/change-password',[UserControllers::class,'ProsesChangePassword'])->middleware('auth');

// Route::get('/profile',[UserControllers::class,'toProfile','index','updateImage'])->name('main-interface.profile')->middleware('auth');
// Route::get('/profile',[Profilep::class,'index','update'])->name('main-interface.profile')->middleware('auth');
Route::get('/profile', [UserControllers::class, 'toProfile'])->middleware('auth')->name('user.profile');
Route::post('/profile/update-image/{user}', [UserControllers::class, 'updateImage'])->middleware('auth')->name('user.updateImage');


Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth')->name('dashboard');
Route::get('/dashboard/course-spm', [SpmController::class, 'index'])->middleware('checkpin')->name('dashboard.spm');

Route::post('/dashboard/check-pin', [DashboardController::class, 'checkPin'])->name('dashboard.check_pin');
//Route::resource('/dasboard/user',UserControllers::class)->except('show'); itu kecuali show ya

