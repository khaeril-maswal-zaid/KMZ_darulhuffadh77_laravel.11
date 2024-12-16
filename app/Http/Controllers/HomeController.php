<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Ikdh;
use App\Models\Kontak;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $paginate = (request('show')) ?: 6;

        $data = [
            'title' => false,
            'kontaks' => Kontak::all(),

            'blogs' => Blog::select('category_id', 'oleh', 'title', 'created_at', 'excerpt', 'slug')
                ->whereNotIn('category_id', ['4', '5', '6'])
                ->latest()->paginate($paginate),

            'eksekutifs' => Blog::select('title', 'excerpt', 'picture1')->whereIn('slug', [
                'profil-pendiri-kh-lanre-said',
                'profil-pimpinan-ust-saad-said',
                'profil-direktur-putra',
                'profil-direktur-putri'
            ])->orderBy('id', 'asc')->get(),

            'ikdhpusats' => Ikdh::whereIn('cabang', ['Pusat', 'anggota-pusat'])->get()
        ];

        return view('home.index', $data);
    }
}
