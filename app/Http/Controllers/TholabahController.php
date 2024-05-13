<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Tholabah;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TholabahController extends Controller
{
    public function index(String $tingkatan, String $jk = 'all'): View
    {
        $tholabah = Tholabah::where('jenis_kelamin', $jk)->where('kategori', $tingkatan)->paginate(24);

        if ($jk == 'all') {
            $tholabah = Tholabah::where('kategori', $tingkatan)->paginate(24);
        }

        $data = [
            'title' => $tingkatan,
            'kontaks' => Kontak::all(),
            'tholabahs' => $tholabah
        ];

        return view('tholabah.index', $data);
    }

    public function penerimaan(): View
    {
        $data = [
            'title' => 'Penerimaan Santri Baru',
            'kontaks' => Kontak::all()
        ];
        return view('penerimaan.index', $data);
    }

    public function pendaftaran(): View
    {
        $data = [
            'title' => 'Pendaftaran Calon Santri Baru',
            'kontaks' => Kontak::all()
        ];

        return view('penerimaan.pendaftaran', $data);
    }
}
