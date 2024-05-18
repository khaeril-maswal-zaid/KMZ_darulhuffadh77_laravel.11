<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\callback;

Route::get('/', [HomeController::class, 'index']);

Route::get('/profil-pendiri-kh-lanre-said', [ProfilpimpinanController::class, 'show'])->defaults('slug', 'profil-pendiri-kh-lanre-said');
Route::get('/profil-pimpinan-ust-saad-said', [ProfilpimpinanController::class, 'show'])->defaults('slug', 'profil-pimpinan-ust-saad-said');
Route::get('/profil-direktur-putra', [ProfilpimpinanController::class, 'show'])->defaults('slug', 'profil-direktur-putra');
Route::get('/profil-direktur-putri', [ProfilpimpinanController::class, 'show'])->defaults('slug', 'profil-direktur-putri');

Route::get('/pendidikan/{var}', [BlogController::class, 'show']);

// Route::get('/kulliyatul-muallimin-alislamiyah', [BlogController::class, 'show'])->defaults('slug', 'kulliyatul-muallimin-alislamiyah');
// Route::get('/tahfidzhul-quran', [BlogController::class, 'show'])->defaults('slug', 'tahfidzhul-quran');
// Route::get('/pengabdian', [BlogController::class, 'show'])->defaults('slug', 'pengabdian');


Route::get('/tentang-osdha', [KulikulerController::class, 'tentang'])->defaults('slug', 'osdha');
Route::get('/tentang-persidha', [KulikulerController::class, 'tentang'])->defaults('slug', 'persidha');
Route::get('/tentang-pramuka', [KulikulerController::class, 'tentang'])->defaults('slug', 'pramuka');
Route::get('/tentang-djour', [KulikulerController::class, 'tentang'])->defaults('slug', 'djour');
Route::get('/tentang-seni', [KulikulerController::class, 'tentang'])->defaults('slug', 'seni');

Route::get('/kulikuler/{var}', [KulikulerController::class, 'show']);

// Route::get('/pengurus-osdha', [KulikulerController::class, 'index'])->defaults('nameKulikuler', 'osdha');
// Route::get('/pengurus-persidha', [KulikulerController::class, 'index'])->defaults('nameKulikuler', 'persidha');
// Route::get('/pengurus-pramuka', [KulikulerController::class, 'index'])->defaults('nameKulikuler', 'pramuka');
// Route::get('/pengurus-djour', [KulikulerController::class, 'index'])->defaults('nameKulikuler', 'djour');
// Route::get('/pengurus-seni', [KulikulerController::class, 'index'])->defaults('nameKulikuler', 'seni');


Route::get('/aktivitas-santri-santriwati', [AktivitasSantriController::class, 'index']);

Route::get('/sejarah-pendirian-maahad', [BlogController::class, 'show'])->defaults('slug', 'sejarah-pendirian-maahad');
Route::get('/sejarah-pondok-lama', [BlogController::class, 'show'])->defaults('slug', 'sejarah-pondok-lama');
Route::get('/sejarah-pondok-baru', [BlogController::class, 'show'])->defaults('slug', 'sejarah-pondok-baru');

Route::get('/pembina-putra', [TholabahController::class, 'index'])->defaults('tingkatan', 'Pembina')->defaults('jk', 'Perempuan');
Route::get('/pembina-putri', [TholabahController::class, 'index'])->defaults('tingkatan', 'Pembina')->defaults('jk', 'Laki-laki');
Route::get('/santri', [TholabahController::class, 'index'])->defaults('tingkatan', 'Tholabun')->defaults('jk', 'Laki-laki');
Route::get('/santriwati', [TholabahController::class, 'index'])->defaults('tingkatan', 'Tholabun')->defaults('jk', 'Perempuan');
Route::get('/alumni', [TholabahController::class, 'index'])->defaults('tingkatan', 'Alumni');

Route::get('/ikatan-keluarga-darul-huffadh', [IkdhController::class, 'index']);

Route::get('/galery', [GaleryController::class, 'index']);

Route::get('/kontak', [KontakController::class, 'index']);

Route::get('/penerimaan-santri-baru', [TholabahController::class, 'penerimaan']);
Route::get('/penerimaan-santri-baru/pendaftaran', [TholabahController::class, 'pendaftaran']);

Route::get('/blog/{blog:slug}', [BlogController::class, 'show']);


//ADMIN---------------------------------------
Route::get('/admindh', [AdminController::class, 'index']);
Route::get('/admindh/master-data/santri-baru', [TholabahController::class, 'adminSantriBaru']);
Route::get('/admindh/master-data/{tholabah:nisdh}', [TholabahController::class, 'show']);
