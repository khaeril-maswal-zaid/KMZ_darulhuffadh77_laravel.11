<?php

namespace App\Http\Controllers;

use App\Models\Kulikuler_personil;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class KulikulerController extends Controller
{
    //Pengurus
    public function index(Kulikuler_personil $personil, $nameKulikuler)
    {
        $personilKulikuler = $personil::whereHas('kulikuler', function (Builder $query) use ($nameKulikuler) {
            $query->where('enum', $nameKulikuler);
        })->get();

        $data = [
            'title' => '',
            'personilkulikulers' => $personilKulikuler
        ];

        return view('kulikuler.pengurus', $data);
    }

    //Tentang
    public function show(Blog $blog, String $slug)
    {
        $blogDetail = $blog->where('slug', $slug)->first();

        $data = [
            'title' => $blogDetail['title'],
            'blog' => $blogDetail
        ];

        return view('kulikuler.detail', $data);
    }
}
