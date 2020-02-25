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



//home page 
Route::get('/', 'home@home');
Route::get('/saving', 'SavingsController@saving');


//savings controller

Route::get('/savings', 'SavingsController@savings');
Route::get('/savings/purchases', 'SavingsController@purchases');
Route::post('/savings/purchases', 'SavingsController@store');


//users controller
Route::post('/users/page', 'UsersController@store');
Route::get('/users/page', 'UsersController@page');
Route::get('/users', 'UsersController@users');

