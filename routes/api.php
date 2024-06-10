<?php

use App\Http\Controllers\Api\getTholabahsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/personil-kulikuler/{identifier}/{jkAdmin}', [getTholabahsController::class, 'getPersonilKulikuler']);
