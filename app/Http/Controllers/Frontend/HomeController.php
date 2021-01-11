<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\FormatContent;
use App\Models\User;
use Illuminate\Http\Request;
use MarcReichel\IGDBLaravel\Models\Game;

class HomeController extends Controller
{
    public function index()
    {
        $coming_soon = Game::with(['cover', 'release_dates'])
            ->where('first_release_date', '>', today())
            ->where('status', 4)
            ->orderBy('first_release_date', 'desc')
            ->paginate(5);

        $contents = Content::where('published', '=', 1)
            ->where('category_id', 1)
            ->orWhere('category_id', 2)
            ->orWhere('category_id', 4)
            ->where('publish_at', '!=', '')
            ->orderBy('views', 'desc')
            ->paginate(6);
            foreach ($contents as $content) {
                $content->publish_at = \Carbon\Carbon::parse($content->publish_at)->format('l, d F Y H:m');
            }

        $feature_contents = Content::where('published', '=', 1)
            ->where('category_id', 5)
            ->orderBy('publish_at', 'desc')
            ->paginate(3);
            foreach ($feature_contents as $feature) {
                $feature->publish_at = \Carbon\Carbon::parse($feature->publish_at)->format('l, d F Y');
            }

        $highlight_news = Content::where('published', '=', 1)
            ->where('category_id', 1)
            ->where('highlight', 1)
            ->orderBy('publish_at', 'desc')
            ->paginate(5);

        $hypes = Game::with(['cover', 'release_dates'])
            ->where('first_release_date', '>', today())
            ->where('hypes', '>', 34)
            ->orderBy('hypes', 'desc')
            ->paginate(5);

        // $today = now()->format('Y-m-d');
        // $last5days = now()->subDays(5)->format('Y-m-d');
        $recently_release = Game::with(['cover', 'release_dates'])
            ->where('first_release_date', '<', now())
            // ->whereBetween('first_release_date.date', $today, $last5days)
            ->where('status', 0)
            // ->where('follows', '>', 1)
            ->orderBy('first_release_date', 'desc')
            ->paginate(5);

        $video_contents = Content::where('published', '=', 1)
            ->where('category_id', 4)
            ->where('publish_at', '!=', '')
            ->orderBy('views', 'desc')
            ->paginate(9);

        return view('front.home', compact('coming_soon', 'contents', 'feature_contents', 'highlight_news', 'hypes', 'recently_release', 'video_contents'));
    }
}
