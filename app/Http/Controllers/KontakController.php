<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index(): View
    {

        $data = [
            'title' => 'Kontak',
            'kontaks' => Kontak::all()->whereNot('medsos', 'Maps'),
            'maps' => Kontak::select('link')->where('medsos', 'Maps')->first()
        ];

        return view('kontak.index', $data);
    }

    public function forAdmin(): View
    {
        $data = [
            'kontaks' => Kontak::all(),
        ];

        return view('admin.kontak', $data);
    }
}
