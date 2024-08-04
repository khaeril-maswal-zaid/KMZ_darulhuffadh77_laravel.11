<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Kulikuler;
use App\Models\KulikulerPersonil;
use App\Models\Tholabah;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KulikulerPersonilController extends Controller
{
    //Pengurus
    public function index(KulikulerPersonil $personil, $nameKulikuler): View
    {
        $personilKulikuler = $personil::whereHas('kulikuler', function (Builder $query) use ($nameKulikuler) {
            $query->where('enum', $nameKulikuler);
        })->latest()->get();


        //kalau tidak ada ke 404
        abort_unless($personilKulikuler->isNotEmpty(), 404);

        $data = [
            'title' => $personilKulikuler->first()->kulikuler->name,
            'kontaks' => Kontak::all(),
            'personilkulikulers' => $personilKulikuler
        ];

        return view('kulikuler.pengurus', $data);
    }

    public function create($nameKulikuler): View
    {
        //Ambil nama pengurus berdasarkan kulikuler
        $personilKulikuler = KulikulerPersonil::whereHas('kulikuler', function (Builder $query) use ($nameKulikuler) {
            $query->where('enum', $nameKulikuler);
        })->latest()->paginate(10);

        //Ambil kulikuler
        $kulikuler = Kulikuler::where('enum', $nameKulikuler)->first();

        $data = [
            'title' => '',
            'personilkulikulers' => $personilKulikuler,
            'kulikuler' => $kulikuler,
        ];

        return view('admin.personil-kulikuler', $data);
    }

    public function store(Tholabah $tholabah, Request $request): RedirectResponse
    {
        //Alasan pke Tholabah $tholabah karena untuk cek keamanan jkAdmin dan memastikan id is_real

        //Jika yang login tidak sesuai jk admin dan jk tholabah
        if (Auth::user()->jenis_kelamin != $tholabah->jenis_kelamin) {
            return redirect()->route('error.404')->with('waring', 'Jangan Melampaui Batas');
        }

        //Validasi ------------------------------
        $request->validate([
            'kulikuler' => 'required',
            'devisi' => 'required',
            'deskripsi' => 'required|max:100'
        ], [
            'devisi' => 'Devisi Wajib diisi',
            'deskripsi.required' => 'Description Wajib diisi',
            'deskripsi.max' => 'Description max 100 characters',
        ]);


        //Ambil kulikuler
        $kulikuler = Kulikuler::where('enum', $request->input('kulikuler'))->first();

        $data = [
            'kulikuler_id' => $kulikuler->id,
            'santri_id' => $tholabah->id,
            'devisi' => $request->input('devisi'),
            'description' => $request->input('deskripsi'),
        ];

        KulikulerPersonil::create($data);
        return redirect()->route('hardsoftskill.personil', $kulikuler->enum)->with('success', 'Manager Addition Successful');
    }

    public function destroy(KulikulerPersonil $kulikuler_personil, Request $request): RedirectResponse
    {
        $kulikuler_personil->delete();
        return redirect()->route('hardsoftskill.personil', $request->input('kulikuler'))->with('warning', 'Data has been successfully deleted. This data cannot be restored.');
    }
}
