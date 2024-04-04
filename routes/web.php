<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::get('/profil-pendiri-kh-lanre-said', [ProfilpimpinanController::class, 'show']);
Route::get('/profil-pimpinan-ust-saad-said', [ProfilpimpinanController::class, 'index']);
Route::get('/profil-direktur-putra', [ProfilpimpinanController::class, 'index']);
Route::get('/profil-direktur-putri', [ProfilpimpinanController::class, 'index']);

Route::get('/kulliyatul-muallimin-alislamiyah', [BlogController::class, 'show']);
Route::get('/tahfidzhul-quran', [BlogController::class, 'show']);

Route::get('/osdha', [KulikulerController::class, 'show']);
Route::get('/pengurus-osdha', [KulikulerController::class, 'index']);
Route::get('/persidah', [KulikulerController::class, 'show']);
Route::get('/pramuka', [KulikulerController::class, 'show']);
Route::get('/djour', [KulikulerController::class, 'show']);
Route::get('/seni', [KulikulerController::class, 'show']);

Route::get('/aktivitas-santri', [AktivitasSantriController::class, 'index']);

Route::get('/sejarah-pendirian-maahad', [HomeController::class, 'index']);
Route::get('/sejarah-pondok-lama', [HomeController::class, 'index']);
Route::get('/sejarah-pondok-baru', [HomeController::class, 'index']);

Route::get('/pembina-putra', [TholabaController::class, 'index']);
Route::get('/pembina-putri', [TholabaController::class, 'index']);
Route::get('/santri', [TholabaController::class, 'index']);
Route::get('/santriwati', [TholabaController::class, 'index']);
Route::get('/alumni', [TholabaController::class, 'index']);

Route::get('/ikdh', [IkdhController::class, 'index']);

Route::get('/galery', [GaleryController::class, 'index']);

Route::get('/kontak', [KontakController::class, 'index']);
