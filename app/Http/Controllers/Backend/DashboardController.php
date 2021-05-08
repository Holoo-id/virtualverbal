<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $creates = Content::where('created_by', Auth::id())->get();

        $publishes = Content::where('created_by', Auth::id())
            ->where('published', 1)
            ->get();

        $unpublishes = Content::where('created_by', Auth::id())
            ->where('published', 0)
            ->get();

        $top_views = Content::where('created_by', Auth::id())
            ->where('published', 1)
            ->orderBy('views', 'desc')
            ->paginate(4);
        foreach ($top_views as $top_view) {
            $top_view->publish_at = \Carbon\Carbon::parse($top_view->publish_at)->format('l, d F Y H:m');
        }

        return view('back.dashboard', compact('creates', 'publishes', 'top_views', 'unpublishes'));
    }
}
