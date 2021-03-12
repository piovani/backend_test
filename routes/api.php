<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StructureController;

Route::apiResource('users', UserController::class);
Route::apiResource('structures', StructureController::class);
