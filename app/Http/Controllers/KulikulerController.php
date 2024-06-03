<?php

namespace App\Http\Controllers;

use App\Models\KulikulerPersonil;
use App\Models\Kontak;
use App\Models\Kulikuler;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class KulikulerController extends Controller
{
    public function index(): View
    {
        $kulikulers =  Kulikuler::all();
        $data = [
            'kulikulers' => $kulikulers
        ];

        return view('admin.master-kulikuler', $data);
    }
}
