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

use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([HelloMiddleware::class])->group(function () {
    Route::get('/hello', 'HelloController@index');
    Route::get('hello/other', 'HelloController@other');
});

//下記のようにすることでControllersフォルダ内のControllerをグループとしてまとめて整理して設定できる
Route::namespace('Sample')->group(function () {
    Route::get('/sample', 'SampleController@index');
    Route::get('/sample/other', 'SampleController@other');
});

//上記のようにしない場合は、こうなる
//今回の例のように名前空間が、Controllers\Sample\XXXXXController.phpならまだ簡単だが、
//Controllers\Sample\SampleA\SampleA1\XXXXXController.phpだと複雑化するので、上記のようにグループ化してまとめておいた方がいい。
// Route::get('/sample', 'Sample\SampleController@index');
// Route::get('/sample/other', 'Sample\SampleController@other');
