<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function () {
    echo"Home";
});
Route::get('/contacts','ContactsController@index');
Route::get('/contact','ContactController@index');
Route::post('/save-contacts','ContactsController@save');
route::get('/about',function(){
    return view('about');
});
Route::get('/index', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
route::get('/','IndexController@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
