<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\FormatContent;
use App\Models\Topics;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use MarcReichel\IGDBLaravel\Models\Company;
use MarcReichel\IGDBLaravel\Models\Game;
use Storage;

class ContentController extends Controller
{
    public function all(Request $request)
    {
        $authors = User::all();
        $categories = FormatContent::where('id', '!=', 3)->get();
        $contents = Content::where('published', '=', 1)
            ->where('category_id', '!=', 3)
            ->where('publish_at', '!=', '')
            ->orderBy('publish_at', 'desc')
            ->paginate(10);
        $keyword = '';
        $populars = Content::where('published', '=', 1)
            ->where('category_id', '!=', 3)
            ->where('publish_at', '!=', '')
            ->orderBy('views', 'desc')
            ->paginate(10);
        foreach ($contents as $content) {
            $content->publish_at = \Carbon\Carbon::parse($content->publish_at)->format('l, d F Y H:m');
        }
        foreach ($populars as $popular) {
            $popular->publish_at = \Carbon\Carbon::parse($popular->publish_at)->format('D, d M Y');
        }
        if ($request->ajax()) {
            $view = view('front.layouts.components.data-search', compact('authors', 'categories', 'contents'))->render();
            return response()->json(['html' => $view]);
        }
        return view('front.search-result', compact('authors', 'categories', 'contents', 'keyword', 'populars'));
    }

    public function detail($permalink)
    {
        $content = Content::where('permalink', $permalink)->first();
        //count views
        $count = $content->increment('views');
        $content->update([
            'views' => $count
        ]);
        $content->publish_at = \Carbon\Carbon::parse($content->publish_at)->format('l, d F Y H:m');

        // sidebar
        $latest = Content::where('published', '=', 1)
            ->where('category_id', '!=', 3)
            ->where('id', '!=', $content->id)
            ->where('publish_at', '!=', '')
            ->orderBy('publish_at', 'desc')
            ->paginate(5);
        $populars = Content::where('published', '=', 1)
            ->where('category_id', '!=', 3)
            ->where('id', '!=', $content->id)
            ->where('publish_at', '!=', '')
            ->orderBy('views', 'desc')
            ->paginate(5);
            
        foreach ($latest as $late) {
            $late->publish_at = \Carbon\Carbon::parse($late->publish_at)->format('D, d F Y');
        }
        
        foreach ($populars as $popular) {
            $popular->publish_at = \Carbon\Carbon::parse($popular->publish_at)->format('D, d F Y');
        }

        // topipcs
        if (!empty($content->tags)) {
            $relates = Content::whereHas('tags', function ($q) use ($content) {
                return $q->whereIn('name', $content ->tags->pluck('name')); 
            })
            ->where('category_id', '!=', 3)
            ->where('published', '=', 1)
            ->where('id', '!=', $content->id) // So you won't fetch same post
            ->get();
            foreach ($relates as $relate) {
                $relate->publish_at = \Carbon\Carbon::parse($relate->publish_at)->format('l, d F Y H:m');
            }
        }
        
        // igdb
        if (!empty($content->igdb_id)) {
            $games = Game::with(['cover', 'genres', 'platforms'])->where('id', $content->igdb_id)->get();
            foreach ($games as $game) {
                $game->first_release_date = \Carbon\Carbon::parse($game->first_release_date)->format('l, d F Y');
            }
            $developers = Company::whereIn('developed', [$content->igdb_id])->get();
            $publishers = Company::whereIn('published', [$content->igdb_id])->get();
            return view('front.content', compact('content', 'developers', 'games', 'latest', 'publishers', 'populars', 'relates'));
        }else{
            return view('front.content', compact('content', 'latest', 'populars', 'relates'));
        }
    }

    public function list()
    {
        $authors = User::all();
        $categories = FormatContent::all();
        $contents = Content::with(['writer'])
            ->orderBy('created_at', 'desc')
            ->paginate(20);
        return view('back.content-list', compact('authors', 'categories', 'contents'));
    }

    public function post()
    {
        $categories = FormatContent::all();
        $tags = Topics::all();
        $games = Game::all();
        // $games = Game::where('name', 'like', 'a%')->get();
        return view('back.create-content', compact('categories', 'games', 'tags'));
    }

    public function preview($permalink)
    {
        $content = Content::where('permalink', $permalink)->first();
        $content->created_at = \Carbon\Carbon::parse($content->created_at)->format('l, d F Y H:m');
        return view('back.content-preview', compact('content'));
    }

    public function search(Request $request)
    {
        $authors = User::all();
        $categories = FormatContent::where('id', '!=', 3)->get();
        $keyword = $request->search;
        $contents = Content::where('published', '=', 1)
            ->where('category_id', '!=', 3)
            ->where('publish_at', '!=', '')
            ->where('judul', 'like', "%".$keyword."%")
            ->orWhere('sub_judul', 'like', "%".$keyword."%")
            ->paginate(10);
        if (!empty($request->author)) {
            $contents = Content::where('published', '=', 1)
                ->where('category_id', '!=', 3)
                ->where('publish_at', '!=', '')
                ->where('created_by', '=', $request->author)
                ->paginate(10);
        }
        if (!empty($request->category)) {
            $contents = Content::where('published', '=', 1)
                ->where('category_id', '!=', 3)
                ->where('publish_at', '!=', '')
                ->where('category_id', '=', $request->category)
                ->paginate(10);
        }
        $populars = Content::where('published', '=', 1)
            ->where('category_id', '!=', 3)
            ->where('publish_at', '!=', '')
            ->orderBy('views', 'desc')
            ->paginate(10);
        foreach ($contents as $content) {
            $content->publish_at = \Carbon\Carbon::parse($content->publish_at)->format('l, d F Y H:m');
            if (str_contains($content->judul, $keyword)) {
                $content->judul = str_replace($keyword, "<p style=\"background-color: #1c95f3\">".$keyword."</p>", $content->judul);
                $content->sub_judul = str_replace($keyword, "<p style=\"background-color: #1c95f3\">".$keyword."</p>", $content->sub_judul);
            }
        }
        foreach ($populars as $popular) {
            $popular->publish_at = \Carbon\Carbon::parse($popular->publish_at)->format('D, d M Y');
        }
        if ($request->ajax()) {
            $view = view('front.layouts.components.data-search', compact('authors', 'categories', 'contents'))->render();
            return response()->json(['html' => $view]);
        }
        return view('front.search-result', compact('authors', 'categories', 'contents', 'keyword', 'populars'));
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
        ]);
    }
    public function edit($permalink)
    {
        // $data = Content::find($id);
        $content = Content::where('permalink', $permalink)
            ->first();
        $categories = FormatContent::all();
        $tags = Topics::all();
        $games = Game::all();
        // $category = DB::table('v_format_content')->get();
        return view('back.edit-content', compact('content', 'categories', 'games', 'tags'));
    }
    public function update(Request $request)
    {
        $uploadedFile = $request->file('file');
        $path = $uploadedFile->store('public/files');
        $file = Content::where('id',$request->id)->update([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'sub_judul' => $request->sub_judul,
            'permalink' => $request->permalink,
            'image_path' => $path,
            'image_name' => $request->title ?? $uploadedFile->getClientOriginalName(),
            'category_id' => $request->category_id,
        ]);
    }
}
