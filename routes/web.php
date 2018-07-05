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


Route::get('/', 'IndexController@index')->name('index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Fitur Post
Route::get('/viewpost', 'PostController@viewPost')->name('viewpost');
Route::get('/post-tambah', 'PostController@getFormTambahPost')->name('post-tambah');
Route::post('/post-tambah', 'PostController@setFormTambahPost')->name('post-tambah');
Route::get('/post-edit/{id}', 'PostController@editFormTambahPost')->name('post-edit');
Route::post('/post-update/{id}', 'PostController@updateFormTambahPost')->name('post-update');
Route::get('/post-delete/{id}', 'PostController@deletePost');