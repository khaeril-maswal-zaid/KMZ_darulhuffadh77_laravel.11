<?php

namespace App\Http\Controllers;

use App\Models\Tholaba;
use Illuminate\Http\Request;

class TholabaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [];

        return view('tholaba.index', $data);
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
    public function show(Tholaba $tholaba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tholaba $tholaba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tholaba $tholaba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tholaba $tholaba)
    {
        //
    }
}
