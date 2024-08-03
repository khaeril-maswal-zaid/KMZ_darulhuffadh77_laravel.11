<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $data = [
            'title' => false,
            'kontaks' => Kontak::all(),
        ];

        return view('home.index', $data);
    }
}
