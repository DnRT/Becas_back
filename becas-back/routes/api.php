<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BecasController;
use App\Http\Controllers\BecaTalentoController;
use App\Http\Controllers\BecaEducacionSuperiorController;

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

Route::prefix('test')->group(function() {
    Route::apiResource('/alumnos', AlumnosController::class);
    Route::apiResource('/administradores', AdminController::class);
    Route::apiResource('/becas', BecasController::class);
    Route::apiResource('/beca_talento', BecaTalentoController::class);
    Route::apiResource('/beca_educacion_superior', BecaEducacionSuperiorController::class);
});