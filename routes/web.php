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
    return view('welcome');
});

/*route::get('/contact/{name}/{id}',function($name,$id){
echo "Bonjour"." ".$name." ".$id;
});*/

/*route::get('/contact/{name}',function($name){
echo "Bonjour"." ".$name;
})->where('name','[0-9]+');*/

route::get('/contact/{name}/{id}','TestController@Testdata');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/test1',function(){
	return view ('test.test1');
});
Route::get('/test2',function(){
	return view ('test.test2');
});
Route::get('/test3',function(){
	return view ('test.test3');
});