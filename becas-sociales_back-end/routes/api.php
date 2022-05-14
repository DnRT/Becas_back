<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;
#use App\Http\Controllers\LoginController;

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

Route::middleware('auth:web')->prefix('test')->group(function() {
    Route::apiResource('/alumnos', AlumnosController::class);
/*     Route::post('/login', ['as'=>'login','uses'=>'LoginController@do']);
    Route::get('/login',[LoginController::class, 'validator']); */
});