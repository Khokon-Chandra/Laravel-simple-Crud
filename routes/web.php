<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\StudentController;
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

Route::get('/',[StudentController::class,'home']);

Route::get('/add-new',[StudentController::class,'addNew']);
Route::post('/add-new',[StudentController::class,'addNew']);


Route::get('/edit/{id}',[StudentController::class,'update']);
Route::post('/update',[StudentController::class,'onUpdate']);

Route::post('/delete',[StudentController::class,'delete']);

Route::resource('/photoes',PhotoController::class);

Route::get('/data',[StudentController::class,'getAll']);