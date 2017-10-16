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

Route::group(['prefix'=>'admin'],function(){

	Route::any('index','Index\IndexController@index');

	Route::any('login','Index\IndexController@login');

	Route::any('chart','Index\IndexController@chart');

	Route::any('form','Index\IndexController@form');

	Route::any('calendar','Index\IndexController@calendar');

	Route::any('table','Index\IndexController@table');

	Route::any('table-list-img','Index\IndexController@tableListImg');

	Route::any('table-list','Index\IndexController@tableList');

	Route::any('sign-up','Index\IndexController@signUp');

});

