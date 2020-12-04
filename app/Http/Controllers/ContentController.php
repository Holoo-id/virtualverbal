<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\FormatContent;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Storage;

class ContentController extends Controller
{
    public function all()
    {
        $authors = User::all();
        $categories = FormatContent::all();
        $contents = Content::where('published', '=', 1)->paginate(10);
        // $date = Content::select('published_at');
        // $newDate = \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('l, d F Y');
        return view('front.search-result', compact('authors', 'categories', 'contents'));
    }

    public function detail($id = 340)
    {
        $content = Content::where('id', $id)->first();
        $date = $content->publish_at;
        $newDate = \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('l, d F Y');
        return view('front.content', compact('content', 'newDate'));
    }

    public function list()
    {
        $authors = User::all();
        $categories = FormatContent::all();
        $contents = Content::all();
        // $date = $contents->publish_at;
        // $newDate = \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('l, d F Y');
        // return view('front.search-result', compact('contents', 'newDate'));
        return view('back.content-list', compact('authors', 'categories', 'contents'));
    }

    public function post()
    {
        return view('back.create-content');
    }

    public function preview($id = 340)
    {
        $content = Content::where('id', $id)->first();
        $date = $content->publish_at;
        $newDate = \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('l, d F Y');
        return view('back.content-preview', compact('content', 'newDate'));
    }

    public function tambah(Request $request)
    {
        $uploadedFile = $request->file('file');
        $path = $uploadedFile->store('public/files');
        $file = Content::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'sub_judul' => $request->sub_judul,
            'permalink' => $request->permalink,
            'image_path' => $path,
            'image_name' => $request->title ?? $uploadedFile->getClientOriginalName(),
            'category_id' => $request->category_id,
            'published' => $request->published,
        ]);
    }
}
