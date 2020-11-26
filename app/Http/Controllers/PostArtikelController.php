<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostArtikel;
use Storage;
use Illuminate\Http\RedirectResponse;

class PostArtikelController extends Controller
{
    public function post()
    {
        return view('back.create-content');
    }
    public function tambah(Request $request)
    {

        $uploadedFile = $request->file('file');
        $path = $uploadedFile->store('public/files');
        $file = PostArtikel::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'sub_judul' => $request->sub_judul,
            'permalink' => $request->permalink,
            'image_path' => $path,
            'image_name' => $request->tittle ?? $uploadedFile->getClientOriginalName(),
            'category_id' => $request->category_id,
            'published' => $request->published,
        ]);

      
    }
}
