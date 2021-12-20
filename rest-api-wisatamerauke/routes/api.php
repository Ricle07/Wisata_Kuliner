<?php

use App\Http\Controllers\GetIdController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisataController; 

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
Route::get('wisata', [WisataController::class, 'index']);
Route::get('idwisata', [GetIdController::class, 'getid']);
Route::post('wisata', [WisataController::class, 'create']);
Route::put('wisata', [WisataController::class, 'update']);
Route::delete('wisata', [WisataController::class, 'delete']);
