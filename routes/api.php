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

Route::post('/widgets',                 'WidgetController@index')->middleware('auth:api');
Route::post('/widgets/add',             'WidgetController@add')->middleware('auth:api');
Route::post('/widgets/edit',            'WidgetController@edit')->middleware('auth:api');
Route::post('/widgets/delete',          'WidgetController@delete')->middleware('auth:api');
Route::post('/widgets/sort',            'WidgetController@sort')->middleware('auth:api');