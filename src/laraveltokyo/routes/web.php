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

Route::get('/hello', 'HelloController@index')->middleware('MyMW');

Route::get('/hello/{id}', 'HelloController@index')->middleware(App\Http\Middleware\MyMiddleware::class);
