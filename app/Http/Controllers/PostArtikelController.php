<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostArtikel;

class PostArtikelController extends Controller
{
    public function post()
    {
        return view('back.create-content');
    }
    public function tambah(Request $request)
    {
        $tambah = new PostArtikel;
        $tambah->judul = $request->judul;
        $tambah->konten = $request->konten;
        $tambah->sub_judul = $request->sub_judul;
        $tambah->permalink = $request->permalink;

        $file = $request->file('image');
                $fileName = $file->getClientOriginalName();
                $request->file('image')->move('storage/', $fileName);
        $tambah->image_name = $fileName;

        $tambah->category_id = $request->category_id;
        $tambah->published = $request->published;
        $tambah->save();
    }
}
