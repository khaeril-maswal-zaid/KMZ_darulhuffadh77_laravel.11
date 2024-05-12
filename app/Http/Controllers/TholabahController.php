<?php

namespace App\Http\Controllers;

use App\Models\Tholabah;
use Illuminate\Http\Request;

class TholabahController extends Controller
{
    public function index(String $tingkatan, String $jk = 'all')
    {
        $tholabah = Tholabah::where('jenis_kelamin', $jk)->where('kategori', $tingkatan)->paginate(24);

        if ($jk == 'all') {
            $tholabah = Tholabah::where('kategori', $tingkatan)->paginate(24);
        }

        $data = [
            'title' => $tingkatan,
            'tholabahs' => $tholabah
        ];

        return view('tholabah.index', $data);
    }
}
