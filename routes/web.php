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

Route::get('contact/', 'ContactController@input'); // 入力画面
Route::patch('contact/', 'ContactController@confirm'); // 確認画面
Route::post('contact/', 'ContactController@finish'); // 完了画面
