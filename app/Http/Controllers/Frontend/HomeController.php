<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\FormatContent;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $contents = Content::where('published', '=', 1)->paginate(6);
        foreach ($contents as $content) {
            $content->publish_at = \Carbon\Carbon::parse($content->publish_at)->format('l, d F Y H:m');
        }
        return view('front.home', compact('contents'));
    }
}
