<?php

namespace App\Http\Controllers;

use App\Models\Kulikuler;
use Illuminate\Http\Request;

class KulikulerController extends Controller
{
    //Pengurus
    public function index(Kulikuler $profil_pimpinan)
    {
        return view('kulikuler.pengurus');
    }

    //Tentang
    public function show(Kulikuler $profil_pimpinan)
    {
        return view('kulikuler.detail');
    }
}
