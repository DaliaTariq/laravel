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

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

/*============================================================
Panel control 
 ===========================================================*/

Route::middleware(['auth'])->group(function (){
    /*Home Page*/
Route::get('/home', 'HomeController@index')->name('home');
/*============================================================
   catrgory Routes
 ===========================================================*/
    Route::prefix('category')->group(function (){
        Route::get('/index','CategoryController@index')->name('index_category');
    Route::get('/create','CategoryController@create')->name('create_category');
    Route::post('/store','CategoryController@store')->name('store_category');
    Route::get('/edit/{id}','CategoryController@edit')->name('edit_category');
    Route::post('/update/{id}','CategoryController@update')->name('update_category');
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
    Route::post('/update/{id}','HallController@update')->name('update_hall');
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
   Route::get('/delete/{id}','StorageController@destroy')->name('destroy_storage');
 });

 /*============================================================
  Storage Routes
 ===========================================================*/
 Route::prefix('buty')->group(function (){
  Route::get('/index','butyController@index')->name('index_buty');
 Route::get('/create','butyController@create')->name('create_buty');
  Route::post('/store','butyController@store')->name('store_buty');
 /* Route::get('/edit/{id}','StorageController@edit')->name('edit_storage');
 Route::post('/update/{id}', 'StorageController@update')->name('update_storage');
 Route::get('/delete/{id}','StorageController@destroy')->name('destroy_storage');*/
});



 /*============================================================
  Offers Routes
 ===========================================================*/

 Route::prefix('offers')->group(function (){
   Route::get('/index','offerController@index')->name('index_offer');
   Route::get('/create','offerController@create')->name('create_offer');
   Route::post('/store','offerController@store')->name('store_offer');
   Route::get('/edit/{id}','offerController@edit')->name('edit_offer');
   Route::post('/update/{id}','offerController@update')->name('update_offer');
   Route::get('/delete/{id}','offerController@destroy')->name('destroy_offer');
   Route::get('/trashed','offerController@trashed')->name('trashed_offer');
  Route::get('/restore/{id}','offerController@restore')->name('restore_offer');
  Route::get('/hdelete/{id}','offerController@hdelete')->name('hdelete_offer');
 });
  
});



/*============================================================
   Front End Pages
 ===========================================================*/

 /*Route::get('/', function () {
   return view('users.index');
});*/



    Route::get('/','frontController@index')->name('index');
    Route::get('/halls','frontController@halls')->name('halls');
    Route::post('/dosend','frontController@dosend')->name('dosend');
     Route::get('/category/{id}', 'frontController@servicePage')->name('service_page');
     Route::get('/clothes/{id}', 'frontController@clothes')->name('clothes_page');

   
 

