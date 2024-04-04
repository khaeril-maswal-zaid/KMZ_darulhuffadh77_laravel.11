<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $data = [];

        return view('kontak.index', $data);
    }
}
