<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'IndexController@index');//главная страница
Route::get('contact/{id}', 'IndexController@show')->name('contactShow');
Route::post('contact/{id}', 'IndexController@change')->name('contactChange');
Route::get('/insert', 'IndexController@getform')->name('getForm');
Route::post('insert','IndexController@insert')->name('contactInsert');
Route::get('page/delete/{id}', function(\App\Contact $id){
$id->delete();
return redirect('/');
})->name('deleteRecord');
