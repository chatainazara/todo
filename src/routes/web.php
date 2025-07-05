<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CategoryController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[TodoController::class,'index']);

Route::get('/category',[CategoryController::class,'cate_index']);
Route::post('/category',[CategoryController::class,'cate_store']);

Route::patch('/category/updateORremove',[CategoryController::class,'cate_updateORremove']);
// Route::get('/', function () {
//     return view('welcome');
// });
Route::post('/todos',[TodoController::class,'store']);
Route::patch('/todos/updateORremove',[TodoController::class,'updateORremove']);
