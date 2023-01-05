<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClientsController;

Route::post('/client/register', [ClientsController::class, 'store']);
Route::patch('/client/{id}', [ClientsController::class, 'update'])->where('id', '[0-9]+');
Route::delete('/client/delete/{id}', [ClientsController::class, 'destroy'])->where('id', '[0-9]+');
Route::get('/client', [ClientsController::class, 'index']);
