<?php

namespace App\Http\Controllers;

use App\Models\Kulikuler;
use App\Models\Blog;
use Illuminate\Http\Request;

class KulikulerController extends Controller
{
    //Pengurus
    public function index(Kulikuler $profil_pimpinan)
    {
        return view('kulikuler.pengurus');
    }

    //Tentang
    public function show(Blog $blog, String $slug)
    {
        return view('kulikuler.detail', [
            'data' => $blog->where('slug', $slug)->first()->toArray()
        ]);
    }
}
