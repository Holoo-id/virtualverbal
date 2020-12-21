<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\FormatContent;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            ->paginate(10);
        $keyword = '';
        $populars = Content::where('category_id', '!=', 3)
            ->where('published', '=', 1)
            ->orderBy('views', 'desc')
            ->paginate(10);
        foreach ($contents as $content) {
            $content->publish_at = \Carbon\Carbon::parse($content->publish_at)->format('l, d F Y H:m');
        }
        foreach ($populars as $popular) {
            $popular->publish_at = \Carbon\Carbon::parse($popular->publish_at)->format('D, d F Y');
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
        $date = \Carbon\Carbon::parse($content->publish_at)->format('l, d F Y H:m');

        foreach ($content->tags as $tag) {
            $topic = $tag->id;
        }
        $relates = DB::table('v_content')
            ->join('v_relation_tags_content', 'v_content.id', '=', 'v_relation_tags_content.content_id')
            ->join('v_topics', 'v_relation_tags_content.tag_id', '=', 'v_topics.id')
            ->join('v_format_content', 'v_content.category_id', '=', 'v_format_content.id')
            ->join('users', 'v_content.created_by', '=', 'users.id')
            ->select(
                'users.name as author',
                'v_format_content.name as format',
                'v_content.category_id',
                'v_content.created_by',
                'v_content.judul',
                'v_content.permalink',
                'v_content.publish_at'
            )
            ->where('category_id', '!=', 3)
            ->where('v_content.id', '!=', $content->id)
            ->where('published', '=', 1)
            ->where('v_relation_tags_content.tag_id', '=', $topic)
            ->get();
        foreach ($relates as $relate) {
            $date2 = \Carbon\Carbon::parse($relate->publish_at)->format('l, d F Y H:m');
        }

        if (!empty($content->igdb_id)) {
            $games = Game::with(['cover', 'genres', 'platforms'])->where('id', $content->igdb_id)->get();
            foreach ($games as $game) {
                $release_date = \Carbon\Carbon::parse($game->first_release_date)->format('l, d F Y');
            }
            $developers = Company::whereIn('developed', [$content->igdb_id])->get();
            $publishers = Company::whereIn('published', [$content->igdb_id])->get();
            return view('front.content', compact('content', 'date', 'date2', 'developers', 'games', 'publishers', 'relates', 'release_date'));
        }else{
            return view('front.content', compact('content', 'date', 'date2', 'relates'));
        }
    }

    public function list()
    {
        $authors = User::all();
        $categories = FormatContent::all();
        $contents = Content::all();
        foreach ($contents as $content) {
            $content->publish_at = \Carbon\Carbon::parse($content->publish_at)->format('l, d F Y H:m');
        }
        return view('back.content-list', compact('authors', 'categories', 'contents'));
    }

    public function post()
    {
        return view('back.create-content');
    }

    public function preview($id = 340)
    {
        $content = Content::where('id', $id)->first();
        $date = \Carbon\Carbon::parse($content->publish_at)->format('l, d F Y H:m');
        return view('back.content-preview', compact('content', 'date'));
    }

    public function search(Request $request)
    {
        $authors = User::all();
        $categories = FormatContent::where('id', '!=', 3)->get();
        $keyword = $request->search;
        $contents = Content::where('published', '=', 1)
            ->where('category_id', '!=', 3)
            ->where('judul', 'like', "%".$keyword."%")
            ->orWhere('sub_judul', 'like', "%".$keyword."%")
            // ->where(function($query) use ($request){
            //     if (!empty($request->author)) {
            //         return $query->where('created_by', $request->input('author'));
            //     }
            //     if (!empty($request->category)) {
            //         return $query->where('category_id', $request->input('category'));
            //     }
            // })
            ->paginate(10);
        if (!empty($request->author)) {
            $contents = Content::where('published', '=', 1)
                ->where('created_by', '=', $request->author)
                ->paginate(10);
        }
        if (!empty($request->category)) {
            $contents = Content::where('published', '=', 1)
                ->where('category_id', '=', $request->category)
                ->paginate(10);
        }
        $populars = Content::where('category_id', '!=', 3)
            ->where('published', '=', 1)
            ->orderBy('views', 'desc')
            ->paginate(10);
        foreach ($contents as $content) {
            $content->publish_at = \Carbon\Carbon::parse($content->publish_at)->format('l, d F Y H:m');
            if (str_contains($content->judul, $keyword)) {
                $content->judul = str_replace($keyword, "<b>".$keyword."/i/m</b>", $content->judul);
            }
        }
        foreach ($populars as $popular) {
            $popular->publish_at = \Carbon\Carbon::parse($popular->publish_at)->format('D, d F Y');
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
            'published' => $request->published,
        ]);
    }
}
