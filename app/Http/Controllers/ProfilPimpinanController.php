<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kontak;
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
    public function show(Blog $blog, String $slug)
    {
        $blogDetail = $blog->where('slug', $slug)->first();

        $data = [
            'title' => $blogDetail['title'],
            'kontaks' => Kontak::all(),
            'blog' => $blogDetail
        ];

        return view('profilpimpinan.index', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
