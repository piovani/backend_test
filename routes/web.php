<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(["data" => sprintf("sistema rodando na porta: %s", env('APP_PORT'))]);
});
