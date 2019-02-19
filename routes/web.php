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

//Passers Routes
Route::get('/', 'AdminController@passers')->name('passers_list');
Route::get('/passers/add', 'AdminController@add_passers')->name('add_passers');
Route::post('/passers/add', 'AdminController@post_add_passers')->name('post_add_passers');
Route::get('/passers-by-school', 'AdminController@passers_by_school')->name('passers_by_school');
