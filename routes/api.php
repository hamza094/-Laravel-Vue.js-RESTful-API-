<?php

use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\FilterController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiresource('/companies', CompanyController::class);

Route::get('/filters', [FilterController::class, 'index']);

Route::fallback(function () {
    return response()->json([
        'message' => 'Page you are looking for is not found might be wrong url. If error persists, contact hamza_pisces@live.com', ], 404);
});
