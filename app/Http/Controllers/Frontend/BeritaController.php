<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function Berita()
    {

        return view('front.berita');
    }

    public function LinkBerita($linkurl)
    {
        return view('berita', compact('linkurl'));
    }
}