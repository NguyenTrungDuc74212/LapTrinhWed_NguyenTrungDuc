<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TheloaiController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'theloai'],function(){
		Route::get('danhsach',[TheloaiController::class,'list_category'])->name('list_cate');
		Route::get('themmoi',[TheloaiController::class,'load_add']);
		Route::post('themmoi',[TheloaiController::class,'post_add']);
		Route::get('sua/{id}',[TheloaiController::class,'load_edit']);
		Route::post('sua/{id}',[TheloaiController::class,'post_edit']);
		Route::get('xoa/{id}',[TheloaiController::class,'delete_cate']);
		Route::get('search',[TheloaiController::class,'search_live'])->name('search');
		Route::get('phantrang/{soluong}',[TheloaiController::class,'changePagi']);
	});
});
