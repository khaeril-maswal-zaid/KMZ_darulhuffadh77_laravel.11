<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kontak;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(): View
    {
        $data = [];
        return view('blog.index', $data);
    }

    public function show(Blog $blog): View
    {
        $data = [
            'title' => $blog->title,
            'kontaks' => Kontak::all(),
            'blog' => $blog
        ];

        return view('blog.detail', $data);
    }

    public function profilPimpinan(Blog $blog): View
    {
        $data = [
            'title' => $blog->title,
            'kontaks' => Kontak::all(),
            'blog' => $blog
        ];

        return view('blog.profilpimpinan', $data);
    }

    public function tentangKulikuler(Blog $blog): View
    {
        $data = [
            'title' => $blog->title,
            'kontaks' => Kontak::all(),
            'blog' => $blog
        ];

        return view('blog.tentang-kulikuler', $data);
    }

    public function blogger(Blog $blog, $kategori): View
    {
        $kategori = ($kategori == 'default') ? 'khusus-umum-165' : $kategori;

        $blogs = $blog::whereHas('kategori', function (Builder $query) use ($kategori) {
            $query->where('category', $kategori);
        })->orderBy('id', 'desc')->paginate(10);

        $data = [
            'blogs' => $blogs
        ];

        return view('admin.blogger', $data);
    }

    public function tentangProfil(Blog $blog): View
    {
        $data = [
            'title' => '',
            'blog' => $blog
        ];

        return view('admin.tentang-profil', $data);
    }

    public function forAdminKulikuler(Blog $blog): View
    {
        $data = [
            'title' => '',
            'blog' => $blog
        ];

        return view('admin.tentang-kulikuler', $data);
    }
}
