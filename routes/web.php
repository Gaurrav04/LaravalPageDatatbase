<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register','App\Http\Controllers\AuthController@register')->name('register');
Route::post('/register','App\Http\Controllers\AuthController@insert1fun')->name('insert1');
Route::get('/details','App\Http\Controllers\AuthController@details')->name('details');
Route::post('/details','App\Http\Controllers\AuthController@insert2fun')->name('insert2');
Route::get('/login','App\Http\Controllers\AuthController@login')->name('login');
Route::post('/login','App\Http\Controllers\AuthController@vals')->name('vals');
Route::get('/home','App\Http\Controllers\AuthController@home')->name('home');
