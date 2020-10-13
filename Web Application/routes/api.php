<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('network_interfaces', 'NetworkInterfaceController@store');
Route::get('blocksite', 'BlocksiteController@blocksiteAPI');
Route::get('questions', 'QuestionController@questionAPI');


Route::post('login', 'Auth\LoginController@loginAPI');
Route::post('logout', 'Auth\LoginController@logoutAPI');
