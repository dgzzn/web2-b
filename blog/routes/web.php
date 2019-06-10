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

Route::get('/', 'PostController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

# post
Route::get('/autor/post', 'HomeController@getPostForm')->name('post.form');
Route::post('/autor/post', 'HomeController@createPost')->name('post.form');
Route::get('/autor/post/detalhe/{id}', 'HomeController@getPost')->name('post.detalhe');
Route::get('/autor/post/edit/{id}', 'HomeController@editPost')->name('post.edit');
Route::post('/autor/post/edit/{id}', 'HomeController@updatePost')->name('post.update');
Route::get('/autor/post/delete/{id}', 'HomeController@deletePost')->name('post.delete');
Route::get('/post/full/{post_id}', 'PostController@getFullPost')->name('post.read');