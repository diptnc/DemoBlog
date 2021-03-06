<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\addpostController;
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

Route::get('/', [homeController::class,'index']);

Route::get('/login', [adminController::class,'login']);
Route::post('/login', [adminController::class,'login_submit']);

Route::get('/admin', [adminController::class,'dashboard']);

Route::get('/postnew', [addpostController::class,'index']);
Route::post('/addnewpost', [addpostController::class,'addpost']);


Route::get('/post/{id}', [homeController::class,'postview']);