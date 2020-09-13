<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
// Auth::routes();

route::get('/','IndexController@index');
route::get('/blog','BlogController@indexPosts');
route::get('/category/{category_id}','BlogController@getArticlesByCategory');
route::get('/contact','ContactController@index');
route::post('/send-message','ContactController@SendMessage');
route::get('/blog/article/{article_id}','BlogController@getArticleById');
route::get('/register','RegisterController@registerIndex');
route::post('/register','RegisterController@register');

route::get('/login','LoginController@loginIndex');
route::post('/login','LoginController@login')->name('login');

route::get('/profile','UserController@profile');
route::get('/logout','UserController@logout')->name('logout');

Route::get('/login/facebook','LoginController@redirectToFacebook');
Route::get('/login/facebook/callback','LoginController@handleProviderCallback');










