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

Route::get('/',[store_controller::class,'index'])->name('insertform');
Route::get('insertform',[store_controller::class,'store'])->name('storedb');

Route::get('/filter_view',function(){
    return view('view');
})->name('viewbyid');
Route::get('/filter_view/result','store_controller@show')->name('A');

Route::get('/update',function(){
    return view('update');
});
Route::get('/update/change','store_controller@edit')->name('B');


// Route::get('/s',function(){
//     return view('view');
// })->name('A');