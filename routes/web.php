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
//Fitur Slider and Home
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/slide-edit/{id_slide}', 'HomeController@editSlider');
Route::post('/home/slide-update/{id_slide}', 'HomeController@setSlider')->name('slide-update');

// Fitur Ulang Tahun
Route::get('/manage-ultah', 'UltahController@index')->name('manage-ultah');
Route::get('/ultah-tambah', 'UltahController@getFormTambah')->name('ultah-tambah');
Route::post('/ultah-tambah', 'UltahController@setFormTambah')->name('ultah-tambah');
Route::get('/ultah-edit/{id_bd}', 'UltahController@editFormTambah')->name('ultah-edit');
Route::post('/ultah-update/{id_bd}', 'UltahController@updateFormTambah')->name('ultah-update');
Route::get('/ultah-delete/{id_bd}', 'UltahController@delete');

// Fitur Post
Route::get('/viewpost', 'PostController@viewPost')->name('viewpost');
Route::get('/lihat-post/{kategori_post}', 'PostController@viewPostKategori');
Route::get('/post-tambah', 'PostController@getFormTambahPost')->name('post-tambah');
Route::post('/post-tambah', 'PostController@setFormTambahPost')->name('post-tambah');
Route::get('/post-edit/{id_post}', 'PostController@editFormTambahPost')->name('post-edit');
Route::post('/post-update/{id_post}', 'PostController@updateFormTambahPost')->name('post-update');
Route::get('/post-delete/{id_post}', 'PostController@deletePost');

//Fitur Buletin
Route::get('/buletin-tambah', 'BuletinController@getFormBuletin')->name('buletin-tambah');
Route::post('/buletin-tambah', 'BuletinController@setFormBuletin')->name('buletin-tambah');
Route::get('/buletin-edit/{id_buletin}', 'BuletinController@editFormBuletin')->name('buletin-edit');
Route::post('/buletin-update/{id_buletin}', 'BuletinController@updateFormBuletin')->name('buletin-update');
Route::get('/buletin-delete/{id_buletin}', 'BuletinController@deleteBuletin');
Route::get('/buletin-view/{file_buletin}', 'BuletinController@index')->name('buletin-view');

// Fitur Comment Post
Route::get('/post-detail/{id_post}', 'CommentController@viewDetailPost')->name('post-detail');
Route::post('/post-detail/{id_post}', 'CommentController@addComment')->name('post-detail/{id_post}');

// Fitur Galeri
Route::get('/galeri', 'GaleriController@index')->name('manage-galeri');
Route::post('/album-tambah', 'GaleriController@setFormTambahAlbum')->name('album-tambah');
Route::get('/galeri-tambah/{id_album}', 'GaleriController@getFormTambah')->name('galeri-tambah/{id_album}');
Route::post('/galeri-tambah/{id_album}', 'GaleriController@setFormTambah')->name('galeri-tambah/{id_album}');
Route::get('/galeri-delete/{id_galeri}', 'GaleriController@delete');

// Error Page
Route::get('/error', 'IndexController@error')->name('error');
