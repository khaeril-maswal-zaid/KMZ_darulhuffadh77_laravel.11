<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kontak;
use App\Models\Penerimaan;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PenerimaanController extends Controller
{
    public function index(): View
    {
        $data = [
            'title' => 'Penerimaan Santri Baru',
            'kontaks' => Kontak::all(),
            'pendiri' => Blog::select('picture1')->where('slug', 'profil-pendiri-kh-lanre-said')->firstOrFail(),
            'penerimaans' => Penerimaan::all()
        ];
        return view('penerimaan.index', $data);
    }

    public function create(): View
    {
        $data = [
            'penerimaans' => Penerimaan::all()
        ];

        return view('admin.penerimaan', $data);
    }

    public function update(Request $request, Penerimaan $penerimaan): RedirectResponse
    {
        $penerimaan->update(['body' => $request->input('content')]);

        return redirect()->route('more.penerimaan')->with('success', 'Update data Successful');
    }
}
