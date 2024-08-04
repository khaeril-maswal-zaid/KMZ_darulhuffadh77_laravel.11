<?php

use App\Http\Controllers\Api\getTholabahsController;
use App\Http\Controllers\Api\getBlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/personil-kulikuler/{identifier}/{jkAdmin}', [getTholabahsController::class, 'getPersonilKulikuler']);
Route::get('/tholabah/{identifier}/{jkAdmin}', [getTholabahsController::class, 'getTholabah'])->name('api.tholabah');

Route::get('/blog/{blog:slug}', [getBlogController::class, 'show']);
