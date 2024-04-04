<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
        $data = [];

        return view('galery.index', $data);
    }
}
