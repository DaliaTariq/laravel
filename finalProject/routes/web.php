<?php

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
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->group(function (){
    /*Home Page*/
Route::get('/home', 'HomeController@index')->name('home');
/*============================================================
   catrgory Routes
 ===========================================================*/
    Route::prefix('catrgory')->group(function (){
        Route::get('/index','CategoryController@index')->name('index_category');
    Route::get('/create','CategoryController@create')->name('create_category');
    Route::post('/store','CategoryController@store')->name('store_category');
    Route::get('/edit/{id}','CategoryController@edit')->name('edit_category');
    Route::post('/update/{id}','CategoryController@edit')->name('update_category');
    Route::get('/delete/{id}','CategoryController@destroy')->name('destroy_category');
    Route::get('/trashed','CategoryController@trashed')->name('trashed_category');
    Route::get('/restore/{id}','CategoryController@restore')->name('restore_category');
    Route::get('/hdelete/{id}','CategoryController@hdelete')->name('hdelete_category');
});

});

