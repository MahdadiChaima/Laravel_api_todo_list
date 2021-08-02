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

Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::post('register', 'App\Http\Controllers\AuthController@register');
Route::post('/logout', 'App\Http\Controllers\AuthController@logout');
Route::post('/storeTask', 'App\Http\Controllers\tasksController@store');
Route::get('/getAllTasks', 'App\Http\Controllers\tasksController@index');
Route::put('/updateTask/{id}', 'App\Http\Controllers\tasksController@updateData');
Route::delete('/delete/{id}', 'App\Http\Controllers\tasksController@destroy');