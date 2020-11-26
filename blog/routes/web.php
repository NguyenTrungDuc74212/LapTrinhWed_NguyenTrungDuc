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
		Route::get('danhsach',[TheloaiController::class,'list_category']);
		Route::get('themmoi',[TheloaiController::class,'load_add']);
		Route::post('themmoi',[TheloaiController::class,'post_add']);
	});
});
