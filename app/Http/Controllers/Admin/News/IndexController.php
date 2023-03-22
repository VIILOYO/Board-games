<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $news = News::paginate(10);

        return view('admin.news.index', compact('news'));
    }
}
