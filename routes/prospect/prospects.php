<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProspectsController;

Route::post('/prospect/register', [ProspectsController::class, 'store']);
Route::patch('/prospect/{id}', [ProspectsController::class, 'update'])->where('id', '[0-9]+');
Route::delete('/prospect/delete/{id}', [ProspectsController::class, 'destroy'])->where('id', '[0-9]+');
Route::get('/prospect', [ProspectsController::class, 'index']);
