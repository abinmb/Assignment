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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\GameController@index');
Route::get('/create','App\Http\Controllers\GameController@create'); 
Route::post('/','App\Http\Controllers\GameController@store');
Route::get('/{id}/show','App\Http\Controllers\GameController@show');
Route::get('/{id}/edit','App\Http\Controllers\GameController@edit'); 
Route::put('/{id}','App\Http\Controllers\GameController@update'); 
Route::delete('/{id}','App\Http\Controllers\GameController@destroy'); 
Route::get('/display','App\Http\Controllers\GameController@display');