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

// Example Routes
Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Route::get('/corporation', 'CorporationController@index');
Route::get('/corporation/datasets/{datasets}', 'CorporationController@datasets');
Route::post('/corporation/reload-data/{datasets}', 'CorporationController@reload');
Route::get('/corporation/get-datasets/{datasets}', 'CorporationController@getDatasets');

Route::get('/person', 'PersonController@index');
Route::get('/person/datasets/{datasets}', 'PersonController@datasets');
Route::post('/person/reload-data/{datasets}', 'PersonController@reload');
Route::get('/person/get-datasets/{datasets}', 'PersonController@getDatasets');
