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

Route::get('/', 'HomeController@firstPage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/createchart', 'HomeController@createChart')->name('createchart');
Route::get('/createSingleChart', 'SingleChartController@index')->name('createSinglechart');
Route::post('/create-single-chart', 'SingleChartController@create')->name('addSingleChart');

Route::get('/createMultiChart', 'MultiChartsController@index')->name('createMultichart');
Route::post('/create-multi-chart', 'MultiChartsController@create')->name('addMultiChart');