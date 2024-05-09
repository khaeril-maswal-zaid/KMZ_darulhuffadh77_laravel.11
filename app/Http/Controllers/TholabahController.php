<?php

namespace App\Http\Controllers;

use App\Models\Tholabah;
use Illuminate\Http\Request;

class TholabahController extends Controller
{
    public function index()
    {
        $data = Tholabah::all();
        dd($data->toArray());

        return view('tholabah.index', $data);
    }
}
