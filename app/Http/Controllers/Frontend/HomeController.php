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
        $contents = Content::where('published', '=', 1)
            ->where('category_id', '!=', 3)
            ->where('publish_at', '!=', '')
            ->orderBy('views', 'desc')
            ->paginate(6);
        foreach ($contents as $content) {
            $content->publish_at = \Carbon\Carbon::parse($content->publish_at)->format('l, d F Y H:m');
        }

        $coming_soon = Game::with(['cover', 'release_dates'])
            ->where('first_release_date', '>', now())
            ->where('status', 4)
            ->get()
            ->sortBy('first_release_date');

        $hypes = Game::with(['cover', 'release_dates'])
            ->where('first_release_date', '>', now())
            ->where('hypes', '>', 34)
            ->get()
            ->sortByDesc('hypes');

        // $today = now()->format('Y-m-d');
        // $last5days = now()->subDays(5)->format('Y-m-d');
        $recently_release = Game::with(['cover', 'release_dates'])
            ->where('first_release_date', '<', now())
            // ->whereBetween('first_release_date.date', $today, $last5days)
            ->where('status', 0)
            // ->where('follows', '>', 1)
            ->get()
            ->sortByDesc('first_release_date');

        $lives = Content::where('category_id', 3)->get();

        return view('front.home', compact('coming_soon', 'contents', 'hypes', 'lives', 'recently_release'));
    }
}
