<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'auth'], function(){
	Route::prefix('/user/')->group(function(){
		Route::get('gallery/create', 'GalleryController@galleryCreate')->name('galleryCreate');
		Route::post('gallery/store', 'GalleryController@galleryStore')->name('galleryStore');
		Route::get('gallery/show/{id}', 'GalleryController@galleryShow')->name('galleryShow');
		Route::get('gallery/edit/{id}', 'GalleryController@galleryEdit')->name('galleryEdit');
		Route::post('gallery/update/{id}', 'GalleryController@galleryUpdate')->name('galleryUpdate');
		Route::get('gallery/delete/{id}', 'GalleryController@galleryDelete')->name('galleryDelete');
	});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
