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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/show','Crud@index');

Route::get('/insert','Crud@create');
Route::get('/delete/{id}', 'Crud@destroy');
Route::get('/detail/{id}','Crud@show');

Route::post('/save','Crud@store');
Route::post('/update', 'Crud@update');
