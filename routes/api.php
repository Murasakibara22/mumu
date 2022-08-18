<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParentController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/parents', [ParentController::class, 'store']);
Route::get('/parents', [ParentController::class, 'index']);
Route::get('/parents/{id}', [ParentController::class, 'show']);
Route::put('/parents/{id}',[ParentController::class, 'updateParents']);
Route::delete('/parents/{id}',[ParentController::class, 'deleteParents']);


Route::post('/eleves', [ElevesController::class, 'newEleve']);
Route::get('/eleves', [ElevesController::class, 'listAll']);
Route::get('/eleves/{id}', [ElevesController::class, 'listOne']);
Route::put('/eleves/{id}', [ElevesController::class, 'updateEleves']);
Route::delete('/eleves/{id}', [ElevesController::class, 'deleteEleves']);
