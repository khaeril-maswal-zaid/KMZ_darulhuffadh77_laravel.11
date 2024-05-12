<?php

namespace App\Http\Controllers;

use App\Models\Ikdh;
use Illuminate\Http\Request;

class IkdhController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Ikatan Keluarga Darul Huffadh',
            'ikdhs' => Ikdh::all()
        ];

        return view('ikdh.index', $data);
    }
}
