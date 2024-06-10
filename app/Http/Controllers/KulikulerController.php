<?php

namespace App\Http\Controllers;

use App\Models\Kulikuler;
use Illuminate\Contracts\View\View;

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
