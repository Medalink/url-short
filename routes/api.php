<?php

use App\Http\Controllers\API\ShortenController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::put('shorten-url', [ShortenController::class, 'store'])
    ->middleware('auth:sanctum');

Route::get('view-urls', [ShortenController::class, 'view'])
    ->middleware('auth:sanctum');
