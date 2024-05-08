<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        //
    }

    public function show(Blog $blog, String $slug)
    {
        return view('blog.detail', [
            'data' => $blog->where('slug', $slug)->first()->toArray()
        ]);
    }
}
