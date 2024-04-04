<?php

namespace App\Http\Controllers;

use App\Models\Profil_pimpinan;
use Illuminate\Http\Request;

class ProfilPimpinanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Profil_pimpinan $profil_pimpinan)
    {
        return view('profilpimpinan.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profil_pimpinan $profil_pimpinan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profil_pimpinan $profil_pimpinan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profil_pimpinan $profil_pimpinan)
    {
        //
    }
}
