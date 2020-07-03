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


Route::get('/', 'FontendController@index')->name('index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/single/{id}','FontendController@single')->name('single');

Route::group(['prefix'=>'admin'],function(){
    Route::get('/add','PostController@add')->name('add.post');
    Route::post('/store','PostController@store')->name('store.post');
    Route::get('/show','PostController@show')->name('post.show');
    Route::get('/published/{id}','PostController@published')->name('post.published');

    Route::get('/delete/{id}','PostController@delete')->name('post.delete');
    Route::post('/update/{id}','PostController@update')->name('update.status');

});
