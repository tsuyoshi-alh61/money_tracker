<?php

use App\Http\Controllers\MoneyHistoryController;
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

Route::get('moneyHistories', [MoneyHistoryController::class, 'index']);
Route::post('moneyHistories', [MoneyHistoryController::class, 'store']);
Route::put('moneyHistories/{id}', [MoneyHistoryController::class, 'update']);
Route::delete('moneyHistories/{id}', [MoneyHistoryController::class, 'destroy']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
