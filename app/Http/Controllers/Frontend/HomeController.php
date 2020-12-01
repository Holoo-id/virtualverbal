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
        // $date = $contents->publish_at;
        // $newDate = \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('l, d F Y');
        // return view('front.search-result', compact('contents', 'newDate'));
        return view('front.home', compact('contents'));
    }
}
