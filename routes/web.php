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

Route::get('/lang/{locale}', function($locale){
	session(['locale'=>$locale]);
	return back();
});

Route::get('/', 'IndexController@index');
Route::get('/aboutUs', 'IndexController@aboutUs');
Route::get('/gallery', 'IndexController@gallery');
Route::get('/sellers', 'IndexController@sellers');
Route::get('/contact', 'IndexController@contact');

Route::get('/posts', 'PostController@posts');
Route::get('/post/{slug}', 'PostController@viewPost');

Route::get('/products/{category?}/{slug?}', 'ProductController@products');
Route::get('/product/{slug}', 'ProductController@viewProduct');

Route::post('/search', 'ProductController@search');

//ajax
Route::post('/sendConsult', 'MessageController@saveConsult');
Route::post('/sendComment', 'MessageController@saveComment');
Route::post('/sendQuestion', 'MessageController@saveQuestion');
Route::post('/sortPost', 'PostController@sortPost');
Route::post('/getDilers', 'IndexController@getDilers');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
