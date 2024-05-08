<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\callback;

Route::get('/', [HomeController::class, 'index']);

Route::get('/profil-pendiri-kh-lanre-said', [ProfilpimpinanController::class, 'show'])->defaults('slug', 'profil-pendiri-kh-lanre-said');
Route::get('/profil-pimpinan-ust-saad-said', [ProfilpimpinanController::class, 'show'])->defaults('slug', 'profil-pimpinan-ust-saad-said');
Route::get('/profil-direktur-putra', [ProfilpimpinanController::class, 'show'])->defaults('slug', 'profil-direktur-putra');
Route::get('/profil-direktur-putri', [ProfilpimpinanController::class, 'show'])->defaults('slug', 'profil-direktur-putri');

Route::get('/kulliyatul-muallimin-alislamiyah', [BlogController::class, 'show'])->defaults('slug', 'kulliyatul-muallimin-alislamiyah');
Route::get('/tahfidzhul-quran', [BlogController::class, 'show'])->defaults('slug', 'tahfidzhul-quran');


Route::get('/osdha', [KulikulerController::class, 'show'])->defaults('slug', 'osdha');
Route::get('/persidha', [KulikulerController::class, 'show'])->defaults('slug', 'persidha');
Route::get('/pramuka', [KulikulerController::class, 'show'])->defaults('slug', 'pramuka');
Route::get('/djour', [KulikulerController::class, 'show'])->defaults('slug', 'djour');
Route::get('/seni', [KulikulerController::class, 'show'])->defaults('slug', 'seni');

Route::get('/pengurus-osdha', [KulikulerController::class, 'index']);


Route::get('/aktivitas-santri', [AktivitasSantriController::class, 'index']);

Route::get('/sejarah-pendirian-maahad', [BlogController::class, 'show'])->defaults('slug', 'sejarah-pendirian-maahad');
Route::get('/sejarah-pondok-lama', [BlogController::class, 'show'])->defaults('slug', 'sejarah-pondok-lama');
Route::get('/sejarah-pondok-baru', [BlogController::class, 'show'])->defaults('slug', 'sejarah-pondok-baru');

Route::get('/pembina-putra', [TholabaController::class, 'index'])->defaults('slug', 'pembina-putra');
Route::get('/pembina-putri', [TholabaController::class, 'index'])->defaults('slug', 'pembina-putri');
Route::get('/santri', [TholabaController::class, 'index'])->defaults('slug', 'santri');
Route::get('/santriwati', [TholabaController::class, 'index'])->defaults('slug', 'santriwati');
Route::get('/alumni', [TholabaController::class, 'index'])->defaults('slug', 'alumni');

Route::get('/ikdh', [IkdhController::class, 'index']);

Route::get('/galery', [GaleryController::class, 'index']);

Route::get('/kontak', [KontakController::class, 'index']);
