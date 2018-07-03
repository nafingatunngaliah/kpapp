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

//Route::get('/index', 'HomeController@index')->name('index');

Route::get('/', 'IndexController@index')->name('index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/viewpost', 'HomeController@viewPost')->name('viewpost');
Route::get('/addpost', 'HomeController@addPost')->name('addpost');
