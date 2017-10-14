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
	-------------------------------------------------
	
	Amzeui route

	-------------------------------------------------
*/ 

Route::any('index','Index\IndexController@index');

Route::any('login','Index\IndexController@login');

Route::any('chart','Index\IndexController@chart');

Route::any('formAmazeui','Index\IndexController@formAmazeui');

Route::any('formLine','Index\IndexController@formLine');

Route::any('formNewsList','Index\IndexController@formNews');

Route::any('tableFontList','Index\IndexController@tableFontList');

Route::any('tableImagesList','Index\IndexController@tableImagesList');