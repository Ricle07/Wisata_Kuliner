<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KulinerController; 
use App\Http\Controllers\GetIdController;
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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); 
*/

Route::get('kuliner', [KulinerController::class, 'index']);
Route::get('idkuliner', [GetIdController::class, 'getid']);
Route::post('kuliner', [KulinerController::class, 'create']);
Route::put('kuliner', [KulinerController::class, 'update']);
Route::delete('kuliner', [KulinerController::class, 'delete']);