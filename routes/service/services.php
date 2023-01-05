<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ServicesController;

Route::post('/service/register', [ServicesController::class, 'store']);
Route::patch('/service/{id}', [ServicesController::class, 'update'])->where('id', '[0-9]+');
Route::delete('/service/delete/{id}', [ServicesController::class, 'destroy'])->where('id', '[0-9]+');
Route::get('/service', [ServicesController::class, 'index']);
