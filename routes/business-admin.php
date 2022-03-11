<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Business admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register business-admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "business-admin" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index')->name('index.index');
