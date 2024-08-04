<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tholabah;
use Illuminate\Http\Request;

class getTholabahsController extends Controller
{
    function getTholabah($identifier, $jkAdmin)
    {
        $tholabah = Tholabah::where('nama', 'LIKE', '%' . $identifier . '%')->orWhere('nisdh', 'LIKE', '%' . $identifier . '%')->firstOrFail();

        if ($jkAdmin != $tholabah->jenis_kelamin) {
            return response()->json(['message' => 'Error, Anda melampui batas'], 400);
        } elseif (!isset($tholabah)) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json([
            'nama' => $tholabah->nama,
            'jenis_kelamin' => $tholabah->jenis_kelamin,
            'tempat_lahir' => $tholabah->tempat_lahir,
            'tanggal_lahir' => $tholabah->tanggal_lahir,
            'provinsi' => $tholabah->provinsi,
            'kabupaten' => $tholabah->kabupaten,
            'kecamatan' => $tholabah->kecamatan,
            'desa' => $tholabah->desa,
            'nama_ayah' => $tholabah->nama_ayah,
            'nama_ibu' => $tholabah->nama_ibu,
            'pekerjaan_ayah' => $tholabah->pekerjaan_ayah,
            'pekerjaan_ibu' => $tholabah->pekerjaan_ibu,
            'kontak_ayah' => $tholabah->kontak_ayah,
            'kontak_ibu' => $tholabah->kontak_ibu,
            'nisn' => $tholabah->nisn,
            'asal_sekolah' => $tholabah->asal_sekolah,
            'tahun_tamat_sd' => $tholabah->tahun_tamat_sd,
            'experiment' => $tholabah->experiment,
            'nisdh' => $tholabah->nisdh,
            'angkatan' => $tholabah->angkatan,
            'kategori_santri_baru' => $tholabah->kategori_santri_baru,
            'kelas' => $tholabah->kelas,
            'active' => $tholabah->active,
            'kategori' => $tholabah->kategori,
            'depertement' => $tholabah->depertement,
            'kontak' => $tholabah->kontak,
            'marhalah' => $tholabah->marhalah,
            'tahun_alumni' => $tholabah->tahun_alumni,
            'image' => '/storage/' . $tholabah->picture,
        ], 200);
    }
}
