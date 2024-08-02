<?php

namespace App\Http\Controllers;

use App\Models\Ikdh;
use App\Models\Kontak;
use Illuminate\Http\Request;

class IkdhController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Ikatan Keluarga Darul Huffadh',
            'kontaks' => Kontak::all(),
            'ikdhs' => Ikdh::all()
        ];

        return view('ikdh.index', $data);
    }
}
