<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kontak;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Galeri Pondok',
            'kontaks' => Kontak::all(),
            'picturies' => Blog::select('picture1', 'picture2', 'picture3', 'album', 'slug')->latest()->get()
        ];

        return view('galery.index', $data);
    }
}
