<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
                ->whereNot('category_id', '4')
                ->whereNot('category_id', '5')
                ->whereNot('category_id', '6')
                ->latest()->paginate($paginate)
        ];

        return view('home.index', $data);
    }
}
