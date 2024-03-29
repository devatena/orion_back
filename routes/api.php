<?php

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
Route::middleware('auth:sanctum')->get('/clients', function (Request $request) {
    return $request->Client();
});
Route::middleware('auth:sanctum')->get('/prospects', function (Request $request) {
    return $request->Prospect();
});
Route::middleware('auth:sanctum')->get('/services', function (Request $request) {
    return $request->Service();
});
Route::middleware('auth:sanctum')->get('/budgets', function (Request $request) {
    return $request->Budget();
});

require __DIR__.'/user/auth.php';
require __DIR__.'/client/clients.php';
require __DIR__.'/prospect/prospects.php';
require __DIR__.'/service/services.php';
require __DIR__.'/budget/budgets.php';
