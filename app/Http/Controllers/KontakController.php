<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontak = Kontak::all();
        return view('kontak.index', ['kontaks' => $kontak->toArray()]);
    }
}
