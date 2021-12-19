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

Route::get('/teste', function () {
   return 'teste bem sucedido';
});


/**
* @param Int $id
* @return String
*/
Route::get('user/{id}', fn(Int $id): String => "user {$id}");

/**
 * @param Int $id
 * @param String|Null $name
 * @return string
 */
Route::get('user/{ida}/{name?}', fn(Int $ida, ?String $name = null): String => "user {$ida}, name {$name}");


/**
 * @param Int $id
 * @return String
 */
Route::get('compra/{id}', fn(Int $id): String => "compra {$id}")->where('$id','[0-9]');
