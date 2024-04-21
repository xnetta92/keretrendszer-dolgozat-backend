<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpellsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function () {
    return response()->json(['message' => 'Hello World!'], 200);
});

Route::get('/spells', 'App\Http\Controllers\SpellsController@index');
Route::get('/spells/{id}', 'App\Http\Controllers\SpellsController@show');
#Route::patch('/spells/{id}', 'App\Http\Controllers\SpellsController@patch');
Route::post('/spells', 'App\Http\Controllers\SpellsController@store');
Route::put('/spells/{id}', 'App\Http\Controllers\SpellsController@update');
Route::delete('/spells/{id}', 'App\Http\Controllers\SpellsController@destroy');

