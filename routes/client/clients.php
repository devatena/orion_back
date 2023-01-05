<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClientsController;

Route::post('/client/register', [ClientsController::class, 'store']);
Route::patch('/{id}', [ClientsController::class, 'update'])->where('id', '[0-9]+');
Route::delete('/{id}', [ClientsController::class, 'destroy'])->where('id', '[0-9]+');
