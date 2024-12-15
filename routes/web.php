<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::get('/profil/{blog:slug}', [BlogController::class, 'profilPimpinan'])->name('profil.show');

Route::get('/pendidikan/{blog:slug}', [BlogController::class, 'show']); // sengaja berdiri sendiri meskipun tampilan sama

Route::get('/hard-and-soft-skill/{blog:slug}', [BlogController::class, 'tentangKulikuler'])->name('hardsoftskill.blog');

Route::get('/personil-hard-and-soft-skill/{kulikuler}', [KulikulerPersonilController::class, 'index'])->name('personil.hardsoftskill');

Route::get('/aktivitas-santri-santriwati', [AktivitasSantriController::class, 'index']);

Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.detail');


Route::get('/pembina-putri', [TholabahController::class, 'index'])->defaults('tingkatan', 'Pembina')->defaults('jk', 'Perempuan');
Route::get('/pembina-putra', [TholabahController::class, 'index'])->defaults('tingkatan', 'Pembina')->defaults('jk', 'Laki-laki');
Route::get('/santri', [TholabahController::class, 'index'])->defaults('tingkatan', 'Tholabun')->defaults('jk', 'Laki-laki');
Route::get('/santriwati', [TholabahController::class, 'index'])->defaults('tingkatan', 'Tholabun')->defaults('jk', 'Perempuan');
Route::get('/alumni', [TholabahController::class, 'index'])->defaults('tingkatan', 'Alumni');

Route::get('/ikatan-keluarga-darul-huffadh', [IkdhController::class, 'index'])->name('ikdh.index');

Route::get('/galery', [GaleryController::class, 'index']);

Route::get('/kontak', [KontakController::class, 'index']);

Route::get('/penerimaan-santri-baru/pendaftaran', [TholabahController::class, 'create'])->name('pendaftaran');
Route::post('/pendaftaran-santri-baru', [TholabahController::class, 'store']);

Route::get('/penerimaan-santri-baru', [PenerimaanController::class, 'index'])->name('penerimaan.index');

//------------------------------------------------------------------------------------------

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    //ADMIN---------------------------------------
    Route::get('/admindh', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/admindh/master-data/{var}', [TholabahController::class, 'masterData'])->name('masterdata.index');
    Route::get('/admindh/master-data/{var}/{tholabah:nisdh}', [TholabahController::class, 'show'])->name('masterdata.detail');

    Route::put('/admindh/master-data-terima-scb/{tholabah}', [TholabahController::class, 'terimaSantriBaru'])->name('santribaru.terima');
    Route::delete('/admindh/master-data-delete-scb/{tholabah}', [TholabahController::class, 'destroy'])->name('santribaru.delete');
    Route::put('/admindh/master-data-actived-tholabah/{tholabah}', [TholabahController::class, 'activateTholabah'])->name('tholabah.actived');
    Route::put('/admindh/master-data-abdian-tholabah/{tholabah}', [TholabahController::class, 'abdianTholabah'])->name('tholabah.abdian');
    Route::put('/admindh/master-data-abdianin-tholabah/{tholabah}', [TholabahController::class, 'abdianinTholabah'])->name('tholabah.abdianin');


    Route::get('/admindh/blog/{var}', [BlogController::class, 'create'])->name('blogger');
    Route::post('/admindh/blog/create', [BlogController::class, 'store'])->name('blogger.store');
    Route::put('/admindh/blog/{blog:slug}', [BlogController::class, 'update'])->name('blogger.update');
    Route::delete('/admindh/blog/{blog}', [BlogController::class, 'destroy'])->name('blogger.delete');

    Route::get('/admindh/tentang/{blog:slug}', [BlogController::class, 'tentangProfil'])->name('eksekutif.blog');

    Route::get('/admindh/hard-soft-skill', [KulikulerController::class, 'index'])->name('hardsoftskill.index');
    Route::post('/admindh/program-add', [KulikulerController::class, 'store'])->name('hardsoftskill.store');
    Route::delete('/admindh/program-delete/{kulikuler}', [KulikulerController::class, 'destroy'])->name('hardsoftskill.destroy');

    Route::get('/admindh/hard-soft-skill/{blog:slug}', [BlogController::class, 'forAdminKulikuler'])->name('hardsoftskill.tentang');
    Route::get('/admindh/personil-hard-and-soft-skill/{var}', [KulikulerPersonilController::class, 'create'])->name('hardsoftskill.personil');
    Route::post('/admindh/add-personil-hard-and-soft-skill/{tholabah:nisdh}', [KulikulerPersonilController::class, 'store'])->name('hardsoftskill.personil.store');
    Route::delete('/admindh/delete-personil-hard-and-soft-skill/{kulikuler_personil}', [KulikulerPersonilController::class, 'destroy'])->name('hardsoftskill.personil.destroy');

    Route::get('/admindh/aktivitas-santri', [AktivitasSantriController::class, 'create'])->name('aktivitassantri.admin');
    Route::post('/admindh/add-aktivitas-santri', [AktivitasSantriController::class, 'store'])->name('aktivitassantri.create');
    Route::delete('/admindh/delete-aktivitas-santri/{aktivitas_santri}', [AktivitasSantriController::class, 'destroy'])->name('akttvitas.delete');

    Route::get('/admindh/kontak', [KontakController::class, 'forAdmin'])->name('kontak.index');
    Route::get('/admindh/kontak/{kontak:slug}', [KontakController::class, 'edit'])->name('kontak.edit');
    Route::put('/admindh/update-kontak/{kontak:slug}', [KontakController::class, 'update'])->name('kontak.update');

    Route::get('/admindh/ikatan-keluarga-darul-huffadh', [IkdhController::class, 'masterData'])->name('ikdh.masterdata');
    Route::delete('/admindh/ikatan-keluarga-darul-huffadh-delete/{ikdh}', [IkdhController::class, 'destroy'])->name('ikdh.destroy');
    Route::post('/admindh/ikatan-keluarga-darul-huffadh-store/{tholabah:nisdh}', [IkdhController::class, 'store'])->name('ikdh.store');

    Route::get('/admindh/informasi-pendaftaran', [PenerimaanController::class, 'create'])->name('more.penerimaan');
    Route::post('/admindh/informasi-pendaftaran/{penerimaan:sub}', [PenerimaanController::class, 'update'])->name('penerimaan.update');

    Route::get('/admindh/errro/404', [AdminController::class, 'eror404'])->name('error.404');
});

Route::middleware('auth')->group(function () {
    Route::get('/profil.showe', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
