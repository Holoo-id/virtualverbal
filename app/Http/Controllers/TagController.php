<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topics;
use Carbon\Carbon;

class TagController extends Controller
{
    public function addNew(Request $request)
    {
        $url = strtolower(preg_replace("/\s+/", "-", $request->in_tag_name));
        Topics::create([
            'name' => $request->in_tag_name,
            'url' => $url,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route("create-content");
    }
}
