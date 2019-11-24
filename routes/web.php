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

// ==Admin Sub Continent Route ==
Route::get('/subcontinent/list', 'backend\SubContinentController@index')->name('subcontinent.index');
Route::get('/subcontinent/add', 'backend\SubContinentController@create')->name('subcontinent.add');
Route::post('/subcontinent/store', 'backend\SubContinentController@store')->name('subcontinent.store');
Route::get('/subcontinent/edit/{id}', 'backend\SubContinentController@edit')->name('subcontinent.edit');
Route::put('/subcontinent/update/{id}', 'backend\SubContinentController@update')->name('subcontinent.update');
Route::delete('/subcontinent/delete/{id}', 'backend\SubContinentController@destroy')->name('subcontinent.delete');

// ==Admin Trip Type Route ==
Route::get('/trip-type/list', 'backend\TripTypeController@index')->name('trip_type.index');
Route::get('/trip-type/add', 'backend\TripTypeController@create')->name('trip_type.add');
Route::post('/trip-type/store', 'backend\TripTypeController@store')->name('trip_type.store');
Route::get('/trip-type/edit/{id}', 'backend\TripTypeController@edit')->name('trip_type.edit');
Route::put('/trip-type/update/{id}', 'backend\TripTypeController@update')->name('trip_type.update');
Route::delete('/trip-type/delete/{id}', 'backend\TripTypeController@destroy')->name('trip_type.delete');

// ==Admin Package Route ==
Route::get('/package/list', 'backend\PackageController@index')->name('package.index');
Route::get('/package/add', 'backend\PackageController@create')->name('package.add');
Route::post('/package/store', 'backend\PackageController@store')->name('package.store');
Route::get('/package/edit/{id}', 'backend\PackageController@edit')->name('package.edit');
Route::put('/package/update/{id}', 'backend\PackageController@update')->name('package.update');
Route::delete('/package/delete/{id}', 'backend\PackageController@destroy')->name('package.delete');




