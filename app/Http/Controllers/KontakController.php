<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'Kontak',
            'kontaks' => Kontak::all()->where('medsos', '!=', 'Maps'),
            'maps' => Kontak::select('link')->where('medsos', 'Maps')->first()
        ];

        return view('kontak.index', $data);
    }
}
