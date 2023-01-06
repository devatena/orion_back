<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BudgetsController;

Route::post('/budget/register', [BudgetsController::class, 'store']);
Route::patch('/budget/{id}', [BudgetsController::class, 'update'])->where('id', '[0-9]+');
Route::delete('/budget/delete/{id}', [BudgetsController::class, 'destroy'])->where('id', '[0-9]+');
Route::get('/budget', [BudgetsController::class, 'index']);
