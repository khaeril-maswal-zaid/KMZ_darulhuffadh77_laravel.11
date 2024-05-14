<?php

namespace App\Http\Controllers;

use App\Models\AktivitasSantri;
use App\Models\Kontak;
use Illuminate\Http\Request;

class AktivitasSantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
