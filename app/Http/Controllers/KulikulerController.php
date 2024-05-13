<?php

namespace App\Http\Controllers;

use App\Models\Kulikuler_personil;
use App\Models\Blog;
use App\Models\Kontak;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class KulikulerController extends Controller
{
    //Pengurus
    public function show(Kulikuler_personil $personil, $nameKulikuler)
    {
        $personilKulikuler = $personil::whereHas('kulikuler', function (Builder $query) use ($nameKulikuler) {
            $query->where('enum', $nameKulikuler);
        })->get();

        $data = [
            'title' => $personilKulikuler[0]->kulikuler->name,
            'kontaks' => Kontak::all(),
            'personilkulikulers' => $personilKulikuler
        ];

        return view('kulikuler.pengurus', $data);
    }

    //Tentang
    public function tentang(Blog $blog, String $slug)
    {
        $blogDetail = $blog->where('slug', $slug)->first();

        $data = [
            'title' => $blogDetail['title'],
            'kontaks' => Kontak::all(),
            'blog' => $blogDetail
        ];

        return view('kulikuler.detail', $data);
    }
}
