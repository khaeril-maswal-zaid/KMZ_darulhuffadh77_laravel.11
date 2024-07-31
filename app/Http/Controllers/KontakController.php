<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class KontakController extends Controller
{
    public function index(): View
    {

        $data = [
            'title' => 'Kontak',
            'kontaks' => Kontak::whereNot('medsos', 'Maps')->get(),
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

    public function edit(Kontak $kontak): View
    {
        return view('admin.kontak-edit', ['kontak' => $kontak]);
    }

    public function update(Request $request, Kontak $kontak): RedirectResponse
    {
        //Validasi
        $request->validate([
            'labelkontak' => 'required',
            'akunkontak' => 'required',
            'namekontak' => 'required',
            'linkkontak' => 'required',

        ], [
            'labelkontak' =>  'Judul wajib diisi',
            'akunkontak' =>  'Judul wajib diisi',
            'namekontak' =>  'Judul wajib diisi',
            'linkkontak' =>  'Judul wajib diisi',
        ]);

        $data = [
            'medsos' =>  $request->input('labelkontak'),
            'akun' =>  $request->input('akunkontak'),
            'nama' =>  $request->input('namekontak'),
            'link' =>  $request->input('linkkontak'),
            // 'icon' =>  $request->input('kontak'),
        ];

        $kontak->update($data);
        return redirect()->route('index.kontak')->with('success', 'Kontak Edit Successful');
    }
}
