<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(): View
    {
        $data = [];

        return view('admin.index', $data);
    }

    public function eror404(): View
    {
        $data = [];

        return view('errors.404-admin', $data);
    }
}
