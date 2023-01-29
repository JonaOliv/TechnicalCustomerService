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

Route::get('/', 'App\Http\Controllers\HomeController@home')->name("pages.home");
Route::get('/home', 'App\Http\Controllers\HomeController@home')->name("pages.home");
Route::get('/login', 'App\Http\Controllers\LoginController@login')->name("pages.login");
Route::get('/customer_attention', 'App\Http\Controllers\CustomerAttentionController@customer_attention')->name("pages.customer_attention");