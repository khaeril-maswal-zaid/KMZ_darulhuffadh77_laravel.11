<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => false,
            'kontaks' => Kontak::all(),
        ];

        return view('home.index', $data);
    }
}
