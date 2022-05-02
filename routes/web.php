<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\store_controller;
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
Route::get('/',function(){
    return view('verify_page');
});

//----------------Home page----------------
Route::get('/start',function(){
    return view('index');
})->name('home')->middleware('verification');

//----------------code for insertion in DB----------------
Route::get('/insert',[store_controller::class,'index'])->name('insert');
Route::get('insert/result',[store_controller::class,'store'])->name('storedb');

//----------------code for viewing in DB----------------
Route::get('/filter_view',function(){
    return view('view');
})->name('view');
Route::get('/filter_view/result','store_controller@show')->name('view_result');

//----------------code for updation in DB----------------
Route::get('/update',function(){
    return view('update');
})->name('update');
Route::get('/update/change','store_controller@edit')->name('update_result');
Route::get('update/change/1','store_controller@update');

//----------------code for deletion in DB----------------
Route::get('/delete',function(){
    return view('delete');
})->name('delete');
Route::get('/delete/result',[store_controller::class,'destroy'])->name('delete_result');