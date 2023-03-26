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
        $news = News::paginate(20);
        $title = 'Список новостей';

        return view('admin.news.index', compact('news', 'title'));
    }
}
