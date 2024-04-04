<?php

use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;

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


Route::group(['prefix'=>'admin','namespace'=>'Admin'], function(){
    Route::get('/',[MainController::class,'index'])->name('admin.index');
    Route::resource('/categories',CategoryController::class);
    Route::resource('/tags',TagController::class);
    Route::resource('/posts',PostController::class);
});

/*
Route::group(['prefix' => 'admin'],function(){
});*/

