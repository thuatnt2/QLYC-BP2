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

Route::group(['middleware' => ['web']], function () {

    // Authentication Routes...
	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('login', 'Auth\LoginController@login');
	Route::get('logout', 'Auth\LoginController@logout')->name('logout');

	Route::group(['middleware' => ['auth']], function() {

	    Route::get('/', 'HomeController@index');
		// Registration Routes...
		Route::get('register/', 'Auth\RegisterController@showRegistrationForm')->name('register');
		Route::post('register/', 'Auth\RegisterController@register');

		// Password Reset Routes...
		Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
		Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
		Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
		Route::post('password/reset', 'Auth\ResetPasswordController@reset');
		
		// Orders
	    Route::resource('orders', 'Admin\OrderController');
		// Units
		Route::resource('units', 'Admin\UnitController');
		// category
		Route::resource('categories', 'Admin\CategoryController');
		// kind
		Route::resource('kinds', 'Admin\KindController');
		// ship
		Route::resource('ships', 'Admin\ShipController');
		// 
		Route::resource('user', 'UserController');
		Route::post('update-status/{id}', ['as' => 'update.status', 'uses' => 'OrderController@updateStatus']);
		Route::get('search', ['as' => 'search', 'uses' => 'OrderController@search']);
		// Statistics
		Route::get('statistics-report', 'StatisticController@getReport');
		Route::post('statistics-report', 'StatisticController@postReport');

		Route::get('statistics-action', 'StatisticController@getAction');
		Route::post('statistics-action', 'StatisticController@postAction');

		Route::get('statistics-unit', 'StatisticController@getUnit');
		Route::post('statistics-unit', 'StatisticController@postUnit');
		Route::get('statistics-advance', 'StatisticController@getAdvance');
		Route::post('statistics-advance', 'StatisticController@postAdvance');
		Route::get('statistics/export/excel',['as' => 'excel', 'uses' => 'StatisticController@exportExcel']);
	});
	
});
// Auth::routes();

// Route::get('/home', 'HomeController@index');
