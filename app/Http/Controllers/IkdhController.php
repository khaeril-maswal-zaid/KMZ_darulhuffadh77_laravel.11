<?php

namespace App\Http\Controllers;

use App\Models\Ikdh;
use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class IkdhController extends Controller
{
    public function index(): View
    {
        $data = [
            'title' => 'Ikatan Keluarga Darul Huffadh',
            'kontaks' => Kontak::all(),
            'ikdhs' => Ikdh::all()
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ikdh $ikdh)
    {
        $ikdh->delete();
        return redirect()->route('ikdh.masterdata')->with('success', 'Data has been successfully deleted. This data cannot be restored.');
    }
}
