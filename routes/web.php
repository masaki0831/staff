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

Route::get('/', 'StaffController@index' )->middleware('auth');
Route::get('create','StaffController@add')->middleware('auth');
Route::post('create','StaffController@create')->middleware('auth');
Route::get('edit','StaffController@edit')->middleware('auth');
Route::post('edit','StaffController@update')->middleware('auth');
Route::get('delete','StaffController@delete')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
