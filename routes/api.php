<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

Route::post('/auth/login', 'Api\AuthController@login');
Route::post('/auth/register', 'Api\AuthController@register');

Route::group(['middleware' => 'auth:api'], function () {
  Route::get('/auth/details', 'Api\AuthController@details');
});
/*Productos*/
Route::get('/productos', 'ProductoController@getAll');
//Route::get('/productos', 'ProductoController@getById');
Route::post('/productos', 'ProductoController@create');
Route::put('/productos', 'ProductoController@edit');
Route::delete('/productos', 'ProductoController@delete');
/*Clientes*/
Route::get('/clientes', 'ClienteController@getAll');
//Route::get('/clientes', 'ClienteController@getById');
Route::post('/clientes', 'ClienteController@create');
Route::put('/clientes', 'ClienteController@edit');
Route::delete('/clientes', 'ClienteController@delete');
/*Ventas*/
Route::get('/ventas', 'VentaController@getAll');
//Route::get('/ventas', 'VentaController@getById');
Route::post('/ventas', 'VentaController@create');
Route::put('/ventas', 'VentaController@edit');
Route::delete('/ventas', 'VentaController@delete');