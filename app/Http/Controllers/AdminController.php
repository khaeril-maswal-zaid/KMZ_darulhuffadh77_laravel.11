<?php

namespace App\Http\Controllers;

use App\Models\Tholabah;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(): View
    {
        $jkAdmin = Auth::user()->jenis_kelamin;

        $santribaru = Tholabah::where('kategori_santri_baru', 'Verified')->where('jenis_kelamin', $jkAdmin)->count();
        $santri = Tholabah::where('kategori', 'Tholabun')->where('jenis_kelamin', $jkAdmin)->count();
        $pembina = Tholabah::where('kategori', 'Pembina')->whereNot('depertement', 'Pengabdian luar')->where('jenis_kelamin', $jkAdmin)->count();
        $alumni = Tholabah::where('kategori', 'Alumni')->where('jenis_kelamin', $jkAdmin)->count();

        $data = [
            'santribaru'=>  $santribaru,
            'santri' => $santri,
            'pembina' =>  $pembina,
            'alumni' => $alumni,
        ];

        return view('admin.index', $data);
    }

    public function eror404(): View
    {
        $data = [];

        return view('errors.404-admin', $data);
    }
}
