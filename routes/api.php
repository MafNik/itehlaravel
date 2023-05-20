<?php

use App\Http\Controllers\NarudzbinaController;
use App\Http\Controllers\ProizvodController;
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
Route::get('/proizvodi', [ProizvodController::class, 'index']);
Route::get('/proizvodi/{id}', [ProizvodController::class, 'show']);
Route::delete('/proizvodi/{id}', [ProizvodController::class, 'destroy']);
Route::post('/proizvodi', [ProizvodController::class, 'store']);
Route::put('/proizvodi/{id}', [ProizvodController::class, 'update']);

Route::get('/order', [NarudzbinaController::class, 'index']);
Route::get('/order/{id}', [NarudzbinaController::class, 'show']);




