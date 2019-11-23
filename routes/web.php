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
// == Home page ==
Route::get('/', 'frontend\FrontContinentController@index')->name('front.index');

// == Package Page ==
Route::get('/packages', 'frontend\FrontPackageController@index')->name('front.continent');
Route::get('/packages/{id}', 'frontend\FrontPackageController@getPackagesFromContinent')->name('package.show_package');
Route::get('/packages/details/{id}', 'frontend\FrontPackageController@getPackagesFromContinent')->name('package.show_package_details');
//Route::get('/packages/store', 'frontend\FrontPackageController@store')->name('continent.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//== Admin Dashboard Route==
Route::get('/dashboard', 'backend\DashboardController@index')->name('dashboard.index');

// ==Admin Continent Route ==
Route::get('/continent/list', 'backend\ContinentController@index')->name('continent.index');
Route::get('/continent/add', 'backend\ContinentController@create')->name('continent.add');
Route::post('/continent/store', 'backend\ContinentController@store')->name('continent.store');
Route::get('/continent/edit/{id}', 'backend\ContinentController@edit')->name('continent.edit');
Route::put('/continent/update/{id}', 'backend\ContinentController@update')->name('continent.update');
Route::delete('/continent/delete/{id}', 'backend\ContinentController@destroy')->name('continent.delete');
