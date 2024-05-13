<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kontak;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        //
    }

    public function show(Blog $blog, String $slug)
    {
        $blogDetail = $blog->where('slug', $slug)->first();

        $data = [
            'title' => $blogDetail['title'],
            'kontaks' => Kontak::all(),
            'blog' => $blogDetail
        ];

        return view('blog.detail', $data);
    }
}
