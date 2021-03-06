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
/*
Route::get('/', function () {
    return view('welcome');
    //return 'hello world !';
});
*/
Route::get('articles','ArticleController@index');
Route::get('article/{article}', 'ArticleController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//後台GROUP優化
Route::prefix('admin')->middleware('auth')->group(function (){

    Route::get('article', 'Admin\ArticleController@index');
    Route::get('article/create', 'Admin\ArticleController@create');
    Route::post('article', 'Admin\ArticleController@store');
    Route::delete('article/{article}', 'Admin\ArticleController@delete')->name('admin.article.delete'); //別名 取代寫死路徑 index6
    Route::get('article/{article}/edit/', 'Admin\ArticleController@edit')->name('admin.article.edit');
    Route::put('article/{article}','Admin\ArticleController@update')->name('admin.article.update');

    //index.blade.php
});