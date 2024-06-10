<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tholabah;
use Illuminate\Http\Request;

class getTholabahsController extends Controller
{
    function getPersonilKulikuler($identifier, $jkAdmin)
    {
        $tholabah = Tholabah::where('nama', 'LIKE', '%' . $identifier . '%')->orWhere('nisdh', 'LIKE', '%' . $identifier . '%')->firstOrFail();

        if ($jkAdmin == $tholabah->jenis_kelamin) {
            return response()->json([
                'nisdh' => $tholabah->nisdh,
                'nama' => $tholabah->nama,
                'kelas' => $tholabah->kelas,
                'alamat' => $tholabah->kabupaten . ', ' . $tholabah->provinsi,
                'image' => '/storage/' . $tholabah->picture,
            ], 200);
        } else {
            return response()->json([
                'nisdh' => 'NISDH or name not found',
                'nama' => 'NISDH or name not found',
                'kelas' => 'NISDH or name not found',
                'alamat' => 'NISDH or name not found',
                'image' => '/assets/img/pendiri-kh-lanre-said.jpg',
            ], 200);
        }
    }
}
