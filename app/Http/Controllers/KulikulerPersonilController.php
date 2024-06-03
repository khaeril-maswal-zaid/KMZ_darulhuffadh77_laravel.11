<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\KulikulerPersonil;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class KulikulerPersonilController extends Controller
{
    //Pengurus
    public function index(KulikulerPersonil $personil, $nameKulikuler): View
    {
        $personilKulikuler = $personil::whereHas('kulikuler', function (Builder $query) use ($nameKulikuler) {
            $query->where('enum', $nameKulikuler);
        })->orderBy('id', 'desc')->get();

        $data = [
            'title' => $personilKulikuler[0]->kulikuler->name,
            'kontaks' => Kontak::all(),
            'personilkulikulers' => $personilKulikuler
        ];

        return view('kulikuler.pengurus', $data);
    }

    public function forAdmin(KulikulerPersonil $personil, $nameKulikuler): View
    {
        $personilKulikuler = $personil::whereHas('kulikuler', function (Builder $query) use ($nameKulikuler) {
            $query->where('enum', $nameKulikuler);
        })->orderBy('id', 'desc')->paginate(10);

        $data = [
            'title' => '',
            'personilkulikulers' => $personilKulikuler
        ];

        return view('admin.personil-kulikuler', $data);
    }
}
