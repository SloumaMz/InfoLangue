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
Route::get('/',function () {
   return view('welcome'); 
});

Auth::routes();
Route::get('/home','HomeController@index')->name('home');
Route::get('/formation','FormationController@index');
Route::get('/formation/create','FormationController@create');
Route::post('/formation','FormationController@store');
Route::get('/formation/{id}/edit','FormationController@edit');
Route::put('/{id}','FormationController@update');
?>