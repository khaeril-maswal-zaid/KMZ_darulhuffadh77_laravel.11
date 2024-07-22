<?php

namespace App\Http\Controllers;

use App\Models\AktivitasSantri;
use App\Models\Kontak;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class AktivitasSantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = [
            'title' => 'Aktivitas Santri Santriwati',

            'kontaks' => Kontak::all(),

            'harians' => AktivitasSantri::all()->where('kategori', 'harian'),
            'mingguans' => AktivitasSantri::all()->where('kategori', 'mingguan'),
        ];

        return view('aktivitas.index', $data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'harians' => AktivitasSantri::all()->where('kategori', 'harian'),
            'mingguans' => AktivitasSantri::all()->where('kategori', 'mingguan'),
        ];

        return view('admin.aktivitas-santri', $data);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //Validasi ------------------------------
        $request->validate([
            'time1' => 'required',
            'time2' => 'required',
            'agenda' => 'required|max:35',
            'image' => ['required', File::image()->max(400)]
        ], [
            'time1' => 'Waktu Wajib diisi',
            'time2' => 'Waktu Wajib diisi',
            'agenda' => 'Agenda Wajib diisi',

            'image.image' => 'Unggahan harus format picture',
            'image.required' => 'Wajib unggah image',
            'image.max' => 'Size maksimal 400 kb',
        ]);


        if ($request->input('hari') == 'Setiap hari') {
            $kategori = 'harian';
        } else {
            $kategori = 'mingguan';
        }

        $data = [
            'kategori' => $kategori,
            'hari' => $request->input('hari'),
            'waktu' => $request->input('time1') . ' - ' . $request->input('time2'),
            'agenda' => $request->input('agenda'),
            'picture' => $request->file('image')->store('aktivitas'),
        ];

        AktivitasSantri::create($data);
        return redirect()->route('aktivitassantri.admin')->with('success', 'Activities Addition Successful');
    }

    /**
     * Display the specified resource.
     */
    public function show(AktivitasSantri $aktivitas_santri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AktivitasSantri $aktivitas_santri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AktivitasSantri $aktivitas_santri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AktivitasSantri $aktivitas_santri)
    {
        $aktivitas_santri->delete();
        return redirect()->route('aktivitassantri.admin')->with('success', 'Data has been successfully deleted');
    }
}
