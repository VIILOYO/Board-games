<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }
}
