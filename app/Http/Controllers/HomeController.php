<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Ikdh;
use App\Models\Kontak;
use App\Models\More;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $paginate = (request('show')) ?: 6;

        //----RENCANA DTB KONF
        //carousel
        //jumlah tholabah angka
        //Rekening
        //logo dh
        //logo sub (osdah, persidah, dll, kemenag)

        $data = [
            'title' => false,
            'kontaks' => Kontak::all(),

            //-----------BELUM DI EKSEKUSI DI VIEW --------------
            'carousel' => More::whre("categori", "carousel")->get(),
            'rekening' => More::whre("categori", "rekening")->get(),
            'logoDh' => More::whre("categori", "logo-dh")->get(),
            'vendor' => More::whre("categori", "vendor")->get(),

            'blogs' => Blog::select('category_id', 'oleh', 'title', "picture1", 'created_at', 'excerpt', 'slug')
                ->whereNotIn('category_id', ['4', '5', '6'])
                ->latest()->paginate($paginate),

            'blogKhusus' => Blog::select('title', 'picture1', 'excerpt', 'slug')
                ->whereIn('slug', ['darul-huffadh-milik-seluruh-ummat-muslimin', 'sepenuhnya-ditanggung-bBelajar-di-darul-huffadh-tanpa-biaya-apapun'])->get(),

            'programs' => Blog::select('title', 'excerpt')->whereIn('slug', [
                'kulliyatul-muallimin-alislamiyah',
                'tahfidzhul-quran',
                'pengabdian',
            ])->orderBy('id', 'asc')->get(),

            'eksekutifs' => Blog::select('title', 'excerpt', 'slug', 'picture1')->whereIn('slug', [
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
