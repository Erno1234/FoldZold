<?php

use App\Http\Controllers\BejegyzesekController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/bejegyzes', [BejegyzesekController::class, 'index']);
Route::post('/bejegyzes/create', [BejegyzesekController::class, 'store']);
Route::get('/bejegyzes/{id}', [BejegyzesekController::class, 'show']);
Route::put('/bejegyzes/edit/{id}', [BejegyzesekController::class, 'update']);
