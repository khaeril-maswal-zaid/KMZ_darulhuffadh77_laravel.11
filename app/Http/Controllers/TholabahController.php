<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Tholabah;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TholabahController extends Controller
{
    public function index(Tholabah $tholabah, String $tingkatan, String $jk = 'all'): View
    {
        // dd($tingkatan, $jk);

        $getTholabah = $tholabah::where('kategori_santri_baru', 'Done')->where('jenis_kelamin', $jk)->where('kategori', $tingkatan)->paginate(24);

        if ($jk == 'all') {
            $getTholabah = $tholabah::where('kategori_santri_baru', 'Done')->where('kategori', $tingkatan)->paginate(24);
        }

        $data = [
            'title' => $tingkatan,
            'kontaks' => Kontak::all(),
            'tholabahs' => $getTholabah
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


    //ADMIN-----------------------------------------
    //-----------------------------------------------
    public function adminSantriBaru(Tholabah $tholabah): View
    {
        $jkAdmin = 'Laki-laki';

        $data = [
            'santribarus' => $tholabah::where('jenis_kelamin', $jkAdmin)->where('kategori', 'csb-165')->whereNot('kategori_santri_baru', 'Done')->orderBy('id', 'desc')->paginate(10),
        ];

        return view('admin.master-data-santri-baru', $data);
    }

    public function santriSantriwati(Tholabah $tholabah): View
    {
        $jkAdmin = 'Laki-laki';

        $data = [
            'tholabahs' => $tholabah::where('jenis_kelamin', $jkAdmin)->where('kategori', 'Tholabun')->where('kategori_santri_baru', 'Tholabun')->orderBy('id', 'desc')->paginate(10),
        ];

        return view('admin.master-data-santri-santriwati', $data);
    }

    public function masterData(Tholabah $tholabah, $tingkatan, $santriBaru): View
    {
        $jkAdmin = 'Laki-laki';

        if ($santriBaru) {
            $datamaster = $tholabah::where('jenis_kelamin', $jkAdmin)->where('kategori', 'csb-165')->whereNot('kategori_santri_baru', 'Done')->orderBy('id', 'desc')->paginate(10);
        } else {
            $datamaster = $tholabah::where('jenis_kelamin', $jkAdmin)->where('kategori', $tingkatan)->where('kategori_santri_baru', 'Done')->orderBy('id', 'desc')->paginate(10);
        }


        $data = [
            'datamasters' => $datamaster
        ];

        return view('admin.master-data', $data);
    }

    public function show(Tholabah $tholabah): View
    {
        $data = [
            'details' => $tholabah,
        ];

        return view('admin.master-data-detail', $data);
    }
}
