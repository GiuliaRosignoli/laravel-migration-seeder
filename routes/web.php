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

//Homepage
Route::get('/', 'PageController@index')->name('homepage');

//Contact us
Route::get('/contacts', 'PageController@contacts')->name('contacts');

//Holiday Packages page - new controller used
Route::get('/holidays', 'HolidayController@index')->name('holidays');
