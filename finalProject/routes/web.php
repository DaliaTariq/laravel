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

/*============================================================
   Halls Routes
 ===========================================================*/
 Route::prefix('hall')->group(function (){
    Route::get('/index','HallController@index')->name('index_hall');
    Route::get('/create','HallController@create')->name('create_hall');
    Route::post('/store','HallController@store')->name('store_hall');
    Route::get('/edit/{id}','HallController@edit')->name('edit_hall');
    Route::post('/update/{id}','HallController@edit')->name('update_hall');
    Route::get('/delete/{id}','HallController@destroy')->name('destroy_hall');
 });


 /*============================================================
  Storage Routes
 ===========================================================*/
 Route::prefix('storage')->group(function (){
    Route::get('/index','StorageController@index')->name('index_storage');
    Route::get('/create','StorageController@create')->name('create_storage');
    Route::post('/store','StorageController@store')->name('store_storage');
    Route::get('/edit/{id}','StorageController@edit')->name('edit_storage');
   Route::post('/update/{id}', 'StorageController@update')->name('update_storage');
 });

});

