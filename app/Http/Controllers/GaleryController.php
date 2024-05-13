<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Galeri Pondok',

            'kontaks' => Kontak::all(),
        ];

        return view('galery.index', $data);
    }
}
