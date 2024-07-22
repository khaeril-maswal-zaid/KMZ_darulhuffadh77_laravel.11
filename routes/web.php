<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::get('/tentang/{blog:slug}', [BlogController::class, 'profilPimpinan']);

Route::get('/pendidikan/{blog:slug}', [BlogController::class, 'show']); // sengaja berdiri sendiri meskipun tampilan sama

Route::get('/hard-and-soft-skill/{blog:slug}', [BlogController::class, 'tentangKulikuler']);

Route::get('/pengurus/{kulikuler}', [KulikulerPersonilController::class, 'index']);

Route::get('/aktivitas-santri-santriwati', [AktivitasSantriController::class, 'index']);

Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.detail');


Route::get('/pembina-putri', [TholabahController::class, 'index'])->defaults('tingkatan', 'Pembina')->defaults('jk', 'Perempuan');
Route::get('/pembina-putra', [TholabahController::class, 'index'])->defaults('tingkatan', 'Pembina')->defaults('jk', 'Laki-laki');
Route::get('/santri', [TholabahController::class, 'index'])->defaults('tingkatan', 'Tholabun')->defaults('jk', 'Laki-laki');
Route::get('/santriwati', [TholabahController::class, 'index'])->defaults('tingkatan', 'Tholabun')->defaults('jk', 'Perempuan');
Route::get('/alumni', [TholabahController::class, 'index'])->defaults('tingkatan', 'Alumni');

Route::get('/ikatan-keluarga-darul-huffadh', [IkdhController::class, 'index']);

Route::get('/galery', [GaleryController::class, 'index']);

Route::get('/kontak', [KontakController::class, 'index']);

Route::get('/penerimaan-santri-baru', [TholabahController::class, 'informasiPendaftaran'])->name('pendaftaran.informasi');
Route::get('/penerimaan-santri-baru/pendaftaran', [TholabahController::class, 'create'])->name('pendaftaran');
Route::post('/pendaftaran-santri-baru', [TholabahController::class, 'store']);

//------------------------------------------------------------------------------------------

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    //ADMIN---------------------------------------
    Route::get('/admindh', [AdminController::class, 'index']);
    Route::get('/admindh/master-data/santri-baru', [TholabahController::class, 'masterData'])->defaults('tingkatan', false)->defaults('santriBaru', true)->name('masterdata.santribaru');
    Route::get('/admindh/master-data/santri', [TholabahController::class, 'masterData'])->defaults('tingkatan', 'Tholabun')->defaults('santriBaru', false);
    Route::get('/admindh/master-data/santriwati', [TholabahController::class, 'masterData'])->defaults('tingkatan', 'Tholabun')->defaults('santriBaru', false);
    Route::get('/admindh/master-data/pembina', [TholabahController::class, 'masterData'])->defaults('tingkatan', 'Pembina')->defaults('santriBaru', false);
    Route::get('/admindh/master-data/pengabdian-luar', [TholabahController::class, 'masterData'])->defaults('tingkatan', 'Pengabdian luar')->defaults('santriBaru', false);
    Route::get('/admindh/master-data/alumni', [TholabahController::class, 'masterData'])->defaults('tingkatan', 'Alumni')->defaults('santriBaru', false);

    Route::get('/admindh/master-data/{tholabah:nisdh}', [TholabahController::class, 'show'])->name('masterdata.detail');

    Route::put('/admindh/master-data/{tholabah}', [TholabahController::class, 'terimaSantriBaru'])->name('santribaru.terima');
    Route::delete('/admindh/master-data/{tholabah}', [TholabahController::class, 'destroy'])->name('santribaru.delete');


    Route::get('/admindh/blog/{var}', [BlogController::class, 'create'])->name('blogger');
    Route::post('/admindh/blog/create', [BlogController::class, 'store'])->name('blogger.create');
    Route::put('/admindh/blog/{blog:slug}', [BlogController::class, 'update'])->name('blogger.update');
    Route::delete('/admindh/blog/{blog}', [BlogController::class, 'destroy'])->name('blogger.delete');

    Route::get('/admindh/tentang/{blog:slug}', [BlogController::class, 'tentangProfil']);

    Route::get('/admindh/hard-soft-skill', [KulikulerController::class, 'index']);
    Route::get('/admindh/hard-soft-skill/{blog:slug}', [BlogController::class, 'forAdminKulikuler']);
    Route::get('/admindh/pengurus/{kulikuler_personil:var}', [KulikulerPersonilController::class, 'create'])->name('kulikulerpersonil');
    Route::post('/admindh/kulikuler-add/{tholabah:nisdh}', [KulikulerPersonilController::class, 'store'])->name('kulikuler.addpersonil');

    Route::get('/admindh/aktivitas-santri', [AktivitasSantriController::class, 'create'])->name('aktivitassantri.admin');
    Route::post('/admindh/add-aktivitas-santri', [AktivitasSantriController::class, 'store'])->name('aktivitassantri.create');
    Route::delete('/admindh/delete-aktivitas-santri/{aktivitas_santri}', [AktivitasSantriController::class, 'destroy'])->name('akttvitas.delete');

    Route::get('/admindh/kontak', [KontakController::class, 'forAdmin']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
