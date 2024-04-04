<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IkdhController extends Controller
{
    public function index()
    {
        $data = [];

        return view('ikdh.index', $data);
    }
}
