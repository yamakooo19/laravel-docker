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

use App\Http\Controllers\HelloController;
use App\Http\Middleware\HelloMiddleware;
use App\Models\Person;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', 'HelloController@index')->name('hello');
Route::post('/hello', 'HelloController@send');
Route::get('/hello/{person}', 'HelloController@index');
Route::get('/hello/other', 'HelloController@other');

// Route::get('/hello/{id}', 'HelloController@index');
// Route::get('/hello/{id}/{name}', 'HelloController@save');

Route::get('/hello/json', 'HelloController@json');
Route::get('/hello/json/{id}', 'HelloController@json');
