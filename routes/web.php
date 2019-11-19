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
Route::get('/', 'frontend\FrontContinentController@index');
Route::get('/{id}', 'frontend\FrontPackageController@getPackagesFromContinent');

// == Package Page
Route::get('/packages', 'frontend\FrontPackageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//== Admin Dashboard Route==
Route::get('/dashboard', 'backend\DashboardController@index')->name('dashboard.index');

// ==Admin Continent Route ==
Route::get('/continent', 'backend\ContinentController@index')->name('continent.index');
