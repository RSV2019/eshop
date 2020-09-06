<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Auth::routes();

route::get('/','IndexController@index');
route::get('/blog','BlogController@indexPosts');
route::get('/category/{category_id}','BlogController@getArticlesByCategory');
route::get('/contact','ContactController@index');
route::post('/send-message','ContactController@SendMessage');
route::get('/blog/article/{article_id}','BlogController@getArticleById');













