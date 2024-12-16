<?php

namespace App\Http\Controllers;

use App\Models\Ikdh;
use App\Models\Kontak;
use App\Models\Tholabah;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class IkdhController extends Controller
{
    public function index(): View
    {
        $data = [
            'title' => 'Ikatan Keluarga Darul Huffadh',
            'kontaks' => Kontak::all(),
            'ikdhs' => Ikdh::whereNot('cabang', 'anggota-pusat')->orderBy('cabang', 'asc')->get()
        ];

        return view('ikdh.index', $data);
    }

    public function masterData(): View
    {
        $ikdh =  Ikdh::latest()->paginate(10);

        $data = [
            'ikdhs' => $ikdh
        ];

        return view('admin.ikdh', $data);
    }

    public function store(Tholabah $tholabah, Request $request): RedirectResponse
    {

        //Alasan pke Tholabah $tholabah karena untuk cek keamanan jkAdmin dan memastikan id is_real

        //Jika yang login tidak sesuai jk admin dan jk tholabah
        if (Auth::user()->jenis_kelamin != $tholabah->jenis_kelamin) {
            return redirect()->route('error.404')->with('waring', 'Jangan Melampaui Batas');
        }

        $data = [
            'cabang' => $request->input('ikdh'),
            'tholabah_id' => $tholabah->id,
        ];

        Ikdh::create($data);
        return redirect()->route('ikdh.masterdata')->with('success', 'IKDH Addition Successful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ikdh $ikdh)
    {
        $ikdh->delete();
        return redirect()->route('ikdh.masterdata')->with('warning', 'Data has been successfully deleted. This data cannot be restored.');
    }
}
