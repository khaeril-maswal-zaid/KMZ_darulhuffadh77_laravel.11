<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas_santri;
use Illuminate\Http\Request;

class AktivitasSantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'harians' => Aktivitas_santri::all()->where('kategori', 'harian')->toArray(),
            'mingguans' => Aktivitas_santri::all()->where('kategori', 'mingguan')->toArray(),
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
    public function show(Aktivitas_santri $aktivitas_santri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aktivitas_santri $aktivitas_santri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aktivitas_santri $aktivitas_santri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aktivitas_santri $aktivitas_santri)
    {
        //
    }
}
