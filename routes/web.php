<?php

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

Route::get('/', function () {
    return view('verify_page');
});


Route::get('/start', function () {
    return view('index');
})->name('home');


Route::get('/start/insert',function(){
    return view('insert');
})->name('insert');

Route::get('/start/insert/done','store_controller@store')->name('storedb');

Route::get('/filter_view',function(){
    return view('view');
})->name('view');
Route::get('/filter_view/result','store_controller@show');

Route::get('/update',function(){
    return view('update');
})->name('update');
Route::get('/update/change','store_controller@edit');
Route::post('/update/change/1','store_controller@update');

Route::get('/delete',function(){
    return view('delete');
})->name('delete');
Route::get('/delete/result','store_controller@destroy');

// require __DIR__.'/auth.php';
