<?php

namespace App\Http\Middleware;

use App\Models\Content;
use Closure;
use Illuminate\Http\Request;

class Livenews
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $live_news = Content::select('judul','sub_judul')->get();
        view()->share('live_news', $live_news);
        return $next($request);
    }
}
