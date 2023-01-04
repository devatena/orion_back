<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\clientsController;

Route::post('/client/register', [ClientsController::class, 'store']);
