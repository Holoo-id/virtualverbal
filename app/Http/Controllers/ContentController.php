<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\FormatContent;
use App\Models\Topics;
use App\Models\User;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use MarcReichel\IGDBLaravel\Models\Company;
use MarcReichel\IGDBLaravel\Models\Game;
use Storage;

class ContentController extends Controller
{
    use SEOToolsTrait;

    public function all(Request $request)
    {
        $authors = User::all();
        $categories = FormatContent::where('id', 1)
            ->orWhere('id', 2)
            ->orWhere('id', 4)
            ->get();
        $contents = Content::where('published', '=', 1)
            ->where('publish_at', '!=', '')
            ->where('category_id', 1)
            ->orWhere('category_id', 2)
            ->orWhere('category_id', 4)
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

        $this->seo()->setTitle($content->judul);
        $this->seo()->setDescription($content->sub_judul);
        // SEOMeta::addMeta('article:published_time', $content->publish_at, 'property');
        // SEOMeta::addMeta('article:section', $content->formatContent->name, 'property');
        // $this->seo()->addKeyword(['key1', 'key2', 'key3']);

        $this->seo()->opengraph()->addProperty('type', 'articles');

        $this->seo()->twitter()->setImage(asset($content->image_path));
        $this->seo()->twitter()->setType('summary_large_image');
        
        $this->seo()->jsonLdMulti()->addImage(asset($content->image_path));
        $this->seo()->jsonLdMulti()->setType('Article');

        // sidebar
        $latest = Content::where('published', '=', 1)
            ->where('publish_at', '!=', '')
            ->where('id', '!=', $content->id)
            ->where('category_id', 1)
            ->orWhere('category_id', 2)
            ->orWhere('category_id', 4)
            ->orderBy('publish_at', 'desc')
            ->paginate(5);
        $populars = Content::where('published', '=', 1)
            ->where('publish_at', '!=', '')
            ->where('id', '!=', $content->id)
            ->where('category_id', 1)
            ->orWhere('category_id', 2)
            ->orWhere('category_id', 4)
            ->orderBy('views', 'desc')
            ->paginate(5);
            
        foreach ($latest as $late) {
            $late->publish_at = \Carbon\Carbon::parse($late->publish_at)->format('D, d F Y');
        }
        
        foreach ($populars as $popular) {
            $popular->publish_at = \Carbon\Carbon::parse($popular->publish_at)->format('D, d F Y');
        }

        // topics
        if (!empty($content->tags)) {
            $relates = Content::whereHas('tags', function ($q) use ($content) {
                    return $q->whereIn('name', $content ->tags->pluck('name')); 
                })
                ->where('publish_at', '!=', '')
                ->where('id', '!=', $content->id)
                ->where('category_id', 1)
                ->orWhere('category_id', 2)
                ->orWhere('category_id', 4)
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

    public function edit($permalink)
    {
        $content = Content::where('permalink', $permalink)
            ->first();
        $categories = FormatContent::all();
        $tags = Topics::all();
        $games = Game::all();
        return view('back.edit-content', compact('content', 'categories', 'games', 'tags'));
    }

    public function findIgdbGame($name)
    {
        $data = Game::where('name', 'ilike', "%".$name."%")->get();
        // if ($request->ajax()) {
        //     if ($request->get('query') == '') {
        //         $data = Game::all();
        //     } else {
                // $data = Game::where('name', 'ilike', "%".$name."%")->get();
        //     }
        //     if ($data->count() > 0) {
        //         foreach ($data as $game) {
        //             $output = "
        //                 <option value='".$game->id."'>".$game->name."</option>
        //             ";
        //         }
        //     }
        //     $data = ['option' => $output];
        // }
        echo json_encode($data);
    }

    public function list(Request $request)
    {
        $authors = User::all();
        $content = Content::with(['writer']);
            if ($request->filled('kategori')) {
                $content->where('category_id', $request->kategori);
            }
            if ($request->filled('search')) {
                $content->where('judul', 'like', "%".$request->search."%")
                    ->orWhere('sub_judul', 'like', "%".$request->search."%");
            }
            if ($request->filled('sort')) {
                if ($request->sort == 1) {
                    $content->orderBy('judul', 'asc');
                }
                if ($request->sort == 2) {
                    $content->orderBy('judul', 'desc');
                }
                if ($request->sort == 3) {
                    $content->orderBy('publish_at', 'desc');
                }
                if ($request->sort == 4) {
                    $content->orderBy('views', 'desc');
                }
                if ($request->sort == 4) {
                    $content->orderBy('publish_at', 'asc');
                }
            }
            if ($request->filled('penulis')) {
                $content->where('created_by', $request->penulis);
            }
        // $content = Content::with(['writer'])->orderBy('created_at', 'desc');
        if (Auth::user()->role_id == 7) {
            $categories = FormatContent::all();
            $contents = $content->paginate(20);
        } else {
            $categories = FormatContent::where('id', '!=', 5)->get();
            $contents = $content->where('created_by', Auth::id())->paginate(20);
        }
                    
        foreach ($contents as $content) {
            $content->publish_at = \Carbon\Carbon::parse($content->publish_at)->format('l, d F Y H:m'); 
        }
        return view('back.content-list', compact('authors', 'categories', 'contents'));
    }

    public function post()
    {
        if (Auth::user()->role_id == 7) {
            $categories = FormatContent::all();
        } else {
            $categories = FormatContent::where('id', '!=', 5)->get();
        }
        $tags = Topics::all();
        // $games = Game::all();
        $games = Game::
            where('name', 'ilike', "%war%")
            // where('slug', 'like', "%football%")
            ->get();
        return view('back.create-content', compact('categories', 'games', 'tags'));
    }

    public function preview($permalink)
    {
        $content = Content::where('permalink', $permalink)->with('tags')->first();
        $content->created_at = \Carbon\Carbon::parse($content->created_at)->format('l, d F Y H:m');
        return view('back.content-preview', compact('content'));
    }

    public function search(Request $request)
    {
        $authors = User::all();
        $categories = FormatContent::where('id', 1)
            ->orWhere('id', 2)
            ->orWhere('id', 4)
            ->get();
        $keyword = $request->search;
        
        $content = Content::where('published', 1)
            ->where('publish_at', '!=', '');
            if ($request->filled('penulis')) {
                $content->where('created_by', $request->penulis);
            }
            if ($request->filled('kategori')) {
                $content->where('category_id', $request->kategori);
            }
            if ($request->filled('search')) {
                $content->where('judul', 'like', "%".$request->search."%")
                    ->orWhere('sub_judul', 'like', "%".$request->search."%");
            }
            if ($request->filled('sort')) {
                if ($request->sort == 1) {
                    $content->orderBy('judul', 'asc');
                }
                if ($request->sort == 2) {
                    $content->orderBy('judul', 'desc');
                }
                if ($request->sort == 3) {
                    $content->orderBy('publish_at', 'desc');
                }
                if ($request->sort == 4) {
                    $content->orderBy('views', 'desc');
                }
                if ($request->sort == 4) {
                    $content->orderBy('publish_at', 'asc');
                }
            }
            $contents = $content
                ->where('category_id', '!=', 3)
                ->where('category_id', '!=', 5)
                ->paginate(10);
                    
            foreach ($contents as $content) {
                $content->publish_at = \Carbon\Carbon::parse($content->publish_at)->format('l, d F Y H:m');
            }

        if ($request->ajax()) {
            $view = view('front.layouts.components.data-search', compact('authors', 'categories', 'contents'))->render();
            return response()->json(['html' => $view]);
        }

        $populars = Content::where('published', '=', 1)
            ->where('publish_at', '!=', '')
            ->where('category_id', 1)
            ->orWhere('category_id', 2)
            ->orWhere('category_id', 4)
            ->orderBy('views', 'desc')
            ->paginate(10);
            foreach ($populars as $popular) {
                $popular->publish_at = \Carbon\Carbon::parse($popular->publish_at)->format('D, d M Y');
            }

        return view('front.search-result', compact('authors', 'categories', 'contents', 'keyword', 'populars'));
    }

    public function create(Request $request)
    {
        $uploadedFile = $request->file('in_file');
        $uploadedFile->storePubliclyAs('public/images/contents/', $request->in_img_title.".".$uploadedFile->extension());
        $image_path = "storage/images/contents/".$request->in_img_title;

        $createdContent = Content::create([
            'judul' => $request->in_judul,
            'konten' => htmlspecialchars($request->in_konten),
            'sub_judul' => $request->in_sub_judul,
            'permalink' => $request->in_permalink,
            'image_path' => $image_path,
            'image_name' => $request->in_img_title ?? $uploadedFile->getClientOriginalName(),
            'category_id' => $request->in_category_id,
            'igdb_id' => ($request->in_igdb_id==0)?null:$request->in_igdb_id,
            'created_at' => Carbon::now(),
            'created_by' => Auth::user()->id,
        ]);

        $tags = $request->in_tags;
        foreach($tags as $tag){
            DB::table('v_relation_tags_content')->insert([
                ['content_id' => $createdContent->id, 'tag_id' => $tag],
            ]);
        }
        return redirect()->route("content-list");
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
