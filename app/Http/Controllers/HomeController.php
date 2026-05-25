<?php

namespace App\Http\Controllers;

use App\Models\Nucleo;

class HomeController extends Controller
{
    public function index()
    {
        $nucleos = Nucleo::all();

        return view('home', compact('nucleos'));
    }
}